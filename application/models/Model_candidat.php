<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_candidat extends CI_Model
{
    function __construct()
    {
        parent::__construct();
<<<<<<< HEAD
        $this->table = "cv  thek";
=======
        $this->table = "cvt_resume";


>>>>>>> 014fe3616ac7e72d739a4daf6c8ce58dfbee92b8
    }

    function get_all()
    {
        return $this->db->get($this->table);
    }

    function get_one($id)
    {
        $this->db->select("*")
            ->from($this->table)
            ->where("idcvt_resume", $id)
            ->limit(1);

        return $this->db->get();
    }

}