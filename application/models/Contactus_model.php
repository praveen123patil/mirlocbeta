<?php
	class Contactus_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($id === FALSE){
				$this->db->order_by('contactus.id', 'DESC');
				$query = $this->db->get('contactus');
				return $query->result_array();
			}

			$query = $this->db->get_where('contactus', array('id' => $id));

			return $query->row_array();
		}

		public function create_post(){
			$data = array(
        'full_name' => $this->input->post('full_name'),
        'email' => $this->input->post('email'),
        'phone_no' => $this->input->post('phone_no'),
				'additional_note' => $this->input->post('additional_note'),
				'created_at' => current_datetime()
			);

			return $this->db->insert('contactus', $data);
		}

		public function delete_post($id){
			$image_file_name = $this->db->select('image')->get_where('contactus', array('id' => $id))->row_array()->image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\contactus\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('contactus');
			return true;
		}

		public function update_post($image){

			$data = array(
				'title' => $this->input->post('title'),
				'image' => $image,
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('contactus', $data);
		}
	}
