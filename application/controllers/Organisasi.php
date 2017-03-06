<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('organisasi/index');
		$this->load->view('common/footer');		
	}

}

/* End of file Organisasi.php */
/* Location: ./application/controllers/Organisasi.php */