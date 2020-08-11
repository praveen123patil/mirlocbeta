<?php
	class Properties extends CI_Controller{

    public function __construct(){
          parent::__construct();
          check_login_user();
         $this->load->model('common_model');
         $this->load->model('login_model');
      }

		public function index($offset = 0){
			// Pagination Config
      $data = array();
      $data['page_title'] = 'Properties';


      $config['base_url'] = base_url() . 'admin/property/property_list';
			$config['total_rows'] = $this->db->count_all('properties');
			$config['per_page'] = 200;
			$config['uri_segment'] = 200;
			$config['attributes'] = array('class' => 'pagination-link');

      $this->pagination->initialize($config);

			$data['title'] = 'Latest Posts';

			$data['property'] = $this->properties_model->get_posts(FALSE, $config['per_page'], $offset);

      $data['main_content'] = $this->load->view('admin/property/property_list', $data, TRUE);
      $this->load->view('admin/index', $data);
		}

		public function view($id = NULL){
			$data['properties'] = $this->properties_model->get_posts($id);
			$properties_id = $data['properties']['id'];

			if(empty($data['properties'])){
				show_404();
			}

			$data['page_title'] = $data['properties']['title'];

			$data['main_content'] = $this->load->view('admin/property/property_view', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function create(){

			$data['page_title'] = 'Add property';


			$this->form_validation->set_rules('title', 'Title', 'required');

			if($this->form_validation->run() === FALSE){
				$data['main_content'] = $this->load->view('admin/property/property_create', $data, TRUE);
			$this->load->view('admin/index',$data);
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/properties';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048000';
				$config['max_width'] = '0';
				$config['max_height'] = '0';
        $config['remove_spaces'] = FALSE;
				$config['overwrite'] = TRUE;

				$this->load->library('upload', $config);

        if(!$this->upload->do_upload('userfile')){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
					$property_image = $_FILES['userfile']['name'];

				}
        if(!$this->upload->do_upload('userfile2')){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
          $logo = $_FILES['userfile2']['name'];
				}
        if(!$this->upload->do_upload('userfile3')){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
          $site_plan = $_FILES['userfile3']['name'];
				}

				$this->properties_model->create_post($property_image, $logo, $site_plan);

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/properties/index'));
			}
		}

		public function delete($id){

			$this->properties_model->delete_post($id);
			// Set message
			$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

			redirect(base_url('admin/properties/index'));
		}

		public function edit($id){
			$data['properties'] = $this->properties_model->get_posts($id);


			if(empty($data['properties'])){
				show_404();
			}
      $data['page_title'] = 'Add property';


      $data['main_content'] = $this->load->view('admin/property/property_edit', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function update(){

      $this->form_validation->set_rules('title', 'Title', 'required');

			if($this->form_validation->run() === FALSE){
				$data['main_content'] = $this->load->view('admin/property/property_create', $data, TRUE);
			$this->load->view('admin/index',$data);
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/properties';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048000';
				$config['max_width'] = '0';
				$config['max_height'] = '0';
        $config['remove_spaces'] = FALSE;
				$config['overwrite'] = TRUE;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('userfile')){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
					$property_image = $_FILES['userfile']['name'];

				}
        if(!$this->upload->do_upload('userfile2')){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
          $logo = $_FILES['userfile2']['name'];
          var_dump($logo);

				}
        if(!$this->upload->do_upload('userfile3')){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
          $site_plan = $_FILES['userfile3']['name'];
				}

				$this->properties_model->create_post($property_image, $logo, $site_plan);

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/properties/index'));
			}
		}
	}
?>
