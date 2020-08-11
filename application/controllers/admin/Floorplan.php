<?php
	class Floorplan extends CI_Controller{

    public function __construct(){
          parent::__construct();
          check_login_user();
         $this->load->model('common_model');
         $this->load->model('login_model');
      }

		public function index($offset = 0){
			// Pagination Config
      $data = array();
      $data['page_title'] = 'Floor Plans';


      $config['base_url'] = base_url() . 'admin/floorplan/floorplan_list';
			$config['total_rows'] = $this->db->count_all('floor_plan');
			$config['per_page'] = 200;
			$config['uri_segment'] = 200;
			$config['attributes'] = array('class' => 'pagination-link');

      $this->pagination->initialize($config);

			$data['title'] = 'Latest Posts';

			$data['floorplan'] = $this->floorplan_model->get_posts(FALSE, $config['per_page'], $offset);

      $data['main_content'] = $this->load->view('admin/floorplan/floorplan_list', $data, TRUE);
      $this->load->view('admin/index', $data);
		}

		public function view($id = NULL){
			$data['floor_plan'] = $this->floorplan_model->get_posts($id);
			$floorplan_id = $data['floor_plan']['id'];

			if(empty($data['floor_plan'])){
				show_404();
			}

			$data['page_title'] = $data['floor_plan']['image_title'];

			$data['main_content'] = $this->load->view('admin/floorplan/floorplan_view', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function create(){

			$data['page_title'] = 'Add Floor Plan';

      $data['properties'] = $this->floorplan_model->get_categories();


			$this->form_validation->set_rules('image_title', 'Title', 'required');

			if($this->form_validation->run() === FALSE){
				$data['main_content'] = $this->load->view('admin/floorplan/floorplan_create', $data, TRUE);
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

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
					$image = $_FILES['userfile']['name'];
				}

				$this->floorplan_model->create_post($image);

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/floorplan/index'));
			}
		}

		public function delete($id){

			$this->floorplan_model->delete_post($id);
			// Set message
			$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

			redirect(base_url('admin/floorplan/index'));
		}

		public function edit($id){
			$data['floor_plan'] = $this->floorplan_model->get_posts($id);
      $data['properties'] = $this->floorplan_model->get_categories();



			if(empty($data['floor_plan'])){
				show_404();
			}
      $data['page_title'] = 'Edit Floor Plan';


      $data['main_content'] = $this->load->view('admin/floorplan/floorplan_edit', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function update(){

      $this->form_validation->set_rules('image_title', 'Title', 'required');

			if($this->form_validation->run() === FALSE){
				$data['main_content'] = $this->load->view('admin/floorplan/floorplan_create', $data, TRUE);
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

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
          var_dump($errors);
				} else {
					$data = array('upload_data' => $this->upload->data());
					$image = $_FILES['userfile']['name'];
				}

				$this->floorplan_model->update_post($image);

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/floorplan/index'));
			}
		}
	}
?>
