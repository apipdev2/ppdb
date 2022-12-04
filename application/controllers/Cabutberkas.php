<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabutberkas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_admin();
		$this->load->model('Peserta_model','pm');
	}

	public function index()
	{	
		$data = [
			'title'=>'Data Cabut Berkas',
			'peserta'=> $this->db->select('*')
						->from('cabut_berkas cb')
						->join('peserta p','p.id_peserta = cb.id_peserta')
						->join('jurusan j', 'j.id_jurusan = p.id_jurusan')
						->get()->result(),
		];



		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('cabutberkas/index',$data);
		$this->load->view('template/footer',$data);
	}

	public function add()
	{	
		$data = [
			'title'=>'Tambah Cabut Berkas',
			'peserta'=> $this->pm->getAllPeserta()->result(),
		];
		$this->form_validation->set_rules('nama_peserta','Nama peserta','required');

		if ($this->form_validation->run()==false) {

			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar',$data);
			$this->load->view('cabutberkas/add',$data);
			$this->load->view('template/footer',$data);
			
		}else{

			$data = [
				'id_tahun' => '6',
				'tanggal_cb' => date('Y-m-d'),
				'id_peserta' => $this->input->post('id_peserta'),
				'pencabut_berkas' => $this->input->post('pencabut_berkas'),
				'total_du' =>  $this->input->post('total_du'),
				'potongan_cb' =>  $this->input->post('potongan'),
				'diterima' =>  $this->input->post('diterima'),
				'id_user' =>  $this->session->userdata('id_user'),

			];

			$cek = $this->db->get_where('cabut_berkas',['id_peserta'=>$this->input->post('id_peserta')])->num_rows();
			if ($cek > 0) {
				$this->session->set_flashdata('message', "<script>swal('Peringatan!', 'Data Sudah ada.!', 'error');</script>");
        	redirect('Cabutberkas');
			}else{

			$this->db->where('no_pendaftaran',$this->input->post('no_pendaftaran'));
			$this->db->delete('transaksi_pembayaran');

			$pem = [
				'kode_pembayaran' => kode_tr_tmp(),
				'id_tahun' => '6',
				'tgl_bayar' => date('Y-m-d'),
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				'id_jenis' => '8',
				'besarnya_pembayaran' => $this->input->post('diterima'),
				'id_user' => $this->session->userdata('id_user'),
				'ket' => 'Cabut Berkas',
			];
			$this->db->insert('transaksi_pembayaran',$pem);

			$this->db->insert('cabut_berkas',$data);
			//del pembayaran
			$this->db->where('no_pendaftaran',);
			$this->db->update('peserta',['status' => 'CB', 'status_daftar_ulang' => 'CB']);
			//update peserta
			$this->db->where('id_peserta',$this->input->post('id_peserta'));
			$this->db->update('peserta',['status' => 'CB', 'status_daftar_ulang' => 'CB']);

			$this->session->set_flashdata('message', "<script>swal('Success!', 'Data Tersimpan.!', 'success');</script>");
        	redirect('Cabutberkas');
			}
		}

		
	}

	public function delete($id)
	{
		$id = decrypt_url($id);
		$peserta = decrypt_url($this->uri->segment(4));
		//delete cb
		$this->db->where('id_cb',$id);
		$this->db->delete('cabut_berkas');
		// update peserta
		$this->db->where('id_peserta',$peserta);
		$this->db->update('peserta',['status' => 'Y', 'status_daftar_ulang' => 'N']);

		$this->session->set_flashdata('message', "<script>swal('Success!', 'Data Dihapus.!', 'success');</script>");
        redirect('Cabutberkas');
	}

	public function kwitansi($id)
	{	
		$id = decrypt_url($id);
		$kwitansi =  $this->db->select('*')
							->from('cabut_berkas cb')
							->join('peserta p','p.id_peserta = cb.id_peserta')
							->join('jurusan j', 'j.id_jurusan = p.id_jurusan')
							->join('transaksi_pembayaran tp', 'tp.no_pendaftaran = p.no_pendaftaran')
							->join('tbl_user u','u.id_user = cb.id_user')
							->where('cb.id_cb',$id)
							->get()->row();
		$data = [
				'title' => 'Kwitansi Cabut Berkas',
				'kwitansi'=> $kwitansi,
				'terbilang' => $kwitansi->diterima,
			];

			
	    $this->load->library('Pdf');
	    $this->pdf->setFileName = "Kwitansi-CB.pdf";
	    $this->pdf->setPaper('A4', 'Portrait');
		$this->pdf->loadView('cabutberkas/kwitansi', $data);
		// $this->load->view('cabutberkas/kwitansi', $data);
	}


	public function report()
	{
		$data = [
				'peserta'=> $this->db->select('*')
							->from('cabut_berkas cb')
							->join('peserta p','p.id_peserta = cb.id_peserta')
							->join('jurusan j', 'j.id_jurusan = p.id_jurusan')
							->get()->result(),
				'total'	=> $this->db->select_sum('diterima','jml')->get('cabut_berkas')->row(),
			];

	    $this->load->library('Pdf');
	    $this->pdf->setFileName = "Data-Cabut-Berkas.pdf";
	    $this->pdf->setPaper('A4', 'Landscape');
		$this->pdf->loadView('cabutberkas/report', $data);
	}

	public function getTotalDU()
	{
		$no_pendaftaran = $this->input->post('no_pendaftaran');

		$data = $this->db->select_sum('besarnya_pembayaran')
						 ->where('no_pendaftaran',$no_pendaftaran)
						 ->get('transaksi_pembayaran')->row();
		echo json_encode($data);
	}

}

/* End of file Cabutberkas.php */
/* Location: ./application/controllers/Cabutberkas.php */