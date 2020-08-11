<?php
	class Csr extends CI_Controller{

    public function __construct(){
          parent::__construct();
          check_login_user();
         $this->load->model('common_model');
         $this->load->model('login_model');
      }

		public function index($offset = 0){
			// Pagination Config
      $data = array();
      $data['page_title'] = 'CSR';


      $config['base_url'] = base_url() . 'admin/csr/csr_list';
			$config['total_rows'] = $this->db->count_all('csr');
			$config['per_page'] = 200;
			$config['uri_segment'] = 200;
			$config['attributes'] = array('class' => 'pagination-link');

      $this->pagination->initialize($config);

			$data['title'] = 'Latest Posts';

			$data['csr'] = $this->csr_model->get_posts(FALSE, $config['per_page'], $offset);

      $data['main_content'] = $this->load->view('admin/csr/csr_list', $data, TRUE);
      $this->load->view('admin/index', $data);
		}

		public function view($id = NULL){
			$data['csr'] = $this->csr_model->get_posts($id);
			$csr_id = $data['csr']['id'];

			if(empty($data['csr'])){
				show_404();
			}

			$data['page_title'] = $data['csr']['title'];

			$data['main_content'] = $this->load->view('admin/csr/csr_view', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function create(){

			$data['page_title'] = 'Add CSR';


			$this->form_validation->set_rules('title', 'Title', 'required');

			if($this->form_validation->run() === FALSE){
				$data['main_content'] = $this->load->view('admin/csr/csr_create', $data, TRUE);
			$this->load->view('admin/index',$data);
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/csr';
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

				$this->csr_model->create_post($banner_image);

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/csr/index'));
			}
		}

		public function delete($id){

			$this->csr_model->delete_post($id);
			// Set message
			$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

			redirect(base_url('admin/csr/index'));
		}

		public function edit($id){
			$data['csr'] = $this->csr_model->get_posts($id);


			if(empty($data['csr'])){
				show_404();
			}
      $data['page_title'] = 'Edit CSR';


      $data['main_content'] = $this->load->view('admin/csr/csr_edit', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function update(){

      $this->form_validation->set_rules('title', 'Title', 'required');

			if($this->form_validation->run() === FALSE){
				$data['main_content'] = $this->load->view('admin/csr/csr_create', $data, TRUE);
			$this->load->view('admin/index',$data);
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/csr';
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

				$this->csr_model->update_post($banner_image);

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/csr/index'));
			}
		}
	}
?>
