<?php
class Accueil extends CI_Controller {

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
        if ( ! file_exists(APPPATH.'views/accueil/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|min_length[5]|max_length[12]|is_unique[users.username]',
                'errors' => array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
                ),
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
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = ucfirst($page); // Capitalize the first letter
//            $this->load->view('templates/header', $data);
            $this->load->view('accueil/'.$page, $data);
//            $this->load->view('templates/footer', $data);
        }
        else
        {
            $this->load->view('formsuccess');
        }

    }

}