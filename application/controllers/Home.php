<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		if (count($_POST) > 0) {
			$post = $this->input->post();

			$savedata = $this->CommonModal->insertRowReturnId('bc_contact_query', $post);
			if ($savedata) {
				$this->session->set_userdata('msg', 'lenght added Sucessfully');
				$this->session->set_userdata('msg_class', 'alert-success');;
			} else {
				$this->session->set_userdata('msg', 'Something went Wrong. please try again later ');
			}
			redirect(base_url());
		}
		$this->load->view('home');
	}
	public function about_us()
	{
		$this->load->view('about_us');
	}
	public function contact_us()
	{
		if (count($_POST) > 0) {
			$post = $this->input->post();

			$savedata = $this->CommonModal->insertRowReturnId('bc_contact_query', $post);
			if ($savedata) {
				$this->session->set_userdata('msg', 'lenght added Sucessfully');
				$this->session->set_userdata('msg_class', 'alert-success');;
			} else {
				$this->session->set_userdata('msg', 'Something went Wrong. please try again later ');
			}
			redirect(base_url('contact_us'));
		}
		$this->load->view('contact_us');
	}
	public function get_involved()
	{
		if (count($_POST) > 0) {
			$post = $this->input->post();

			$savedata = $this->CommonModal->insertRowReturnId('get_involved', $post);
			if ($savedata) {
				$this->session->set_userdata('msg', 'lenght added Sucessfully');
				$this->session->set_userdata('msg_class', 'alert-success');;
			} else {
				$this->session->set_userdata('msg', 'Something went Wrong. please try again later ');
			}
			redirect(base_url('get_involved'));
		}
		$this->load->view('get_involved');
	}
	public function registration_form()
	{
		if (count($_POST) > 0) {
			$post = $this->input->post();

			$savedata = $this->CommonModal->insertRowReturnId('registration_form', $post);
			if ($savedata) {
				$this->session->set_userdata('msg', 'lenght added Sucessfully');
				$this->session->set_userdata('msg_class', 'alert-success');;
			} else {
				$this->session->set_userdata('msg', 'Something went Wrong. please try again later ');
			}
			redirect(base_url('registration_form'));
		}
		$this->load->view('registration_form');
	}
	public function testimonial()
	{
		$this->load->view('testimonial');
	}
	public function our_product()
	{
		$this->load->view('our_product');
	}
	public function our_project()
	{
		$this->load->view('our_project');
	}
	public function terms()
	{
		$this->load->view('terms');
	}
	public function donation()
	{
		$this->load->view('donation');
	}
	public function policy()
	{
		$this->load->view('policy');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function annual_report()
	{
		$this->load->view('annual_report');
	}
	public function career()
	{
		$this->load->view('career');
	}
	public function blog()
	{
		$data['blog'] = $this->CommonModal->getAllRows('bc_blog');
		$this->load->view('blog',$data);
	}
	public function blog_details()
	{

		$this->load->view('blog_details');
	}
	// INSERT CODE
	 
// 	if (!empty($blog)) {
// 	foreach ($blog as $row) {
// 	  <div>
// 	  echo  $row['title']; 
// 	  </dvi>
	
	 
// 	}
// 	}
	 
// 	public function lenght()
// 	{
// 		$data['favicon'] = base_url() . 'assets/logo.png';
// 		$data['title'] = " Dresses Lenght";
// 		$data['lenght'] = $this->CommonModal->getAllRows('lenght');
// 		if (count($_POST) > 0) {
// 			$post = $this->input->post();
// 			$no = rand();
// 			$folder = "./uploads/lenght/";
// 			move_uploaded_file($_FILES["b_img"]["tmp_name"], "$folder" . $no . $_FILES["b_img"]["name"]);
// 			$file_name = $no . $_FILES["b_img"]["name"];
// 			$post['image'] =  $file_name;
// 			$savedata = $this->CommonModal->insertRowReturnId('addlenght', $post);
// 			if ($savedata) {
// 			$this->session->set_flashdata('msg', 'lenght added Sucessfully');
// 			$this->session->set_flashdata('msg_class', 'alert-success');;
// 			} else {
// 			$this->session->set_userdata('msg', 'Something went Wrong. please try again later  ');
// 			}
// 		redirect(base_url('admin_Dashboard/lenght'));
// 		} else {
// 		$this->load->view('admin/lenght', $data);
// 		}
// 	}
	 
// }
}