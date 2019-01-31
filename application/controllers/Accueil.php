<?php
class Accueil extends CI_Controller {

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

    public function about($page = 'about')
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
//    public function viewIndex()
//    {
//        if ( ! file_exists(APPPATH.'views/pages/home.php'))
//        {
//            // Whoops, we don't have a page for that!
//            show_404();
//        }
//
//        $data['title'] = ucfirst('home'); // Capitalize the first letter
//
//        $this->load->view('templates/header', $data);
//        $this->load->view('pages/home.php', $data);
//        $this->load->view('templates/footer', $data);
//    }
}