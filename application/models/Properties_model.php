<?php
	class Properties_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($id === FALSE){
				$this->db->order_by('properties.id', 'DESC');
				$query = $this->db->get('properties');
				return $query->result_array();
			}

			$query = $this->db->get_where('properties', array('id' => $id));

			return $query->row_array();
		}

		public function create_post($property_image, $logo, $site_plan){
			$data = array(
				'title' => $this->input->post('title'),
        'short_description' => $this->input->post('short_description'),
				'description' => $this->input->post('description'),
        'features' => $this->input->post('features'),
        'location_map' => $this->input->post('location_map'),
        'video_link' => $this->input->post('video_link'),
        'property_image' => $property_image,
				'logo' => $logo,
        'site_plan' => $site_plan,
				'created_at' => current_datetime()
			);

			return $this->db->insert('properties', $data);
		}

		public function delete_post($id){
			$image_file_name = $this->db->select('property_image')->get_where('properties', array('id' => $id))->row_array()->property_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\properties\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('properties');
			return true;
		}

		public function update_post($property_image, $logo, $site_plan){
			$data = array(
        'title' => $this->input->post('title'),
        'short_description' => $this->input->post('short_description'),
				'description' => $this->input->post('description'),
        'features' => $this->input->post('features'),
        'location_map' => $this->input->post('location_map'),
        'video_link' => $this->input->post('video_link'),
        'property_image' => $property_image,
        'logo' => $logo,
				'site_plan' => $site_plan,
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('properties', $data);
		}

		public function get_categories(){
			$this->db->order_by('title');
			$query = $this->db->get('properties');
			return $query->result_array();
		}

		public function get_category($id){
			$query = $this->db->get_where('properties', array('id' => $id));
			return $query->row();
		}
	}
