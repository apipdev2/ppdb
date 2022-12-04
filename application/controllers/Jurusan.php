<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'title'=>'Data Jurusan',
			'jurusan'=> $this->db->get('jurusan')->result(),
		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('jurusan/index',$data);
		$this->load->view('template/footer',$data);
	}

	public function create()
	{
		$data = [
			'bidang_keahlian'	=> $this->input->post('bidang_keahlian'),
			'nama_jurusan'	    => $this->input->post('nama_jurusan'),
			'kuota_jurusan'	    => $this->input->post('kuota_jurusan'),
		];

		$this->db->insert('jurusan',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Tersimpan!', 'success');</script>");
        	redirect('Jurusan');
	}

	public function edit($id)
	{
		$data = [
			'bidang_keahlian'	=> $this->input->post('bidang_keahlian'),
			'nama_jurusan'	    => $this->input->post('nama_jurusan'),
			'kuota_jurusan'	    => $this->input->post('kuota_jurusan'),
		];

		$this->db->where('id_jurusan',$id);
		$this->db->update('jurusan',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Diubah!', 'success');</script>");
        	redirect('Jurusan');
	}

	public function delete($id)
	{
		
		$this->db->where('id_jurusan',$id);
		$this->db->delete('jurusan');
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Dihapus!', 'success');</script>");
        	redirect('Jurusan');
	}

}

/* End of file Jurusan.php */
/* Location: ./application/controllers/Jurusan.php */