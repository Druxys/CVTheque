<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_language extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "cvt_resume";


    }

    function get_all()
    {
        return $this->db->get($this->table);
    }

    function get_one($id)
    {
        $this->db->select("*")
            ->from($this->table)
            ->where("idcvt_skills ", $id)
            ->limit(1);

        return $this->db->get();
    }
}