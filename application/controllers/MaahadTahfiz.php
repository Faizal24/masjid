<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaahadTahfiz extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('maahadtahfiz/index');
		$this->load->view('common/footer');		
	}

}

/* End of file MaahadTahfiz.php */
/* Location: ./application/controllers/MaahadTahfiz.php */