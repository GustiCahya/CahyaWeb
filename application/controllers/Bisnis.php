<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bisnis extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('frontend/v_header');
		$this->load->view('frontend/service/v_bisnis');
		$this->load->view('frontend/v_footer');
    }
}
