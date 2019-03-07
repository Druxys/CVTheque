<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07/03/2019
 * Time: 10:18
 */

class Email  extends CI_Controller
{
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
        $this->load->library('ConfirmationMail');
    }


    public function index()
    {

    }
}