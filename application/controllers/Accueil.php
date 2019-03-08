<?php
class Accueil extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Model_user");
        $this->load->library('session');
        $this->load->library('javascript');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
//        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->library('ConfirmationMail');
    }

// <-------------------- Page d'accueil -------------------->
    public function index($page = 'home')
    {
        // SI la page n'existe pas
        if ( ! file_exists(APPPATH.'views/accueil/'.$page.'.php'))
        {
            // Erreur 404
            show_404();
        }
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // Capitalize the first letter


        if (isset($_POST['submit'])) {
//      Définition des règles pour le formulaire
            $rules = array(
                array(
                    'field' => 'name',
                    'label' => 'Nom',
                    'rules' => 'trim|required|alpha|min_length[2]|max_length[100]'
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'trim|required|valid_email'
                ),
                array(
                    'field' => 'text',
                    'label' => 'Texte',
                    'rules' => 'trim|required|max_length[255]'
                ),
                array(
                    'field' => 'mail',
                    'label' => 'Email',
                    'rules' => 'trim|required|valid_email'
                ),
                array(
                    'field' => 'checkbox',
                    'label' => 'Checkbox',
                    'rules' => 'trim|required'
                ),
            );
//            Attribution des règles au formulaire CONTACT
            $this->form_validation->set_rules($rules);

            //Execution du formulaire
            if ($this->form_validation->run() === FALSE) {
                // fonction envoi mail
                $this->confirmationmail->contactMail($_POST['name'], $_POST['text']);
            }
        }

//        Chargement de la page
        $this->load->view('templates/header', $data);
        $this->load->view('accueil/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }


    // <-------------------- Page d'inscription -------------------->
    public function signUp($page = 'signUp')
    {
        // SI la page n'existe pas
        $data = array();
        if ( ! file_exists(APPPATH.'views/accueil/'.$page.'.php'))
        {
            // Erreur 404
            show_404();
        }

//      Définition des règles pour le formulaire
        $config = array(
            array(
                'field' => 'mail',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[cvt_users.user_mail]',
                'errors' => array (
                    'is_unique' => 'Adresse %s déjà utilisé',

                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => ' %s est requis.',
                ),
            ),
            array(
                'field' => 'passconf',
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]'

            )
        );

//            Attribution des règles au formulaire CONTACT
        $this->form_validation->set_rules($config);

        //Execution du formulaire
//        SI il y a des erreur pendant la saisie du formulaire
//        on revoit sur la page d'accueil fournissant les erreurs
        if ($this->form_validation->run() === FALSE)
        {
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view('templates/header', $data);
            $this->load->view('accueil/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }
        else
        {
            $email    = $this->input->post('mail');
            $password = $this->input->post('password');

//          Insertion d'un user dans la BDD
            if ($this->Model_user->create_user($email, $password)) {

                // user creation ok
                $this->load->view('templates/header');
                header( "refresh:3;url=../" );
                $this->load->view('accueil/registerSuccess', $data);
                $this->load->view('templates/footer');

            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('accueil/'.$page, $data);
                $this->load->view('templates/footer', $data);

            }
        }

    }
// <-------------------- Page de connexion -------------------->
    public function signIn($page = 'signIn') {
        $data = array();
        if ( ! file_exists(APPPATH.'views/accueil/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

//        Définition des règles pour le formulaire
        $config = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Vous devez fournir un %s.',
                ),
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === false) {


            $this->load->view('templates/header', $data);
            $this->load->view('accueil/signIn', $data);
            $this->load->view('templates/footer', $data);

        } else {

            // set variables from the form
            $mail = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->Model_user->test_mail($mail);

//           Véfirie si la saisie est corect dans la BDD
            if ($this->Model_user->userVerify($mail, $password)) {

                // création d'un tableau pour nourrir $_SESSION
                $newdata = array(
                    'email'     => $mail,
                    'id' => $user[0]['idcvt_users'],
                    'logged_in' => TRUE
                );
                // Insertion du tableau
                $this->session->set_userdata($newdata);

                $this->load->view('templates/header', $data);
                // Redirection de la page par un compteur
                header( "refresh:3;url=accueil" );
                $this->load->view('accueil/loginSuccess', $data);
                $this->load->view('templates/footer', $data);

            } else {

                // send error to the view
                $this->load->view('templates/header', $data);
                $this->load->view('accueil/signIn', $data);
                $this->load->view('templates/footer', $data);

            }

        }

    }
// <-------------------- Page de déconnexion -------------------->
    public function signOut() {

        $data = array();
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // user logout ok
            $this->session->sess_destroy();
            $this->load->view('templates/header');
            header( "refresh:3;url=accueil" );
            $this->load->view('accueil/deconnexionSuccess');
            $this->load->view('templates/footer');

        }
        else {
            $this->load->view('accueil', $data);
       }

    }
// <-------------------- Page mot de passe oublié -------------------->
    public function forgetPassword() {
        $data = array();
        $config = array(
            array(
                'field' => 'mail',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            )
        );


        $this->form_validation->set_rules($config);


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('accueil/forgetPassword', $data);
            $this->load->view('templates/footer', $data);
        }
        else
        {
            $email    = $this->input->post('mail');

            if ($this->Model_user->getEmail($email) === TRUE) {

                // email ok
                $this->Model_user->getTokenByMail($_POST['mail']);
                $this->confirmationmail->sendMailPassword($_POST['mail']);
                $this->load->view('templates/header', $data);
                $this->load->view('accueil/emailFound', $data);
                $this->load->view('templates/footer', $data);

            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('accueil/forgetPassword', $data);
                $this->load->view('templates/footer', $data);

            }
        }
    }

    // <-------------------- Page mot de passe oublié -------------------->
    public function changePassword() {
        $data = array();
        $config = array(
            array(
                'field' => 'password1',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Vous devez fournir un %s.',
                )
            ),
            array(
                'field' => 'password2',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Vous devez fournir un %s.',
                ),
            )

        );


        $this->form_validation->set_rules($config);


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('accueil/changePassword', $data);
            $this->load->view('templates/footer', $data);
        }
        else
        {
                $email    = $this->input->post('mail');

                if ($this->Model_user->getEmail($email) === TRUE) {

                    // email ok
                    $token = $this->Model_user->getTokenByMail($_POST['mail']);
                    $this->confirmationmail->sendMailPassword($_POST['mail'], $token);
                    $this->load->view('templates/header', $data);
                    $this->load->view('accueil/emailFound', $data);
                    $this->load->view('templates/footer', $data);

                } else {
                    $this->load->view('templates/header', $data);
                    $this->load->view('accueil/forgetPassword', $data);
                    $this->load->view('templates/footer', $data);

            }
        }
    }
}