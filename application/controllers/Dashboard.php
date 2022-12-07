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
			'verifikasi' 	=> $this->db->get_where('peserta',['status_pendaftaran' => 'Y'])->num_rows(),
			'kolektif' 		=> $this->db->get('tbl_kolektif',)->num_rows(),
			'user'			=> $this->db->get('tbl_user')->num_rows(),
			'pendaftar' 	=> $this->db->select('tanggal_daftar, COUNT(*) as total')
						                 ->from('peserta')
						                 ->where('MONTH(tanggal_daftar) = MONTH(NOW())')
						                 ->group_by('DAY(tanggal_daftar)')
						                 ->get()->result(),
			'jurusan'		=> $this->db->get('jurusan')->result(),
			'asal_sekolah' => $this->db->select('asal_sekolah')->from('peserta')->group_by('asal_sekolah')->get()->result(),
			'du' => $this->db->select('*')
					->from('transaksi_pembayaran tp')
					->join('peserta p','p.no_pendaftaran = tp.no_pendaftaran')
					->join('jurusan j','j.id_jurusan = p.id_jurusan')
					->join('jenis_pembayaran jp','jp.id_jenis = tp.id_jenis')
					->join('tbl_user u','u.id_user = tp.id_user')
					->group_by('tp.no_pendaftaran')
					->get()->num_rows(),
			'du1' => $this->db->select('*')
					->from('transaksi_pembayaran tp')
					->where('tp.id_jenis','2')
					->group_by('tp.no_pendaftaran')
					->get()->num_rows(),
			'du2' => $this->db->select('*')
					->from('transaksi_pembayaran tp')
					->where('tp.id_jenis','6')
					->group_by('tp.no_pendaftaran')
					->get()->num_rows(),
			'du3' => $this->db->select('*')
					->from('transaksi_pembayaran tp')
					->where('tp.id_jenis','7')
					->group_by('tp.no_pendaftaran')
					->get()->num_rows(),

		];



		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('template/footer',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */