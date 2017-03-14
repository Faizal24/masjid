<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

	function Update_photo($photo){
		$id = $this->data('id');
		
		$this->db->update('posts',array(
			'photo'	=> $photo
		), array(
			'id'	=> $id 
		));
	}
}



/* End of file modelName.php */
/* Location: ./application/models/modelName.php */