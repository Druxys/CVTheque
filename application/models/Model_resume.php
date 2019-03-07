<?php

class Model_resume extends CI_Model
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
            ->where("cvt_users_idcvt_users", $id)
            ->limit(1);
        return $this->db->get();
    }

    function get_id($id)
    {
        $this->db->select("*")
            ->from($this->table)
            ->where("cvt_users_idcvt_users = $id")
            ->limit(1);
        return $this->db->get();
    }

    function insert1($id ,$genre, $firstName, $lastName, $nationality, $birthDate, $application, $description ,$address, $postCode, $city, $mail, $tel , $idtemplatecvuser)
    {
        $data = array(
            "resume_sexe" => $genre,
            "resume_firstName" => $firstName,
            "resume_lastName" => $lastName,
            "resume_nationality" => $nationality,
            "resume_birthDate" => $birthDate,
            "resume_posteCible" => $application,
            "resume_describ" => $description,
            "resume_addr" => $address,
            "resume_postCode" => $postCode,
            "resume_city" => $city,
            "resume_mail" => $mail,
            "resume_tel" => $tel,
            "cvt_users_idcvt_users" => $id,
            "idtemplatecvuser" => $idtemplatecvuser

        );
       // $findId = $this->Model_resume->get_id($id);

       // if (!empty($findId))
       // {
           // return $this->db->update($this->cvt_users_idcvt_users, $data);


           // $this->db->set($infos)->where('id',$id_cand)->update('candidat');


        //}else {
            return $this->db->insert($this->table, $data);
       // }
    }


    function replace1($id ,$genre, $firstName, $lastName, $nationality, $birthDate, $application, $description ,$address, $postCode, $city, $mail, $tel , $idtemplatecvuser){
        $data = array(
            "cvt_users_idcvt_users" => $id,
            "resume_sexe" => $genre,
            "resume_firstName" => $firstName,
            "resume_lastName" => $lastName,
            "resume_nationality" => $nationality,
            "resume_birthDate" => $birthDate,
            "resume_posteCible" => $application,
            "resume_describ" => $description,
            "resume_addr" => $address,
            "resume_postCode" => $postCode,
            "resume_city" => $city,
            "resume_mail" => $mail,
            "resume_tel" => $tel,
            "idtemplatecvuser" => $idtemplatecvuser
        );
        $this->db->set($data);
        $this->db->where('cvt_users_idcvt_users', $id);
        return $this->db->update($this->table);
    }

    function insertCertif($atitle,$adate)
    {
        $data = array(
            "certif_name" => $atitle,
            "certif_date" => $adate
        );
        return $this->db->insert('cvt_certification', $data);
    }


    function insertExp($btitle,$bdate,$bdesc)
    {
        $data = array(
            "exp_name" => $btitle,
            "exp_date" => $bdate,
        "exp_description" => $bdesc
        );
        return $this->db->insert('cvt_experiences', $data);
    }

    function insertHobby($ctitle)
    {
        $data = array(
            "category_name" => $ctitle,
        );
        return $this->db->insert('cvt_category', $data);
    }
    function insertSkill($dtitle, $dtype)
    {
        $data = array(
            "skills_name" => $dtitle,
            "skills_level" => $dtype
        );
        return $this->db->insert('cvt_skills', $data);
    }

    function insertLang($etitle, $etype)
    {
        $data = array(
            "lang_name" => $etitle,
            "lang_level" => $etype
        );
        return $this->db->insert('cvt_languages', $data);
    }

    function insertSoft($ftitle, $ftype)
    {
        $data = array(
            "software_name" => $ftitle,
            "software_level" => $ftype
        );
        return $this->db->insert('cvt_software', $data);
    }

    public function view($id)
    {
        $data = $this->Model_resume->get_one($id);

        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $result[] = array("id" => intval($row->idcvt_resume),
                    "firstName" => $row->resume_firstName,
                    "lastName" => $row->resume_lastName,
                    "birthDate" => $row->resume_birthDate,
                    "nationality" => $row->resume_nationality,
                    "sexe" => $row->resume_sexe,
                    "addr" => $row->resume_addr,
                    "postCode" => $row->resume_postCode,
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

              return $result;

        } else {
            header("HTTP/1.0 404 Not Found");
            echo json_encode("404 : Product #$id not found");
        }
    }

    function getCertif($id){
        $this->db->from('cvt_certification')
            ->where("id_user", $id);
        return $this->db->get()->result_array();}

    function getExp($id){
        $this->db->from('cvt_software')
            ->where("id_user", $id);
        return $this->db->get()->result_array();}

    function getSoftware($id){
        $this->db->from('cvt_certification')
            ->where("id_user", $id);
        return $this->db->get()->result_array();}

    function getHobby($id){
        $this->db->from('cvt_category')
            ->where("id_user", $id);
        return $this->db->get()->result_array();}

    function getLanguage($id){
        $this->db->from('cvt_languages')
            ->where("id_user", $id);
        return $this->db->get()->result_array();}

    function deleteCertifStatus($id){
        $data = array(
          'certif_status' => '0'
        );
        $this->db->where("idcvt_certification", $id);
        $this->db->update('cvt_certification', $data);
    }
    function addCertifStatus($id){
        $data = array(
            'certif_status' => '1'
        );
        $this->db->where("idcvt_certification", $id);
        $this->db->update('cvt_certification', $data);
    }

    function rmExpStatus(){
    }

    function modifSoftwareStatus(){

    }

    function modifHobbyStatus(){

    }

    function modifLanguageStatus(){

    }
}