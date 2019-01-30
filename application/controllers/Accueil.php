<?php
class Accueil extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Model_user");
    }

    public function index($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/accueil/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

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

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

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

    public function signIn() {
        $data = array();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

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
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === false) {


            $this->load->view('templates/header', $data);
            $this->load->view('accueil/signIn', $data);
            $this->load->view('templates/footer', $data);

        } else {

            // set variables from the form
            $mail = $this->input->post('mail');
            $password = $this->input->post('password');

            if ($this->Model_user->userVerify($mail, $password)) {

                // user login ok

                $_SESSION['logged_in'] = true;

                $this->load->view('templates/header', $data);
                $this->load->view('accueil/index', $data);
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

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }

            // user logout ok
            $this->load->view('header');
            $this->load->view('user/logout/logout_success', $data);
            $this->load->view('footer');

        } else {

            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');

        }

    }
}