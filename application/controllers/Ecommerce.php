<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('frontend/v_header');
		$this->load->view('frontend/service/v_ecommerce');
		$this->load->view('frontend/v_footer');
    }
}
