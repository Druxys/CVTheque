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
        $this->load->library('email');
    }


    public function index($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/accueil/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('accueil/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function signUp($page = 'signUp')
    {
        $data = array();
        if ( ! file_exists(APPPATH.'views/accueil/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
//
//        $this->load->helper(array('form', 'url'));
//
//        $this->load->library('form_validation');

        $config = array(
            array(
                'field' => 'mail',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'passconf',
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]'

            )
        );


        $this->form_validation->set_rules($config);


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

            if ($this->Model_user->create_user($email, $password)) {

                // user creation ok
                $this->load->view('templates/header');
                $this->load->view('accueil/registerSuccess', $data);
                $this->load->view('templates/footer');

            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('accueil/'.$page, $data);
                $this->load->view('templates/footer', $data);

            }
        }

    }

    public function signIn($page = 'signIn') {
        $data = array();
        if ( ! file_exists(APPPATH.'views/accueil/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }





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
                    'required' => 'You must provide a %s.',
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


            if ($this->Model_user->userVerify($mail, $password)) {

                // user login ok
               // $id = $this->input->get('id', TRUE)
                $newdata = array(
                    'email'     => $mail,
                    'id' => $user[0]['idcvt_users'],
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($newdata);

                $this->load->view('templates/header', $data);
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

    public function signOut() {

        $data = array();
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // user logout ok
            $this->session->sess_destroy();
            $this->load->view('accueil/signIn', $data);

        }
        else {
            $this->load->view('accueil/loginSuccess', $data);
       }

    }

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