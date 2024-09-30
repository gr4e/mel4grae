<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitors_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert_visitor($data) {
        return $this->db->insert('visitors', $data);  
    }


    public function get_all_visitors() {
        $query = $this->db->get('visitors'); 
        return $query->result();
    }

}