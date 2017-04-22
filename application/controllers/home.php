<?php 

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['news'] = $this->m_data->tampil_data()->result();
		$this->load->view('home',$data);
	}


}