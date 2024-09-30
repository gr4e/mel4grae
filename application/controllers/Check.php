<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {

	public function index()
	{
        $this->load->model('Visitors_model');

        $this->db->select('*'); // Select all columns
        $query = $this->db->get('visitors'); // Replace 'your_table_name' with your actual table name
        $data $query->result(); // Return the result

        echo $data;

	}

}
