<?php
	class Schedule_model extends CI_Model{
		public function __construct(){
			//Load database
			$this->load->database();
		}

		// Get posts from the database
		public function get_schedules($slug = FALSE){
			if($slug == FALSE){
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('schedules');
				return $query->result_array();
			}

			$query = $this->db->get_where('schedules', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' 	=> $this->input->post('title'),
				'slug' 		=> $slug,
				'content' 	=> $this->input->post('content'),
			);
			
			return $this->db->insert('posts', $data);
		}

		public function delete_schedule($id){
			$this->db->where('id', $id);
			$this->db->delete('schedules');
			return true;
		}

		public function update_schedule(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' 	=> $this->input->post('title'),
				'day'		=> $this->input->post('day'),
				'month'		=> $this->input->post('month'),
				'year'		=> $this->input->post('year'),
				'start'		=> $this->input->post('start'),
				'end'		=> $this->input->post('end'),
				'place'		=> $this->input->post('place'),

				'slug' 		=> $slug,
				'content' 	=> $this->input->post('content')
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('schedules', $data);
		}
	}
// 	}<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Schedule_model extends CI_Model {

// 	public function __construct(){
// 			//Load database
// 			$this->load->database();
// 		}

// 	public function get_schedules(){
// 		$query = $this->db->query("SELECT * FROM schedules");
// 		return $query->result();

// 	}

// }

/* End of file Jadual_model.php */
/* Location: ./application/models/Jadual_model.php */