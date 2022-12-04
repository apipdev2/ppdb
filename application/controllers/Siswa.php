<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$this->load->model('Siswa_model','sm');
	}

	public function index()
	{
		$data = [
			'title'=>'Data Siswa',
			'siswa'=> $this->sm->getSiswaAll()->result(),
		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('siswa/index',$data);
		$this->load->view('template/footer',$data);
	}

	public function add()
	{
		$data = [
			'title'=>'Tambah Siswa',
		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('siswa/add',$data);
		$this->load->view('template/footer',$data);
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */