<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('utama/index');
		$this->load->view('common/footer');
	}

}

/* End of file Utama.php */
/* Location: ./application/controllers/Utama.php */