<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_language extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "language_resume";
        $this->jointable = "cvt_languages";


    }

    function get_all()
    {
//          SELECT C.lang_level , C.lang_name , S.cvt_resume_idcvt_resume FROM cvt_languages C, language_resume S WHERE S.cvt_languages_idcvt_languages = C.idcvt_languages

        $this->db->select("C.lang_level , C.lang_name")
            ->from("cvt_languages C, language_resume S")
            ->where("S.cvt_languages_idcvt_languages = C.idcvt_languages");
        return $this->db->get();
    }

    function getLanguages($id)
    {
//          SELECT C.lang_level , C.lang_name , S.cvt_resume_idcvt_resume FROM cvt_languages C, language_resume S WHERE S.cvt_languages_idcvt_languages = C.idcvt_languages

//        $this->db->select("C.lang_level , C.lang_name")
//            ->from("cvt_languages C, language_resume S")
//            ->where("S.cvt_languages_idcvt_languages = C.idcvt_languages")
//            ->where("cvt_resume_idcvt_resume", $id);
//        return $this->db->get();

        $this->db->select("cvt_languages.lang_level , cvt_languages.lang_name")
            ->from($this->table)
            ->where("cvt_resume_idcvt_resume", $id)
            ->join($this->jointable, "idcvt_languages = cvt_languages.idcvt_languages");

        return $this->db->get();
    }
}