<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {

	public function index()
	{
        $this->load->model('Visitors_model');

        $data['records'] = $this->Visitors_model->get_all_records(); 

        $this->load->view('main_view/single_view', $data);

	}

}