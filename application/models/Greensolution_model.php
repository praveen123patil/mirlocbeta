<?php
	class Greensolution_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($id === FALSE){
				$this->db->order_by('green_solutions.id', 'DESC');
				$query = $this->db->get('green_solutions');
				return $query->result_array();
			}

			$query = $this->db->get_where('green_solutions', array('id' => $id));

			return $query->row_array();
		}

		public function create_post($image){
			$data = array(
				'title' => $this->input->post('title'),
				'image' => $image,
				'created_at' => current_datetime()
			);

			return $this->db->insert('green_solutions', $data);
		}

		public function delete_post($id){
			$image_file_name = $this->db->select('image')->get_where('green_solutions', array('id' => $id))->row_array()->image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\green_solutions\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('green_solutions');
			return true;
		}

		public function update_post($image){

			$data = array(
				'title' => $this->input->post('title'),
				'image' => $image,
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('green_solutions', $data);
		}
	}
