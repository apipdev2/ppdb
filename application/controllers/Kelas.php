<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'title'=>'Data Kelas',
			'kelas'=> $this->db->get('tbl_kelas')->result(),
		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('kelas/index',$data);
		$this->load->view('template/footer',$data);
	}

	public function create()
	{
		$data = [
			'tingkat'	=> $this->input->post('tingkat'),
			'kelas'	    => $this->input->post('kelas'),
		];

		$this->db->insert('tbl_kelas',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Tersimpan!', 'success');</script>");
        	redirect('Kelas');
	}

	public function edit($id)
	{
		$data = [
			'tingkat'	=> $this->input->post('tingkat'),
			'kelas'	    => $this->input->post('kelas'),
		];

		$this->db->where('id',$id);
		$this->db->update('tbl_kelas',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Diubah!', 'success');</script>");
        	redirect('Kelas');
	}

	public function delete($id)
	{
		
		$this->db->where('id',$id);
		$this->db->delete('tbl_kelas');
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Dihapus!', 'success');</script>");
        	redirect('Kelas');
	}

}

/* End of file Kelas.php */
/* Location: ./application/controllers/Kelas.php */