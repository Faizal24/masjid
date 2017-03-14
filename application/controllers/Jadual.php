<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadual extends CI_Controller {

	public function index()
	{

		$data['schedules'] = $this->schedule_model->get_schedules();

		$this->load->view('common/header');
		$this->load->view('jadual/index', $data);
		$this->load->view('common/footer');		
	}

}

/* End of file Jadual.php */
/* Location: ./application/controllers/Jadual.php */