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

    function addUser($data)
    {
        $this->db->insert($data);
    }

    function get_all()
    {
        return $this->db->get($this->table);
    }

    function get_one($id)
    {
        $this->db->select("*")
            ->from($this->table)
            ->where("id", $id)
            ->limit(1);

        return $this->db->get();
    }

    function post()
    {
        $data = array();

        $this->db->insert($this->table, $data);
    }

    function put($id, $mail)
    {
        $data = array(
            "mail" => $mail
        );

        $this->db->where("id", $id)
            ->update($this->table, $data);
    }

    function delete($id)
    {
        $this->db->where_in("id", $id)
            ->delete($this->table);
    }
}