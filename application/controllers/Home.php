<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		is_peserta();
		if ($this->session->userdata('logged_in')!= TRUE) {
			redirect(base_url('Login'));
		}

		$this->load->model('Peserta_model','pm');
		$this->load->model('Jurusan_model','js');
	}


	public function index()
	{	

		$data = [
			'title'=>'Dashboard',
			'peserta' => $this->db->get_where('peserta',['id_peserta' => $this->session->userdata('id_user')])->row(),
			'jurusan' => $this->db->get('jurusan')->result(),
			'asal_sekolah' => $this->db->select('asal_sekolah')->from('peserta')->group_by('asal_sekolah')->get()->result(),
		];



		$this->load->view('template/header_siswa',$data);
		$this->load->view('template/sidebar_siswa',$data);
		$this->load->view('home',$data);
		$this->load->view('template/footer',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */