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
        $data['title'] = ucfirst($page); // Capitalize the first letter
            $config = array(
                array(
                    'field' => 'firstName',
                    'label' => 'FirstName',
                    'rules' => 'trim|required|min_length[3]|max_length[75]',
                    'errors' => array(
                        'trim' => 'Le prénom est invalide.',
                        'required' => 'Veuillez renseigner un prénom.',
                        'min_length[3]' => 'Le prénom renseigné doit faire au moins 3 caractères.',
                        'max_length[75]' => 'Le prénom renseigné ne doit pas faire plus de 75 caractères.',
                    ),
                ),
                array(
                    'field' => 'lastName',
                    'label' => 'lastName',
                    'rules' => 'trim|required|min_length[3]|max_length[75]',
                    'errors' => array(
                        'trim' => 'Le nom est invalide.',
                        'required' => 'Veuillez renseigner un nom.',
                        'min_length[3]' => 'Le nom renseigné doit faire au moins 3 caractères.',
                        'max_length[75]' => 'Le nom renseigné ne doit pas faire plus de 75 caractères.',
                    ),
                ),
                array(
                    'field' => 'nationality',
                    'label' => 'nationality',
                    'rules' => 'trim|required|min_length[3]|max_length[75]',
                    'errors' => array(
                        'trim' => 'La nationalité est invalide.',
                        'required' => 'Veuillez renseigner une nationalité.',
                        'min_length[3]' => 'La nationalité renseignéé doit faire au moins 3 caractères.',
                        'max_length[75]' => 'La nationalité renseignée ne doit pas faire plus de 75 caractères.',
                    ),
                ),
                array(
                    'field' => 'birthDate',
                    'label' => 'birthDate',
                    'rules' => 'trim|required',
                    'errors' => array(
                        'trim' => 'La date de naissance est invalide.',
                        'required' => 'Veuillez renseigner une date de naissance.',
                    ),
                ),
                array(
                    'field' => 'application',
                    'label' => 'application',
                    'rules' => 'trim|required|min_length[3]|max_length[75]',
                    'errors' => array(
                        'trim' => 'Le poste ciblé est invalide.',
                        'required' => 'Veuillez renseigner un poste ciblé.',
                        'min_length[3]' => 'Le poste ciblé renseigné doit faire au moins 3 caractères.',
                        'max_length[75]' => 'Le poste ciblé renseigné ne doit pas faire plus de 75 caractères.',
                    ),
                ),
                array(
                    'field' => 'description',
                    'label' => 'description',
                    'rules' => 'trim|min_length[3]|max_length[1500]',
                    'errors' => array(
                        'trim' => 'La description est invalide.',
                        'required' => 'Veuillez renseigner une courte description.',
                        'min_length[3]' => 'La description renseignée doit faire au moins 3 caractères.',
                        'max_length[75]' => 'La description renseignée ne doit pas faire plus de 75 caractères.',
                    ),
                ),
                array(
                    'field' => 'address',
                    'label' => 'addresse',
                    'rules' => 'trim|required|min_length[3]|max_length[75]',
                    'errors' => array(
                        'trim' => 'L\'addresse est invalide.',
                        'required' => 'Veuillez renseigner une addresse.',
                        'min_length[3]' => 'L\'addresse renseignée doit faire au moins 3 caractères.',
                        'max_length[75]' => 'L\'addresse renseignée ne doit pas faire plus de 75 caractères.',
                    ),
                ),
                array(
                    'field' => 'postCode',
                    'label' => 'code postal',
                    'rules' => 'trim|required|min_length[3]|max_length[75]',
                    'errors' => array(
                        'trim' => 'Le code postal est invalide.',
                        'required' => 'Veuillez renseigner un code postal.',
                        'min_length[3]' => 'Le code postal renseigné doit faire au moins 3 caractères.',
                        'max_length[75]' => 'Le code postal renseigné ne doit pas faire plus de 75 caractères.',
                    ),
                ),
                array(
                    'field' => 'city',
                    'label' => 'ville',
                    'rules' => 'trim|required|min_length[3]|max_length[75]',
                    'errors' => array(
                        'trim' => 'La ville renseignée est invalide.',
                        'required' => 'Veuillez renseigner une ville.',
                        'min_length[3]' => 'La ville renseignée doit faire au moins 3 caractères.',
                        'max_length[75]' => 'La ville renseignée ne doit pas faire plus de 75 caractères.',
                    ),
                ),
                array(
                    'field' => 'mail',
                    'label' => 'email',
                    'rules' => 'trim|valid_email|required',
                    'errors' => array(
                        'trim' => 'L\'addresse mail renseignée est invalide.',
                        'valid_email' => 'L\addresse mail renseignée est invalide',
                        'required' => 'Veuillez renseigner une addresse mail.',
                    ),
                ),
                array(
                    'field' => 'tel',
                    'label' => 'telephone',
                    'rules' => 'trim|required|numeric|exact_length[10]',
                    'errors' => array(
                        'trim' => 'Le numéro de téléphone renseigné est invalide.',
                        'required' => 'Veuillez renseigner un numéro de téléphone.',
                        'numeric' => 'Le numéro de téléphone doit être composé de caractères numériques.',
                        'exact_length[10]' => 'Le numéro de téléphone doit faire 10 caractères.'
                    ),
                ),
            );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view('templates/header', $data);
            $this->load->view( 'accueil/'.$page, $data);



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
            $idtemplatecvuser = $this->input->post('idtemplatecvuser');

            if($this->Model_resume->replace1($id, $genre, $firstName, $lastName, $nationality, $birthDate, $application, $description, $address, $postCode, $city, $mail, $tel , $idtemplatecvuser) === TRUE){
                    // resume creation ok
                    $this->load->view('templates/header');
                    $this->load->view('accueil/succesResume', $data);
                    $this->load->view('templates/footer');
                } else {
                $this->Model_resume->insert1($id, $genre, $firstName, $lastName, $nationality, $birthDate, $application, $description, $address, $postCode, $city, $mail, $tel , $idtemplatecvuser);
            }
        }
    }
}

    public function showResume($idtemplatecvuser){
        $this->load->view('templates/cv_templates/cv'.$idtemplatecvuser.'/index.php');
    }
}