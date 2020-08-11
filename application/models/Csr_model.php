<?php
	class Csr_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($id === FALSE){
				$this->db->order_by('csr.id', 'DESC');
				$query = $this->db->get('csr');
				return $query->result_array();
			}

			$query = $this->db->get_where('csr', array('id' => $id));

			return $query->row_array();
		}

		public function create_post($icon){
			$data = array(
        'title' => $this->input->post('title'),
				'detail' => $this->input->post('detail'),
				'icon' => $icon,
				'created_at' => current_datetime()
			);

			return $this->db->insert('csr', $data);
		}

		public function delete_post($id){
			$image_file_name = $this->db->select('icon')->get_where('csr', array('id' => $id))->row_array()->image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\csr\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('csr');
			return true;
		}

		public function update_post($icon){

			$data = array(
				'title' => $this->input->post('title'),
        'detail' => $this->input->post('detail'),
				'icon' => $icon,
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('csr', $data);
		}
	}
