<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('homeview');
	}
	
	public function foo()
	{
		$this->load->view('homeview');
	}
}
