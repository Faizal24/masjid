<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_upload extends CI_Controller {

	function index(){
		$this->load->view('upload');
	}


	function Upload_photo(){
		$config['upload_path'] = 'uploads/images';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10240';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')){
			
			$filedata = $this->upload->data();
			
			$data->filename = $filedata['file_name'];
			
			$this->test->insert_photo($data->filename);
			
			$data->filename = 'uploads/images/' . $filedata['file_name'];


		}
}
}
/* End of file Test_upload.php */
/* Location: ./application/controllers/Test_upload.php */