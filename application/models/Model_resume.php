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
        $this->db->select("id")
            ->from($this->table)
            ->where("id", $id)
            ->limit(1);
        return $this->db->get();
    }

    function insert1($genre, $firstName, $lastName, $nationality, $birthDate, $application, $description)
    {
        $data = array(
            "resume_sexe" => $genre,
            "resume_firstName" => $firstName,
            "resume_lastName" => $lastName,
            "resume_nationality" => $nationality,
            "resume_birthDate" => $birthDate,
            "resume_posteCible" => $application,
            "resume_describ" => $description
        );
        return $this->db->insert($this->table, $data);
    }

    function insert2($address, $postCode, $city, $mail, $tel)
    {
        $data = array(
            "resume_addr" => $address,
            "resume_postCode" => $postCode,
            "resume_city" => $city,
            "resume_mail" => $mail,
            "resume_tel" => $tel
        );
        return $this->db->insert($this->table, $data);
    }

    function update1($id, $genre, $firstName, $lastName, $nationality, $birthDate, $application, $description)
    {
        $data = array(
            "resume_sexe" => $genre,
            "resume_firstName" => $firstName,
            "resume_lastName" => $lastName,
            "resume_nationality" => $nationality,
            "resume_birthDate" => $birthDate,
            "resume_posteCible" => $application,
            "resume_describ" => $description
        );
        return $this->db->where("id", $id)
            ->update($this->table, $data);
    }

    function update2($id, $address, $postCode, $city, $mail, $tel)
    {
        $data = array(
            "resume_addr" => $address,
            "resume_postCode" => $postCode,
            "resume_city" => $city,
            "resume_mail" => $mail,
            "resume_tel" => $tel,
        );
        return $this->db->where("id, $id")
            ->update($this->table, $data);
    }
}