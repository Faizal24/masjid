<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurunikah extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('jurunikah/index');
		$this->load->view('common/footer');		
	}

}

/* End of file Jurunikah.php */
/* Location: ./application/controllers/Jurunikah.php */