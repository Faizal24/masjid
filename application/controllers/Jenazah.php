<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenazah extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('jenazah/index');
		$this->load->view('common/footer');		
	}

}

/* End of file Jenazah.php */
/* Location: ./application/controllers/Jenazah.php */