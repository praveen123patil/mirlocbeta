<?php
	class Homebanner extends CI_Controller{

    public function __construct(){
          parent::__construct();
          check_login_user();
         $this->load->model('common_model');
         $this->load->model('login_model');
      }

		public function index($offset = 0){
			// Pagination Config
      $data = array();
      $data['page_title'] = 'Banners';


      $config['base_url'] = base_url() . 'admin/home-admin/banner_list';
			$config['total_rows'] = $this->db->count_all('banners');
			$config['per_page'] = 200;
			$config['uri_segment'] = 200;
			$config['attributes'] = array('class' => 'pagination-link');

      $this->pagination->initialize($config);

			$data['title'] = 'Latest Posts';

			$data['banner'] = $this->homebanner_model->get_posts(FALSE, $config['per_page'], $offset);

      $data['main_content'] = $this->load->view('admin/home-admin/banner_list', $data, TRUE);
      $this->load->view('admin/index', $data);
		}

		public function view($id = NULL){
			$data['banners'] = $this->homebanner_model->get_posts($id);
			$banners_id = $data['banners']['id'];

			if(empty($data['banners'])){
				show_404();
			}

			$data['page_title'] = $data['banners']['banner_title'];

			$data['main_content'] = $this->load->view('admin/home-admin/banner_view', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function create(){

			$data['page_title'] = 'Add Banner';


			$this->form_validation->set_rules('banner_title', 'Title', 'required');

			if($this->form_validation->run() === FALSE){
				$data['main_content'] = $this->load->view('admin/home-admin/banner', $data, TRUE);
			$this->load->view('admin/index',$data);
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/banners';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048000';
				$config['max_width'] = '0';
				$config['max_height'] = '0';
        $config['remove_spaces'] = FALSE;
				$config['overwrite'] = TRUE;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
					$banner_image = $_FILES['userfile']['name'];
				}

				$this->homebanner_model->create_post($banner_image);

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/homebanner/index'));
			}
		}

		public function delete($id){

			$this->homebanner_model->delete_post($id);
			// Set message
			$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

			redirect(base_url('admin/homebanner/index'));
		}

		public function edit($id){
			$data['banners'] = $this->homebanner_model->get_posts($id);


			if(empty($data['banners'])){
				show_404();
			}
      $data['page_title'] = 'Add Banner';


      $data['main_content'] = $this->load->view('admin/home-admin/banner_edit', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function update(){

      $this->form_validation->set_rules('banner_title', 'Title', 'required');

			if($this->form_validation->run() === FALSE){
				$data['main_content'] = $this->load->view('admin/home-admin/banner', $data, TRUE);
			$this->load->view('admin/index',$data);
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/banners';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048000';
				$config['max_width'] = '0';
				$config['max_height'] = '0';
        $config['remove_spaces'] = FALSE;
				$config['overwrite'] = TRUE;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
					$banner_image = $_FILES['userfile']['name'];
				}

				$this->homebanner_model->update_post($banner_image);

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/homebanner/index'));
			}
		}
	}
?>
