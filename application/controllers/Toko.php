<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Toko extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('toko_m', 'toko');
	}
	public function index()
	{
		$query = $this->toko->get();
		// $data['toko'] = $query->result();
		$data = array(
					'header' => 'SHOW data HP',
					'toko' => $query->result()
		);
		$this->load->view('Toko_tampil', $data);
	}

	public function add()
	{
		$data = array(
					'header' => 'Tambah data HP',
		);
		$this->load->view('Toko_tambah', $data);
	}

	public function edit($id = null)
	{
		$query = $this->toko->get($id);
		$data = array(
					'header' => 'Edit data HP',
					'toko' => $query->row()
		);
		$this->load->view('Toko_edit', $data);
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->toko->add($inputan);
		}else if(isset($_POST['edit'])){
			$inputan = $this->input->post(null, TRUE);
			$this->toko->edit($inputan);
		}
		redirect('toko');
	}
	public function del($id)
	{
		$this->toko->del($id);
		redirect('toko');
	}
}