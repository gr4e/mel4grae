<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('main_view/single_view');
	}



	public function reserveSeat() {

		$this->load->model('Visitors_model');

		$name = $this->input->post('name');
        $contact = $this->input->post('contact');
		$message = $this->input->post('message');

        $visitor_data = array(
            'name' => $name,
            'contact' => $contact,
            'message' => $message
        );

        $this->Visitors_model->insert_visitor($visitor_data);

		$data = $visitor_data;

		echo json_encode($data);

	}

}
