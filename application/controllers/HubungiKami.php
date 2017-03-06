<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HubungiKami extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('hubungikami/index');
		$this->load->view('common/footer');		
	}

}

/* End of file HubungiKami.php */
/* Location: ./application/controllers/HubungiKami.php */