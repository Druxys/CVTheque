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

        $dataCandidat= $this->Model_candidat->get_all();        // Récupération de tout les candidats

        $result = array();
        if ($dataCandidat->num_rows() > 0){
            echo json_encode($result->result_array(), FALSE);

        }
        else{
            header("HTTP/1.0 204 No Content");
            echo json_encode("204: no products in the database");
        }
//
//        $data = $this->Model_candidat->get_all();
//        if ($data->num_rows() > 0) {
//            foreach ($data->result() as $row) {
//                $result[] = array("id" => intval($row->idcvt_resume),
//                    "firstName" => $row->resume_firstNamel,
//                    "lastName" => $row->resume_lastName,
//                    "birthDate" => $row->resume_birthDate,
//                    "nationality" => $row->resume_nationality,
//                    "sexe" => $row->resume_sexe,
//                    "addr" => $row->resume_addr,
//                    "postCode" => $row->reume_postCode,
//                    "city" => $row->resume_city,
//                    "tel" => $row->resume_tel,
//                    "mail" => $row->resume_mail,
//                    "description" => $row->resume_describ,
//                    "posteCible" => $row->resume_posteCible,
//                    "created" => $row->resume_created,
//                    "modified" => $row->resume_modified,
//                    "idcvt_users" => $row->cvt_users_idcvt_users,
//                    "idtemplatecvuser" => $row->idtemplatecvuser,
//
//                );
//            }
//            echo json_encode($result);
//        } else {
//            header("HTTP/1.0 204 No Content");
//            echo json_encode("204: no products in the database");
//        }
//    }
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


