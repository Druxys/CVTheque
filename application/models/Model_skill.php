<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_skill extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "skills_resume";
        $this->table2 = "cvt_skills";

    }

    function get_all()
    {
        return $this->db->get($this->table);
    }

    function getSkills($id)
        {
        $this->db->select("*")
            ->from($this->table)
            ->where("idskills_resume ", $id);
        $idResult = $this->db->get();
        $this->db->select("*")
            ->from($this->table2)
            ->where("idskills_resume ", $idResult);

        return $this->db->get();
    }
}