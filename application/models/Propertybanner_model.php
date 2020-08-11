<?php
	class Propertybanner_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($id === FALSE){
				$this->db->order_by('property_banner.id', 'DESC');
        $this->db->join('properties', 'properties.id = property_banner.property_id');
				$query = $this->db->get('property_banner');
				return $query->result_array();
			}

			$query = $this->db->get_where('property_banner', array('id' => $id));

			return $query->row_array();
		}

		public function create_post($image){
			$data = array(
				'property_id' => $this->input->post('property_id'),
				'image_title' => $this->input->post('image_title'),
				'image' => $image,
				'created_at' => current_datetime()
			);

			return $this->db->insert('property_banner', $data);
		}

		public function delete_post($id){
			$image_file_name = $this->db->select('image')->get_where('property_banner', array('id' => $id))->row_array()->image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\properties\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('property_banner');
			return true;
		}

		public function update_post($image){

			$data = array(
				'property_id' => $this->input->post('property_id'),
				'image_title' => $this->input->post('image_title'),
				'image' => $image,
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('property_banner', $data);
		}

		public function get_categories(){
			$this->db->order_by('title');
			$query = $this->db->get('properties');
			return $query->result_array();
		}

		public function get_posts_by_category($property_id){
			$this->db->order_by('properties.id', 'DESC');
			$this->db->join('properties', 'properties.id = property_banner.property_id');
				$query = $this->db->get_where('property_banner', array('property_id' => $property_id));
			return $query->result_array();
		}
	}
