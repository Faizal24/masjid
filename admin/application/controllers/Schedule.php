<?php
	class Schedule extends CI_Controller{
	public function index(){
			$data['title'] = 'Latest Posts';

			$data['schedules'] = $this->schedule_model->get_schedules();
			
			// Print data array
			// print_r($data['posts']);

			// Choose where to display view - base url is views/
			$this->load->view('common/header');
			$this->load->view('schedule/index', $data);
			$this->load->view('common/footer');
		}

	public function view($slug = NULL){
		$data['schedule'] = $this->schedule_model->get_schedules($slug);

		if(empty($data['schedule'])){
			show_404();
		} 

		// $data['title'] = $data['schedule']['title'];

		$this->load->view('common/header');
		$this->load->view('schedule/view', $data);
		$this->load->view('common/footer');
	}

	public function create(){
		$data['title'] = 'Create Post';

		$this->form_validation->set_rules('title', 'Title','required');
		$this->form_validation->set_rules('content', 'Content','required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('common/header');
			$this->load->view('schedule/create', $data);
			$this->load->view('common/footer');
		}
		else{
			$this->post_model->create_post();
			redirect('schedule');
		}
	}

	public function delete($id){
		$this->schedule_model->delete_schedule($id);
		redirect('schedule');
	}

	public function edit($slug){
		$data['schedule'] = $this->schedule_model->get_schedules($slug);

		if(empty($data['schedule'])){
			show_404();
		} 

		$data['title'] = 'Edit Post';

		$this->load->view('common/header');
		$this->load->view('schedule/edit', $data);
		$this->load->view('common/footer');
	}

	public function update(){
		$this->schedule_model->update_schedule();
		redirect('schedule');
	}


		
}