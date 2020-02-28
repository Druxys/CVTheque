<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05/03/2019
 * Time: 14:07
 */

class Model_certification extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "certification_resume";
        $this->jointable = "cvt_certification";


    }

    function get_all()
    {
//          SELECT C.lang_level , C.lang_name , S.cvt_resume_idcvt_resume FROM cvt_languages C, language_resume S WHERE S.cvt_languages_idcvt_languages = C.idcvt_languages

//        $this->db->select("C.exp_name , C.exp_decription, C.exp_date")
//            ->from("cvt_experiences C, exp_resume S")
//            ->where("S.cvt_experiences_idcvt_experiences = C.idcvt_experiences");
//        return $this->db->get();
    }

    function getCertif($id)
    {
//          SELECT C.lang_level , C.lang_name , S.cvt_resume_idcvt_resume FROM cvt_languages C, language_resume S WHERE S.cvt_languages_idcvt_languages = C.idcvt_languages

        $this->db->select("*")
            ->from($this->table)
            ->where("cvt_resume_idcvt_resume", $id)
            ->join($this->jointable, "idcvt_certification = cvt_certification.idcvt_certification");

        return $this->db->get();
    }
}