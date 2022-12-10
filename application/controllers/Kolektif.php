<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kolektif extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_admin();
		$this->load->model('Peserta_model','pm');
		$this->load->model('Kolektif_model','KM');
	}

	public function index()
	{	
		

		if ($this->input->post('tgl1')=="" && $this->input->post('tgl1')=="") {
				$kolektif = $this->db->select('*')
							->from('tbl_kolektif kl')
							->join('peserta p','p.id_peserta = kl.id_peserta')
							->join('jurusan j','j.id_jurusan = p.id_jurusan')
							->join('tbl_user u','u.id_user = kl.id_user')
							->get()->result();
			}else{

				$kolektif = $this->db->select('*')
							->from('tbl_kolektif kl')
							->join('peserta p','p.id_peserta = kl.id_peserta')
							->join('jurusan j','j.id_jurusan = p.id_jurusan')
							->join('tbl_user u','u.id_user = kl.id_user')
							->where('kl.tanggal >=', $this->input->post('tgl1'))
							->where('kl.tanggal <=', $this->input->post('tgl2'))
							->get()->result();
			}

		$data = [
			'title'=>'Biaya Formulir',
			'peserta'=> $this->pm->getAllPeserta()->result(),
			'kolektor'	=> $this->db->get('tbl_kolektor')->result(),
			'kolektif' => $kolektif,
			'total' => $this->KM->getTotalKolektif(),
			'tgl1' => $this->input->post('tgl1'),
			'tgl2' => $this->input->post('tgl2'),
		];

			
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar',$data);
			$this->load->view('kolektif/index',$data);
			$this->load->view('template/footer',$data);
		

		
	}

	public function add()
	{	
		$data = [
			'title'=>'Tambah',
			'peserta'=> $this->pm->getAllPeserta()->result(),
			'kolektor'	=> $this->db->get('tbl_kolektor')->result(),
			'potongan'	=> $this->db->get('tbl_potongan')->result(),
		];

		$this->form_validation->set_rules('id_peserta','Peserta','required');
		if ($this->form_validation->run()==false) {

			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar',$data);
			$this->load->view('kolektif/tambah',$data);
			$this->load->view('template/footer',$data);

		}else{

			$data = [
				'tanggal' => date('Y-m-d'),
				'biaya_pendaftaran' => $this->input->post('biaya_formulir'),
				'id_peserta' => $this->input->post('id_peserta'),
				'nama_kolektif' => $this->input->post('nama_kolektif'),
				'keterangan' => $this->input->post('keterangan'),
				'id_peserta' => $this->input->post('id_peserta'),
				'cashback' => $this->input->post('cashback'),
				'id_kolektor' => $this->input->post('id_kolektor'),
				'id_user' => $this->session->userdata('id_user'),
			];

			$cek = $this->db->get_where('tbl_kolektif',['id_peserta' => $this->input->post('id_peserta')])->num_rows();
			if ($cek > 0) {
				$this->session->set_flashdata('message', "<script>swal('Peringatan!', 'Data Sudah ada.!', 'error');</script>");
        	redirect('Kolektif');
			}else{

			$this->db->where('id_peserta',$this->input->post('id_peserta'));
			$this->db->update('peserta',['no_pendaftaran' => autonumber(),'id_potongan'=>$this->input->post('id_potongan'),'status_pendaftaran'=>'Y']);

			$this->db->insert('tbl_kolektif',$data);
			$this->session->set_flashdata('message', "<script>swal('Success!', 'Data Tersimpan.!', 'success');</script>");
        	redirect('Kolektif');
			}
		}
		

	}

	public function edit($id)
	{	
		if ($this->session->userdata('id_level')!=1){

			$this->session->set_flashdata('message', "<script>swal('warning!', 'not allowed!', 'info');</script>");
        		redirect('Transaksi_pembayaran/laporan');

		}
		$id = decrypt_url($id);
		$data = [
			'title'=>'Ubah Data Kolektif',
			'peserta'=> $this->pm->getAllPeserta()->result(),
			'kolektor'	=> $this->db->get('tbl_kolektor')->result(),
			'kolektif' => $this->db->select('*')
								   ->from('tbl_kolektif kl')
								   ->join('peserta p','p.id_peserta = kl.id_peserta')
								   ->where('id_kolektif', $id)
								   ->get()->row(),
			'potongan'	=> $this->db->get('tbl_potongan')->result(),
		];

		$this->form_validation->set_rules('id_peserta','Peserta','required');
		$this->form_validation->set_rules('nama_kolektif','nama kolektor','required');
		if ($this->form_validation->run()==false) {

			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar',$data);
			$this->load->view('kolektif/edit',$data);
			$this->load->view('template/footer',$data);

		}else{

			$data = [
				'id_peserta' => $this->input->post('id_peserta'),
				'nama_kolektif' => $this->input->post('nama_kolektif'),
				'keterangan' => $this->input->post('keterangan'),
				'id_peserta' => $this->input->post('id_peserta'),
				'cashback' => $this->input->post('cashback'),
				'id_kolektor' => $this->input->post('id_kolektor'),
				'id_user' => $this->session->userdata('id_user'),
			];
			$this->db->where('id_kolektif',$id);
			$this->db->update('tbl_kolektif',$data);

			$this->db->where('id_peserta',$this->input->post('id_peserta'));
			$this->db->update('peserta',['id_potongan'=>$this->input->post('id_potongan')]);

			$this->session->set_flashdata('message', "<script>swal('Success!', 'Data Berhasil diubah.!', 'success');</script>");
        	redirect('Kolektif');
		}
		

	}

	public function delete($id)
	{	
		if ($this->session->userdata('id_level')!=1){

			$this->session->set_flashdata('message', "<script>swal('warning!', 'not allowed!', 'info');</script>");
        		redirect('Transaksi_pembayaran/laporan');

		}
		$id = decrypt_url($id);
		$peserta = decrypt_url($this->uri->segment(4));

		
		$this->db->where('id_peserta',$peserta);
		$this->db->update('peserta',['status_pendaftaran'=>'N']);

		$this->db->where('id_kolektif',$id);
		$this->db->delete('tbl_kolektif');
		$this->session->set_flashdata('message', "<script>swal('Success!', 'Data Berhasil dihapus.!', 'success');</script>");
        	redirect('Kolektif');

	}

	public function cetak($tgl1="",$tgl2="")
	{	
		$tgl1 = decrypt_url($tgl1);
		$tgl2 = decrypt_url($tgl2);
		$data = [
			'title' => 'Laporan Biaya Pendaftaran',
			'kolektif' => $this->db->select('*')
							->from('tbl_kolektif kl')
							->join('peserta p','p.id_peserta = kl.id_peserta')
							->join('jurusan j','j.id_jurusan = p.id_jurusan')
							->join('tbl_user u','u.id_user = kl.id_user')
							->where('kl.tanggal >=', $tgl1)
							->where('kl.tanggal <=', $tgl2)
							->get()->result(),

			'total_pendaftaran' => $this->db->select_sum('biaya_pendaftaran','j_pendaftaran')
									->where('tanggal >=', $tgl1)
									->where('tanggal <=', $tgl2)
									->where('tanggal <=', $tgl2)
									->get('tbl_kolektif')->row(),
			'total_cashback' => $this->db->select_sum('cashback','j_cashback')
									->where('tanggal >=', $tgl1)
									->where('tanggal <=', $tgl2)
									->get('tbl_kolektif')->row(),

			'operator' => $this->session->userdata('username'),
			'tanggal1' => $tgl1,
			'tanggal2' => $tgl2,

		];



		$this->load->library('Pdf');
	    $this->pdf->setFileName = "Laporan Biaya formulir.pdf";
	    $this->pdf->setPaper('Legal', 'Landscape');
		$this->pdf->loadView('kolektif/report', $data);
	}


	public function kwitansi($id)
	{
		$this->load->helper("terbilang");
		$id = decrypt_url($id);

		$pendaftaran =  $this->db->select('*')
							->from('tbl_kolektif kl')
							->join('peserta p','p.id_peserta = kl.id_peserta')
							->join('jurusan j','j.id_jurusan = p.id_jurusan')
							->join('tbl_user u','u.id_user = kl.id_user')
							->where('kl.id_kolektif >=', $id)
							->get()->row();
		$data =[
			'title'=>'Kwitansi Pembayaran Pendaftaran',
			'kwitansi' => $pendaftaran,
			'terbilang' => to_word($pendaftaran->biaya_pendaftaran).' Rupiah',
		];
		$this->load->view('kolektif/kwitansi',$data);
		$this->load->library('Pdf');
	    $this->pdf->setFileName = "Kwitansi-Pembayaran-Pendaftaran.pdf";
	    $this->pdf->setPaper('A4', 'Portrait');
		$this->pdf->loadView('kolektif/kwitansi', $data);


	}

	public function kwitansi_kolektor($id)
	{
		$this->load->helper("terbilang");
		$id = decrypt_url($id);
		$pendaftaran =  $this->db->select('*')
							->from('tbl_kolektif kl')
							->join('peserta p','p.id_peserta = kl.id_peserta')
							->join('jurusan j','j.id_jurusan = p.id_jurusan')
							->join('tbl_user u','u.id_user = kl.id_user')
							->where('kl.id_kolektif >=', $id)
							->get()->row();
		$data =[
			'title'=>'Kwitansi Pembayaran Kolektor',
			'kwitansi' => $pendaftaran,
			'terbilang' => to_word($pendaftaran->cashback).' Rupiah',
		];
		$this->load->view('kolektif/kwitansi',$data);
		$this->load->library('Pdf');
	    $this->pdf->setFileName = "Kwitansi-Pembayran-kolektor.pdf";
	    $this->pdf->setPaper('A4', 'Portrait');
		$this->pdf->loadView('kolektif/kwitansi_kolektor', $data);


	}


	public function get_peserta()
	{
		$id_peserta = $this->input->post('id');
		$data = $this->db->get_where('peserta',['id_peserta' => $id_peserta])->row();
		echo json_encode($data);
	}

	public function getCashback()
	{	
		$id = $this->input->post('id');
		$q  = $this->db->get_where('tbl_kolektor',['id_kolektor' => $id])->row();
		echo json_encode($q);
	}

}

/* End of file Kolektif.php */
/* Location: ./application/controllers/Kolektif.php */