<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Model_candidat");
        $this->load->model("Model_skill");
        $this->load->model("Model_language");
        $this->load->model("Model_experience");
        $this->load->model("Model_certification");
    }

    public function index()
    {
        $dataCandidat= $this->Model_candidat->get_all()->result_array();        // Récupération de tout les candidats

        if (isset($dataCandidat)) {

            echo json_encode($dataCandidat, FALSE);
        }
        else{
            header("HTTP/1.0 204 No Content");
            echo json_encode("204: no products in the database");
        }
    }




    public function view($id)
    {

        $result = array();
        $result["candidat"] = $this->Model_candidat->get_one($id)->result_array();
        $result["skill"] = $this->Model_skill->getSkills($id)->result_array();
        $result["langue"] = $this->Model_language->getLanguages($id)->result_array();
        $result["exp"] = $this->Model_experience->getExp($id)->result_array();
//        $result["certification"] = $this->Model_certification->getCertif($id)->result_array();

        echo json_encode($result, FALSE);


    }


}


