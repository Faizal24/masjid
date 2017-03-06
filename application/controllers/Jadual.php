<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadual extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('jadual/index');
		$this->load->view('common/footer');		
	}

}

/* End of file Jadual.php */
/* Location: ./application/controllers/Jadual.php */