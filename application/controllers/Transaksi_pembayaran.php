<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_admin();
		$this->load->model('Peserta_model','pm');
	}

	public function index()
	{	
		
		$data = [
			'title'=>'Transaksi Pembayaran DU',
			
		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('pembayaran/index',$data);
		$this->load->view('template/footer',$data);
	}

	public function laporan()
	{	
		
		$data = [
			'title'=>'Lapora Data DU',
			
		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('pembayaran/laporan',$data);
		$this->load->view('template/footer',$data);
	}

	public function read()
	{	
		$tgl1 = $this->input->post('tgl1');
		$tgl2 = $this->input->post('tgl2');


		$cek_du   = $this->db->select('*')
				->from('transaksi_pembayaran tp')
				->join('peserta p','p.no_pendaftaran = tp.no_pendaftaran')
				->join('jurusan j','j.id_jurusan = p.id_jurusan')
				->join('jenis_pembayaran jp','jp.id_jenis = tp.id_jenis')
				->join('tbl_user u','u.id_user = tp.id_user')
				->where('tp.tgl_bayar >=', $tgl1)
				->where('tp.tgl_bayar <=', $tgl2)
				->get()->num_rows();

		if ($cek_du > 0) {

			$du   = $this->db->select('*')
				->from('transaksi_pembayaran tp')
				->join('peserta p','p.no_pendaftaran = tp.no_pendaftaran')
				->join('jurusan j','j.id_jurusan = p.id_jurusan')
				->join('jenis_pembayaran jp','jp.id_jenis = tp.id_jenis')
				->join('tbl_user u','u.id_user = tp.id_user')
				->where('tp.tgl_bayar >=', $tgl1)
				->where('tp.tgl_bayar <=', $tgl2)
				->get()->result();
		}else{

			$du   = $this->db->select('*')
				->from('transaksi_pembayaran tp')
				->join('peserta p','p.no_pendaftaran = tp.no_pendaftaran')
				->join('jurusan j','j.id_jurusan = p.id_jurusan')
				->join('jenis_pembayaran jp','jp.id_jenis = tp.id_jenis')
				->join('tbl_user u','u.id_user = tp.id_user')
				->get()->result();
		}

		
			
		
		
		
		$data = [
			'title'=>'Transaksi Pembayaran',
			'du' => $du,
		];

		$this->load->view('pembayaran/read',$data);
	}

	public function read_laporan()
	{	
		$tgl1 = $this->input->post('tgl1');
		$tgl2 = $this->input->post('tgl2');


		$cek_du   = $this->db->select('*')
				->from('transaksi_pembayaran tp')
				->join('peserta p','p.no_pendaftaran = tp.no_pendaftaran')
				->join('jurusan j','j.id_jurusan = p.id_jurusan')
				->join('jenis_pembayaran jp','jp.id_jenis = tp.id_jenis')
				->join('tbl_user u','u.id_user = tp.id_user')
				->where('tp.tgl_bayar >=', $tgl1)
				->where('tp.tgl_bayar <=', $tgl2)
				->get()->num_rows();

		if ($cek_du > 0) {

			$du   = $this->db->select('*')
				->from('transaksi_pembayaran tp')
				->join('peserta p','p.no_pendaftaran = tp.no_pendaftaran')
				->join('jurusan j','j.id_jurusan = p.id_jurusan')
				->join('jenis_pembayaran jp','jp.id_jenis = tp.id_jenis')
				->join('tbl_user u','u.id_user = tp.id_user')
				->where('tp.tgl_bayar >=', $tgl1)
				->where('tp.tgl_bayar <=', $tgl2)
				->get()->result();
		}else{

			$du   = $this->db->select('*')
				->from('transaksi_pembayaran tp')
				->join('peserta p','p.no_pendaftaran = tp.no_pendaftaran')
				->join('jurusan j','j.id_jurusan = p.id_jurusan')
				->join('jenis_pembayaran jp','jp.id_jenis = tp.id_jenis')
				->join('tbl_user u','u.id_user = tp.id_user')
				->get()->result();
		}

		
			
		
		
		
		$data = [
			'title'=>'Transaksi Pembayaran',
			'du' => $du,
		];

		$this->load->view('pembayaran/read_laporan',$data);
	}

	public function print()
	{	
		$tgl1 = $this->uri->segment(3);
		$tgl2 = $this->uri->segment(4);
		
		$data = [
			'title'=>'LAPORAN KEUANGAN DAFTAR ULANG PEMBAYARAN',
			'du' => $this->db->select('*')
				->from('transaksi_pembayaran tp')
				->join('peserta p','p.no_pendaftaran = tp.no_pendaftaran')
				->join('jurusan j','j.id_jurusan = p.id_jurusan')
				->join('jenis_pembayaran jp','jp.id_jenis = tp.id_jenis')
				->join('tbl_user u','u.id_user = tp.id_user')
				->where('tp.tgl_bayar >=', $tgl1)
				->where('tp.tgl_bayar <=', $tgl2)
				->get()->result(),
			'tgl' =>['tgl1'=>$tgl1, 'tgl2'=>$tgl2],
			'total' => $this->db->select_sum('besarnya_pembayaran','jml')
									->where('tgl_bayar >=', $tgl1)
									->where('tgl_bayar <=', $tgl2)
									->get('transaksi_pembayaran')->row(),
		];

		$this->load->library('Pdf');
	    $this->pdf->setFileName = "Laporan Data DU.pdf";
	    $this->pdf->setPaper('Legal', 'Landscape');

		$this->pdf->loadView('pembayaran/print',$data);
	}

	public function kwitansi_du($id)
	{
		$this->load->helper("terbilang");
		$id = decrypt_url($id);
		$pembayaran = $this->db->select('*')
								->from('transaksi_pembayaran tp')
								->join('peserta p','p.no_pendaftaran = tp.no_pendaftaran')
								->join('jurusan j','j.id_jurusan = p.id_jurusan')
								->join('jenis_pembayaran jp','jp.id_jenis = tp.id_jenis')
								->join('tbl_user u','u.id_user = tp.id_user')
								->where('tp.id', $id)
								->get()->row();

		$data =[
			'title'=>'Kwitansi Pembayaran Daftar Ulang',
			'kwitansi' => $pembayaran,
			'terbilang' => to_word($pembayaran->besarnya_pembayaran).' Rupiah',
		];
		
		$this->load->library('Pdf');
	    $this->pdf->setFileName = "Kwitansi-Pembayaran-DU.pdf";
	    $this->pdf->setPaper('A4', 'Portrait');
		$this->pdf->loadView('pembayaran/kwitansi', $data);


	}

	public function add()
	{
		$data = [
			'title'=>'Tambah Transaksi Pembayaran',
			'peserta'=> $this->pm->getAllPeserta()->result(),
			'jenis_pembayaran'=> $this->db->get_where('jenis_pembayaran',['status'=>'Y'])->result(),
			

		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('pembayaran/transaksi_pembayaran',$data);
		$this->load->view('template/footer',$data);
	}

	


	public function get_peserta()
	{
		$id_peserta = $this->input->post('id_peserta');
		$data = $this->pm->getPesertaById($id_peserta)->row();
		echo json_encode($data);
	}

	public function getPembayaranTmp(){

		$data = $this->db->select('*')
						 ->from('transaksi_pembayaran_tmp t')
						 ->join('peserta p','p.no_pendaftaran = t.no_pendaftaran')
						 ->join('jurusan j','j.id_jurusan = p.id_jurusan')
						 ->join('jenis_pembayaran jp','jp.id_jenis = t.id_jenis')
						 ->where('t.id_user', $this->session->userdata('id_user'))
						 ->get()->result();

		echo json_encode($data);

	}

	public function Bayar()
	{	
		$cek_pembayaran = $this->db->select_sum('besarnya_pembayaran')
						 ->where('no_pendaftaran',$this->input->post('no_pendaftaran'))
						 ->get('transaksi_pembayaran')->row();

		$cek = $this->db->get_where('transaksi_pembayaran_tmp',[
					'no_pendaftaran' => $this->input->post('no_pendaftaran'),
					'id_jenis' => $this->input->post('id_jenis'),
					'besarnya_pembayaran' => $this->input->post('besarnya'),
				])->num_rows();

		
		if ($cek > 0) {

			echo json_encode($cek );
		}elseif($cek_pembayaran->besarnya_pembayaran + $this->input->post('besarnya') >= 2000000){
			 echo json_encode('lunas' );
		}else{

			$data = [
				'kode_pembayaran' => kode_tr_tmp(),
				'id_tahun' => '6',
				'tgl_bayar' => $this->input->post('tgl_bayar'),
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				'id_jenis' => $this->input->post('id_jenis'),
				'besarnya_pembayaran' => $this->input->post('besarnya'),
				'id_user' => $this->session->userdata('id_user'),
			];

			 $this->db->insert('transaksi_pembayaran_tmp',$data);
			 echo json_encode($data );
		}

		
	}


	public function hapus_pembayaran_tmp()
	{
		$id = $this->input->post('id');
		$this->db->where('id',$id);
		$this->db->delete('transaksi_pembayaran_tmp');

		echo json_encode($id);
	}

	public function store()
	{	
		$id = $this->session->userdata('id_user');


		$cek_tmp = $this->db->get_where('transaksi_pembayaran_tmp',['id_user' => $id]);
		if ($cek_tmp->row() > 0) {
			
			$tmp = $cek_tmp->result();
			foreach ($tmp as $tmp) {
			
				$data = [
					'kode_pembayaran' => $tmp->kode_pembayaran,
					'id_tahun' => $tmp->id_tahun,
					'tgl_bayar' => $tmp->tgl_bayar,
					'no_pendaftaran' => $tmp->no_pendaftaran,
					'id_jenis' => $tmp->id_jenis,
					'besarnya_pembayaran' => $tmp->besarnya_pembayaran,
					'id_user' => $tmp->id_user,
				];

				$cek = $this->db->get_where('transaksi_pembayaran',$data)->num_rows();
				if ($cek > 0) {
					$this->session->set_flashdata('message', "<script>swal('Error!', 'Data Sudah ada.!', 'error');</script>");
	        		redirect('Transaksi_pembayaran');
				}else{

					$this->db->insert('transaksi_pembayaran',$data);

					$this->db->where('kode_pembayaran',$tmp->kode_pembayaran);
					$this->db->delete('transaksi_pembayaran_tmp');

					$this->db->where('no_pendaftaran',$tmp->no_pendaftaran);
					$this->db->delete('peserta',['status_daftar_ulang'=>'Y']);

					
				}


				$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Tersimpan!', 'success');</script>");
        		redirect('Transaksi_pembayaran');

			}
		}else{

			$this->session->set_flashdata('message', "<script>swal('Info!', 'Data Tidak Boleh Kosong.!', 'info');</script>");
	        		redirect('Transaksi_pembayaran/add');

		}


	}



	public function getTotalDU()
	{
		$no_pendaftaran = $this->input->post('no_pendaftaran');

		$data = [
			'total_du'=>$this->db->select_sum('besarnya_pembayaran')
						 ->where('no_pendaftaran',$no_pendaftaran)
						 ->get('transaksi_pembayaran')->row(),
			'potongan' => $this->db->select('*')
											 ->from('peserta p')
											 ->join('jurusan j', 'j.id_jurusan = p.id_jurusan')
											 ->join('tbl_potongan tp', 'tp.id_potongan = p.id_potongan')
											 ->where('p.no_pendaftaran',$no_pendaftaran)
											 ->get()->row(),
				];

		echo json_encode($data);
	}

}

/* End of file Transaksi_pembayaran.php */
/* Location: ./application/controllers/Transaksi_pembayaran.php */