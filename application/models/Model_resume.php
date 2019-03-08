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

    function insert1($id ,$genre, $firstName, $lastName, $nationality, $birthDate, $application, $description ,$address, $postCode, $city, $mail, $tel , $idtemplatecvuser, $time)
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
            "idtemplatecvuser" => $idtemplatecvuser,
            "resume_created" => $time


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

    function replace1($id ,$genre, $firstName, $lastName, $nationality, $birthDate, $application, $description ,$address, $postCode, $city, $mail, $tel , $idtemplatecvuser, $time){
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
            "idtemplatecvuser" => $idtemplatecvuser,
            "resume_modified" => $time

        );
        $this->db->set($data);
        $this->db->where('cvt_users_idcvt_users', $id);
        return $this->db->update($this->table);
    }

    function insertCertif($atitle,$adate,$astatus, $id)
    {
        $data = array(
            "certif_name" => $atitle,
            "certif_date" => $adate,
            "certif_status" => $astatus,
            "id_user" => $id
        );
        return $this->db->insert('cvt_certification', $data);
    }


    function insertExp($btitle,$bdate,$bdesc,$bstatus, $id)
    {
        $data = array(
            "exp_name" => $btitle,
            "exp_date" => $bdate,
            "exp_decription" => $bdesc,
            "exp_status" => $bstatus,
            "id_user" => $id


        );
        return $this->db->insert('cvt_experiences', $data);
    }

    function insertHobby($ctitle,$cstatus, $id)
    {
        $data = array(
            "category_name" => $ctitle,
            "category_status" => $cstatus,
            "id_user" => $id
        );
        return $this->db->insert('cvt_category', $data);
    }
    function insertSkill($dtitle, $dtype,$dstatus, $id)
    {
        $data = array(
            "skills_name" => $dtitle,
            "skills_level" => $dtype,
            "skills_status" => $dstatus,
            "id_user" => $id
        );
        return $this->db->insert('cvt_skills', $data);
    }

    function insertLang($etitle, $etype,$estatus, $id)
    {
        $data = array(
            "lang_name" => $etitle,
            "lang_level" => $etype,
            "lang_status" => $estatus,
            "id_user" => $id
        );
        return $this->db->insert('cvt_languages', $data);
    }

    function insertSoft($ftitle, $ftype,$fstatus, $id)
    {
        $data = array(
            "software_name" => $ftitle,
            "software_level" => $ftype,
            "software_status" => $fstatus,
            "id_user" => $id
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

        }
    }

    function getCertif($id){
        $this->db->from('cvt_certification')
            ->where("id_user", $id);
        return $this->db->get()->result_array();}

    function getExp($id){
        $this->db->from('cvt_experiences')
            ->where("id_user", $id);
        return $this->db->get()->result_array();}

    function getSoftware($id){
        $this->db->from('cvt_software')
            ->where("id_user", $id);
        return $this->db->get()->result_array();}

    function getHobby($id){
        $this->db->from('cvt_category')
            ->where("id_user", $id);
        return $this->db->get()->result_array();}

    function getSkills($id){
        $this->db->from('cvt_skills')
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

    function deleteExpStatus($id){
        $data = array(
            'exp_status' => '0'
        );
        $this->db->where("idcvt_experiences", $id);
        $this->db->update('cvt_experiences', $data);
    }
    function addExpStatus($id){
        $data = array(
            'exp_status' => '1'
        );
        $this->db->where("idcvt_experiences", $id);
        $this->db->update('cvt_experiences', $data);
    }

    function deleteSoftwareStatus($id){
        $data = array(
            'software_status' => '0'
        );
        $this->db->where("idcvt_software", $id);
        $this->db->update('cvt_software', $data);
    }
    function addSoftwareStatus($id){
        $data = array(
            'software_status' => '0'
        );
        $this->db->where("idcvt_software", $id);
        $this->db->update('cvt_software', $data);
    }

    function deleteHobbyStatus(){
        $data = array(
            'category_status' => '0'
        );
        $this->db->where("idcvt_category", $id);
        $this->db->update('cvt_category', $data);
    }
    function addHobbyStatus(){
        $data = array(
            'category_status' => '1'
        );
        $this->db->where("idcvt_category", $id);
        $this->db->update('cvt_category', $data);
    }

    function deleteLanguageStatus(){
        $data = array(
            'lang_status' => '0'
        );
        $this->db->where("idcvt_languages", $id);
        $this->db->update('cvt_languages', $data);

    }
    function addLanguageStatus(){
        $data = array(
            'lang_status' => '1'
        );
        $this->db->where("idcvt_languages", $id);
        $this->db->update('cvt_languages', $data);

    }
}