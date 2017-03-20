<?php
	class Tahfiz_model extends CI_Model{
		public function __construct(){
			//Load database
			$this->load->database();
		}

		// Get posts from the database
		public function get_tahfizs($slug = FALSE){
			if($slug == FALSE){
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('tahfiz');
				return $query->result_array();
			}

			$query = $this->db->get_where('tahfiz', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_tahfiz(){
			$slug = url_title($this->input->post('nama'));

			$data = array(
				'nama' 				=> $this->input->post('nama'),
				'slug' 				=> $slug,
				'umur' 				=> $this->input->post('umur'),
				'tarikh_mula' 		=> $this->input->post('tarikh_mula'),
				'juzuk_mula' 		=> $this->input->post('juzuk_mula'),
				'juzuk_sekarang' 	=> $this->input->post('juzuk_sekarang'),
			);
			
			return $this->db->insert('tahfiz', $data);
		}

		public function delete_tahfiz($id){
			$this->db->where('id', $id);
			$this->db->delete('tahfiz');
			return true;
		}

		public function update_tahfiz(){
			$slug = url_title($this->input->post('nama'));

			$data = array(
				'nama' 				=> $this->input->post('nama'),
				'slug' 				=> $slug,
				'umur' 				=> $this->input->post('umur'),
				'tarikh_mula' 		=> $this->input->post('tarikh_mula'),
				'juzuk_mula' 		=> $this->input->post('juzuk_mula'),
				'juzuk_sekarang' 	=> $this->input->post('juzuk_sekarang'),
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('tahfiz', $data);
		}
	}