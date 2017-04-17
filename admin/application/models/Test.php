<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Model {

	public function insert_photo($photo)
	{
		$this->db->insert('test',array(
			'picture'	=> $photo
		), array(
			'id'		=> $id 
		));
	}	

}

/* End of file Test.php */
/* Location: ./application/models/Test.php */