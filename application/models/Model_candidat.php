<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_candidat extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "cvt_resume";

    }

//    Récupérer tous les candidats
    function get_all()
    {
        return $this->db->get($this->table);
    }

//    Récupérer un candidat avec l'id de la BDD
    function get_one($id)
    {
        $this->db->select("*")
            ->from($this->table)
            ->where("idcvt_resume", $id)
            ->limit(1);

        return $this->db->get();
    }

}