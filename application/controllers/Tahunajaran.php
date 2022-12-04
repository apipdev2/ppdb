<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahunajaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'title'			=> 'Data Tahun Ajaran',
			'tahunajaran'	=> $this->db->get('tahunajaran')->result(),
		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('tahunajaran/index',$data);
		$this->load->view('template/footer',$data);
	}

	public function create()
	{
		$data = [
			'tahun'	=> $this->input->post('tahun'),
			'tahun_ajaran'	    => $this->input->post('tahun_ajaran'),
			'kuota'	    => $this->input->post('kuota'),
		];

		$this->db->insert('tahunajaran',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Tersimpan!', 'success');</script>");
        	redirect('Tahunajaran');
	}

	public function edit($id)
	{
		$data = [
			'tahun'	=> $this->input->post('tahun'),
			'tahun_ajaran'	    => $this->input->post('tahun_ajaran'),
			'kuota'	    => $this->input->post('kuota'),
		];

		$this->db->where('id_tahun',$id);
		$this->db->update('tahunajaran',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Diubah!', 'success');</script>");
        	redirect('Tahunajaran');
	}

	public function delete($id)
	{
		
		$this->db->where('id_tahun',$id);
		$this->db->delete('tahunajaran');
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Dihapus!', 'success');</script>");
        	redirect('Tahunajaran');
	}

}

/* End of file Tahunajaran.php */
/* Location: ./application/controllers/Tahunajaran.php */