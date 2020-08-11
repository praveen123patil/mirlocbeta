<?php
	class Homebanner_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($id === FALSE){
				$this->db->order_by('banners.id', 'DESC');
				$query = $this->db->get('banners');
				return $query->result_array();
			}

			$query = $this->db->get_where('banners', array('id' => $id));

			return $query->row_array();
		}

		public function create_post($banner_image){
			$data = array(
				'banner_title' => $this->input->post('banner_title'),
				'banner_details' => $this->input->post('banner_details'),
				'banner_image' => $banner_image,
				'created_at' => current_datetime()
			);

			return $this->db->insert('banners', $data);
		}

		public function delete_post($id){
			$image_file_name = $this->db->select('banner_image')->get_where('banners', array('id' => $id))->row_array()->banner_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\banners\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('banners');
			return true;
		}

		public function update_post($banner_image){

			$data = array(
				'banner_title' => $this->input->post('banner_title'),
				'banner_details' => $this->input->post('banner_details'),
				'banner_image' => $banner_image,
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('banners', $data);
		}

		public function get_categories(){
			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		public function get_posts_by_category($category_id){
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get_where('posts', array('category_id' => $category_id));
			return $query->result_array();
		}
	}
