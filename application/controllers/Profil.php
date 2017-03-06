<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('profil/index');
		$this->load->view('common/footer');
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */