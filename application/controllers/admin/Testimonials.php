<?php
	class Testimonials extends CI_Controller{

    public function __construct(){
          parent::__construct();
          check_login_user();
         $this->load->model('common_model');
         $this->load->model('login_model');
      }

		public function index($offset = 0){
			// Pagination Config
      $data = array();
      $data['page_title'] = 'Green Solutions';


      $config['base_url'] = base_url() . 'admin/testimonials/testimonials_list';
			$config['total_rows'] = $this->db->count_all('testimonials');
			$config['per_page'] = 200;
			$config['uri_segment'] = 200;
			$config['attributes'] = array('class' => 'pagination-link');

      $this->pagination->initialize($config);

			$data['title'] = 'Latest Posts';

			$data['testimonials'] = $this->testimonials_model->get_posts(FALSE, $config['per_page'], $offset);

      $data['main_content'] = $this->load->view('admin/testimonials/testimonials_list', $data, TRUE);
      $this->load->view('admin/index', $data);
		}

		public function view($id = NULL){
			$data['testimonials'] = $this->testimonials_model->get_posts($id);
			$testimonials_id = $data['testimonials']['id'];

			if(empty($data['testimonials'])){
				show_404();
			}

			$data['page_title'] = $data['testimonials']['title'];

			$data['main_content'] = $this->load->view('admin/testimonials/green_view', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function create(){

			$data['page_title'] = 'Add Banner';


			$this->form_validation->set_rules('name', 'Title', 'required');

      if($this->form_validation->run() === FALSE){
				$data['main_content'] = $this->load->view('admin/testimonials/testimonials_create', $data, TRUE);
			$this->load->view('admin/index',$data);
			}else {

				$this->testimonials_model->create_post();

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/testimonials/index'));
			}
		}

		public function delete($id){

			$this->testimonials_model->delete_post($id);
			// Set message
			$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

			redirect(base_url('admin/testimonials/index'));
		}

		public function edit($id){
			$data['testimonials'] = $this->testimonials_model->get_posts($id);


			if(empty($data['testimonials'])){
				show_404();
			}
      $data['page_title'] = 'Add Banner';


      $data['main_content'] = $this->load->view('admin/testimonials/testimonials_edit', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

		public function update(){
      $this->form_validation->set_rules('name', 'Title', 'required');
      if($this->form_validation->run() === FALSE){
        $data['main_content'] = $this->load->view('admin/testimonials/testimonials_list', $data, TRUE);
      $this->load->view('admin/index',$data);
      } else {
				$this->testimonials_model->update_post();

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect(base_url('admin/testimonials/index'));
			}
		}
	}
?>
