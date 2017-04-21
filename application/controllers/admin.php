<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['news'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$category = $this->input->post('category');
		$image = $this->input->post('image');

		$data = array(
			'id' => $id,
			'title' => $title,
			'content' => $content,
			'category' => $category,
			'image' => $image
			);
		$this->m_data->input_data($data,'news');
		redirect('admin/index');
	} 
	function edit($id){
		$data['news'] = $this->m_data->tampil_data_id($id)->result();
		$this->load->view('v_edit',$data);
	}
	
	function edit_aksi($id){
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$category = $this->input->post('category');
		$image = $this->input->post('image');

		$data = array(
			'id' => $id,
			'title' => $title,
			'content' => $content,
			'category' => $category,
			'image' => $image
			);
		$where = array('id' => $id);
		$this->m_data->edit_data($data,$where,'news');
		redirect("admin");
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'news');
		redirect('admin/index');
	}

	

	
}