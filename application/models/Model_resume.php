<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25/02/2019
 * Time: 15:47
 */

class Model_resume extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "cvt_resume";
    }

    public function create_resume_part1($firstName, $lastName, $birthDate, $nationality, $sexe, $addr, $pastCode, $city, $tel, $mail) {


        $data = array(
            'resume_firstNamel' => $firstName,
            'resume_lastName'   => $lastName,
            'resume_birthDate' => $birthDate,
            'resume_nationality'  => $nationality,
            'resume_sexe' => $sexe,
            'resume_addr' => $addr,
            'reume_postCode' => $pastCode,
            'resume_city' => $city,
            'resume_tel' => $tel,
            'resume_mail' => $mail,
        );

        return $this->db->insert('cvt_resume', $data);

    }

    public function userVerify($mail, $password) {

        $this->db->select('user_pwd');
        $this->db->from('cvt_users');
        $this->db->where('user_mail', $mail);
        $hash = $this->db->get()->row('user_pwd');
        $resultat = password_verify($password, $hash);
        return $resultat;

    }

    public function getUser($mail) {

        $this->db->from('cvt_users');
        $this->db->where('idcvt_users ', $mail);
        return $this->db->get()->row();

    }

    public function getEmail($mail) {
        $this->db->from('cvt_users');
        $this->db->where('user_mail', $mail);
//        print_r($this->db->get()->row('mail'));
        if ($this->db->get()->row('user_mail') == $mail){
            return TRUE;
        } else {
            return FALSE;
        }
//        return $this->db->get()->row();

    }
}