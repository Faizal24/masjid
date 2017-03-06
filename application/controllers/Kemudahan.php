<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemudahan extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('kemudahan/index');
		$this->load->view('common/footer');		
	}

}

/* End of file Kemudahan.php */
/* Location: ./application/controllers/Kemudahan.php */