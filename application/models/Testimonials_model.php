<?php
	class Testimonials_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($id === FALSE){
				$this->db->order_by('testimonials.id', 'AESC');
				$query = $this->db->get('testimonials');
				return $query->result_array();
			}

			$query = $this->db->get_where('testimonials', array('id' => $id));

			return $query->row_array();
		}

		public function create_post(){
			$data = array(
				'name' => $this->input->post('name'),
				'message' => $this->input->post('message'),
				'created_at' => current_datetime()
			);

			return $this->db->insert('testimonials', $data);
		}

		public function delete_post($id){
			$this->db->where('id', $id);
			$this->db->delete('testimonials');
			return true;
		}

		public function update_post(){

			$data = array(
				'name' => $this->input->post('name'),
				'message' => $this->input->post('message'),
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('testimonials', $data);
		}
	}
