<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$data = [
			'title'=>'Dashboard',
			'peserta' => $this->db->get_where('peserta',['id_peserta' => $this->session->userdata('id_user')])->row()
		];



		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar_siswa',$data);
		$this->load->view('home',$data);
		$this->load->view('template/footer',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */