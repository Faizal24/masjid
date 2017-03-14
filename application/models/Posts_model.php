<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

	public function get_posts($slug = FALSE){
			if($slug == FALSE){
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content')
			);
			
			return $this->db->insert('posts', $data);
		}

		public function delete_post($id){
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}

		public function update_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content')
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}
	}

	// public function __construct(){
	// 		//Load database
	// 		$this->load->database();
	// 	}

	// public function get_posts(){
	// 	$query = $this->db->query("SELECT * FROM posts");
	// 	return $query->result();

	// }

	// public function create_posts(){
	// 		$data = array(
	// 			// 'photo' 					=> $this->input->posts('photo'),
	// 			'title'						=> $this->input->post('title'),
	// 			'content'					=> $this->input->post('content'),
	// 			'date'	 					=> $this->input->post('date')
	// 		);
			
	// 		return $this->db->insert('posts', $data);
	// 	}


/* End of file Posts_model.php */
/* Location: ./application/models/Posts_model.php */