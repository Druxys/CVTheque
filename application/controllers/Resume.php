<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 26/02/2019
 * Time: 14:04
 */

class Resume  extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Model_resume");
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('email');
    }

    public function frmResume($page = 'frmResume')
    {

        if (!file_exists(APPPATH . 'views/accueil/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        else {
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $config = array(
            array(
                'field' => 'firstName',
                'label' => 'FirstName',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'lastName',
                'label' => 'lastName',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'nationality',
                'label' => 'nationality',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'birthDate',
                'label' => 'birthDate',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'application',
                'label' => 'application',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'description',
                'label' => 'description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view('templates/header', $data);
            $this->load->view( 'accueil/'.$page, $data);
            var_dump($_SESSION);


//           echo '<pre>';
//             print_r($this->Model_resume->view($_SESSION['id']));
//            echo '</pre>';

            $this->load->view('templates/footer', $data);
        } else {
            $id = $_SESSION['id'];
            $genre = $this->input->post('genre');
            $firstName = $this->input->post('firstName');
            $lastName = $this->input->post('lastName');
            $nationality = $this->input->post('nationality');
            $birthDate = $this->input->post('birthDate');
            $application = $this->input->post('application');
            $description = $this->input->post('description');
            $address = $this->input->post('address');
            $postCode = $this->input->post('postCode');
            $city = $this->input->post('city');
            $mail = $this->input->post('mail');
            $tel = $this->input->post('tel');


                if ($this->Model_resume->insert1($id, $genre, $firstName, $lastName, $nationality, $birthDate, $application, $description, $address, $postCode, $city, $mail, $tel) === TRUE) {

                    // resume creation ok
                    $this->load->view('templates/header');
                    $this->load->view('accueil/succesResume', $data);
                    $this->load->view('templates/footer');

                } else {
                    $this->load->view('templates/header', $data);
                    $this->load->view('trou/' . $page, $data);
                    $this->load->view('templates/footer', $data);

                }

         }
        }
    }
}