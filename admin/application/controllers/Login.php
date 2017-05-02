<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username == 'ismail' && $password == 'admin')
		{
			$data['posts'] = $this->post_model->get_posts();
			$this->session->set_userdata(array('username'=>$username));

			$this->load->view('common/header');
			$this->load->view('posts/index', $data);
			$this->load->view('common/footer');
		}
		else
		{
			$data['error'] = '<div class="text-danger text-center">Username or password is invalid</div>';
			$this->load->view('login', $data);
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect("login");
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */