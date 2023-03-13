<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->view('home');
	}
	public function about_us()
	{
		$this->load->view('about_us');
	}
	public function contact_us()
	{
		$this->load->view('contact_us');
	}
	public function get_involved()
	{
		$this->load->view('get_involved');
	}
	public function registration_form()
	{
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
		$this->load->view('blog');
	}
	public function blog_details()
	{
		$this->load->view('blog_details');
	}
}
