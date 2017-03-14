<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function index()
	{

		$data['posts'] = $this->post_model->get_posts();

		$this->load->view('common/header');
		$this->load->view('utama/index', $data);
		$this->load->view('common/footer');
	}

}

/* End of file Utama.php */
/* Location: ./application/controllers/Utama.php */