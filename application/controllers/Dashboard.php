<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_admin();
	}

	public function index()
	{	
		$data = [
			'title'=>'Dashboard',
			'jml_pendaftar' => $this->db->get('peserta')->num_rows(),
			'verifikasi' 	=> $this->db->get_where('peserta',['status_daftar_ulang' => 'Y'])->num_rows(),
			'kolektif' 		=> $this->db->get('tbl_kolektif',)->num_rows(),
			'user'			=> $this->db->get('tbl_user')->num_rows(),
			'pendaftar' 	=> $this->db->select('tanggal_daftar, COUNT(*) as total')
						                 ->from('peserta')
						                 ->where('MONTH(tanggal_daftar) = MONTH(NOW())')
						                 ->group_by('DAY(tanggal_daftar)')
						                 ->get()->result(),
		];



		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('template/footer',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */