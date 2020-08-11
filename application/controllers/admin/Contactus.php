<?php
	class Contactus extends CI_Controller{

    public function __construct(){
          parent::__construct();
          check_login_user();
         $this->load->model('common_model');
         $this->load->model('login_model');
      }

		public function index($offset = 0){
			// Pagination Config
      $data = array();
      $data['page_title'] = 'Contact Us';


      $config['base_url'] = base_url() . 'admin/contactus/contactus_list';
			$config['total_rows'] = $this->db->count_all('contactus');
			$config['per_page'] = 200;
			$config['uri_segment'] = 200;
			$config['attributes'] = array('class' => 'pagination-link');

      $this->pagination->initialize($config);

			$data['title'] = 'Latest Posts';

			$data['contactus'] = $this->contactus_model->get_posts(FALSE, $config['per_page'], $offset);

      $data['main_content'] = $this->load->view('admin/contactus/contactus_list', $data, TRUE);
      $this->load->view('admin/index', $data);
		}

		public function view($id = NULL){
			$data['contactus'] = $this->contactus_model->get_posts($id);
			$contactus_id = $data['contactus']['id'];

			if(empty($data['contactus'])){
				show_404();
			}

			$data['page_title'] = $data['contactus']['title'];

			$data['main_content'] = $this->load->view('admin/contactus/green_view', $data, TRUE);
			$this->load->view('admin/index',$data);
		}

	}
?>
