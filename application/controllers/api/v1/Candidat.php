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
    }

    public function index()
    {
        $data = $this->Model_candidat->get_all();
        $data2 = $this->Model_skill->getSkills();
        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $result[] = array("id" => intval($row->idcvt_resume),
                    "firstName" => $row->resume_firstNamel,
                    "lastName" => $row->resume_lastName,
                    "birthDate" => $row->resume_birthDate,
                    "nationality" => $row->resume_nationality,
                    "sexe" => $row->resume_sexe,
                    "addr" => $row->resume_addr,
                    "postCode" => $row->reume_postCode,
                    "city" => $row->resume_city,
                    "tel" => $row->resume_tel,
                    "mail" => $row->resume_mail,
                    "description" => $row->resume_describ,
                    "posteCible" => $row->resume_posteCible,
                    "created" => $row->resume_created,
                    "modified" => $row->resume_modified,
                    "idcvt_users" => $row->cvt_users_idcvt_users,
                    "idtemplatecvuser" => $row->idtemplatecvuser,



                );
            }
            echo json_encode($result);
        } else {
            header("HTTP/1.0 204 No Content");
            echo json_encode("204: no products in the database");
        }
    }

    public function view($id)
    {
        $data = $this->Model_candidat->get_one($id);

        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $result[] = array("id" => intval($row->idcvt_resume),
                    "firstName" => $row->resume_firstNamel,
                    "lastName" => $row->resume_lastName,
                    "birthDate" => $row->resume_birthDate,
                    "nationality" => $row->resume_nationality,
                    "sexe" => $row->resume_sexe,
                    "addr" => $row->resume_addr,
                    "postCode" => $row->reume_postCode,
                    "city" => $row->resume_city,
                    "tel" => $row->resume_tel,
                    "mail" => $row->resume_mail,
                    "description" => $row->resume_describ,
                    "posteCible" => $row->resume_posteCible,
                    "created" => $row->resume_created,
                    "modified" => $row->resume_modified,
                    "idcvt_users" => $row->cvt_users_idcvt_users,
                    "idtemplatecvuser" => $row->idtemplatecvuser
                );
            }
            echo json_encode($result);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo json_encode("404 : Product #$id not found");
        }
    }


}

