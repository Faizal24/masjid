<?php
	class Tahfiz extends CI_Controller{
	public function index(){
			$data['title'] = 'Latest Posts';

			$data['tahfizs'] = $this->tahfiz_model->get_tahfizs();
			
			// Print data array
			// print_r($data['posts']);

			// Choose where to display view - base url is views/
			$this->load->view('common/header');
			$this->load->view('tahfiz/index', $data);
			$this->load->view('common/footer');
		}

	public function view($slug = NULL){
		$data['tahfiz'] = $this->tahfiz_model->get_tahfizs($slug);

		if(empty($data['tahfiz'])){
			show_404();
		} 

		// $data['title'] = $data['post']['title'];

		$this->load->view('common/header');
		$this->load->view('tahfiz/view', $data);
		$this->load->view('common/footer');
	}

	public function create(){
		$data['title'] = 'Create Post';

		$this->form_validation->set_rules('nama', 'Nama','required');
		$this->form_validation->set_rules('umur', 'Umur','required');
		$this->form_validation->set_rules('tarikh_mula', 'Tarikh Mula','required');
		$this->form_validation->set_rules('juzuk_mula', 'Juzuk Mula','required');
		$this->form_validation->set_rules('juzuk_sekarang', 'Juzuk Sekarang','required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('common/header');
			$this->load->view('tahfiz/create', $data);
			$this->load->view('common/footer');
		}
		else{
			$this->tahfiz_model->create_tahfiz();
			redirect('tahfiz');
		}
	}

	public function delete($id){
		$this->tahfiz_model->delete_tahfiz($id);
		redirect('tahfiz');
	}

	public function edit($slug){
		$data['tahfiz'] = $this->tahfiz_model->get_tahfizs($slug);

		if(empty($data['tahfiz'])){
			show_404();
		} 

		$data['title'] = 'Edit Post';

		$this->load->view('common/header');
		$this->load->view('tahfiz/edit', $data);
		$this->load->view('common/footer');
	}

	public function update(){
		$this->tahfiz_model->update_tahfiz();
		redirect('tahfiz');
	}


		
}