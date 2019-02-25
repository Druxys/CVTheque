<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/01/2019
 * Time: 11:21
 */

class Model_user extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "cvt_users";
    }

    public function create_user($email, $password) {

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $data = array(
            'user_mail'      => $email,
            'user_pwd'   => $hash,
            'user_created' => date('Y-m-j H:i:s'),
            'user_token'     => bin2hex(random_bytes(50)),
            'user_status' => 'user',
        );

        return $this->db->insert('cvt_users', $data);

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