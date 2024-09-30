<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {

	public function index()
	{
        $this->load->model('Visitors_model');

        $data['bwisita'] = $this->Visitors_model->get_all_visitors(); 

        $this->load->view('guest_list', $data);

	}

}