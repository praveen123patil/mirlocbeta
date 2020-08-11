<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['banner'] = $this->homebanner_model->get_posts(FALSE, FALSE, FALSE);
		$data['green_solutions'] = $this->greensolution_model->get_posts(FALSE, FALSE, FALSE);
		$data['testimonials'] = $this->testimonials_model->get_posts(FALSE, FALSE, FALSE);
		$data['middel_body'] = 'main/index';
		$this->load->view('templates',$data);
	}

  public function contact()
	{
		$data['middel_body'] = 'main/contactus';
			$this->load->view('templates',$data);
	}

	public function aboutus()
	{
		$data['middel_body'] = 'main/aboutus';
			$this->load->view('templates',$data);
	}

	public function csr()
	{
		$data['csr'] = $this->csr_model->get_posts(FALSE, FALSE, FALSE);
		$data['middel_body'] = 'main/csr';
			$this->load->view('templates',$data);
	}

	public function properties()
	{
		$data['csr'] = $this->csr_model->get_posts(FALSE, FALSE, FALSE);
		$data['middel_body'] = 'main/csr';
			$this->load->view('templates',$data);
	}

  public function projects()
	{
		$data['middel_body'] = 'main/projects';
			$this->load->view('templates',$data);
	}

  public function projects_details()
	{
		$data['middel_body'] = 'main/project_detail';
			$this->load->view('templates',$data);
	}

	public function contactcreate(){

		$data['page_title'] = 'Add Banner';


		$this->form_validation->set_rules('full_name', 'Title', 'required');

		if($this->form_validation->run() === FALSE){
			$data['main_content'] = $this->load->view('main/contactus', $data, TRUE);
		$this->load->view('templates',$data);
		}else {

			$this->contactus_model->create_post();

			// Set message
			$this->session->set_flashdata('post_created', 'Your post has been created');

			redirect(base_url('contact/'));
		}
	}


}
