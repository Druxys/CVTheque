<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_skill extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "skills_resume";
        $this->jointable = "cvt_skills";

    }

    function get_all()
    {
//          SELECT C.skills_level, C.skills_name, S.cvt_resume_idcvt_resume FROM cvt_skills C, skills_resume S WHERE S.cvt_skills_idcvt_skills = C.idcvt_skills

        $this->db->select("C.skills_level, C.skills_name")
            ->from("cvt_skills C, skills_resume S")
            ->where("S.cvt_skills_idcvt_skills = C.idcvt_skills");
        return $this->db->get();
    }

    function getSkills($id)
        {
//            $this->db->select("C.skills_level, C.skills_name")
//                 ->from("cvt_skills C, skills_resume S")
//                 ->where("S.cvt_skills_idcvt_skills = C.idcvt_skills")
//                 ->where("cvt_resume_idcvt_resume", $id);
//            return $this->db->get();

        $this->db->select("cvt_skills.skills_name, cvt_skills.skills_level")
            ->from($this->table)
            ->where("cvt_resume_idcvt_resume", $id)
            ->join($this->jointable, "idcvt_skills = cvt_skills.idcvt_skills");

        return $this->db->get();

        }
}