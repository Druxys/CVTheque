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
        $this->table = "users";
    }

    public function create_user($email, $password) {

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $data = array(
            'mail'      => $email,
            'password'   => $hash,
            'created_at' => date('Y-m-j H:i:s'),
            'token'     => bin2hex(random_bytes(50)),
        );

        return $this->db->insert('users', $data);

    }

    public function userVerify($mail, $password) {

        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('mail', $mail);
        $hash = $this->db->get()->row('password');
        $resultat = password_verify($password, $hash);
        return $resultat;
//        if ($hash == $password)
//            return TRUE;
//        else
//            return FALSE;
    }

    public function getUser($mail) {

        $this->db->from('users');
        $this->db->where('id', $mail);
        return $this->db->get()->row();

    }
}