<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');
		
		if($this->form_validation->run() == false){
			$this->load->view('frontend/v_header');
			$this->load->view('frontend/v_homepage');
			$this->load->view('frontend/v_footer');
		}else{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telepon = $this->input->post('telepon');
			$pesan = $this->input->post('pesan');

			header("Location: https://api.whatsapp.com/send?phone=6287859671000&text=Nama+:+$nama%0AEmail+:+$email%0ATelepon+:+$telepon%0APesan+:+$pesan");
		}
	}
}
