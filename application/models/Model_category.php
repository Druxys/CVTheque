<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05/02/2019
 * Time: 15:14
 */

class Model_category extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "cvt_category";
    }
    public function create_category($category) {


        $data = array(
            'category_name' => $category
        );
        return $this->db->insert('cvt_category', $data);

    }


    public function getCategory($category) {

        $this->db->from('cvt_catecory');
        $this->db->where('idcvt_category ', $category);
        return $this->db->get()->row();

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


}