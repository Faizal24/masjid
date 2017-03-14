<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_model extends CI_Model {

	public function __construct(){
			//Load database
			$this->load->database();
		}

	public function get_schedules(){
		$query = $this->db->query("SELECT * FROM schedules");
		return $query->result();

	}

}

/* End of file Jadual_model.php */
/* Location: ./application/models/Jadual_model.php */