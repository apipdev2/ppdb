<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_admin();
	}

	public function index()
	{
		$data = [
			'title'=>'Jenis Pembayaran',
			'jenis_pembayaran'=> $this->db->get('jenis_pembayaran')->result(),
		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('pembayaran/jenis_pembayaran',$data);
		$this->load->view('template/footer',$data);
	}

	public function create()
	{
		$data = [
			'jenis_pembayaran'	 => $this->input->post('jenis_pembayaran'),
			'besarnya'	   		 => $this->input->post('besarnya'),
			'status'	   		 => $this->input->post('status'),
		];

		$this->db->insert('jenis_pembayaran',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Tersimpan!', 'success');</script>");
        	redirect('Jenis_pembayaran');
	}

	public function edit($id)
	{
		$data = [
			'jenis_pembayaran'	 => $this->input->post('jenis_pembayaran'),
			'besarnya'	   		 => $this->input->post('besarnya'),
			'status'	   		 => $this->input->post('status'),
		];

		$this->db->where('id_jenis',$id);
		$this->db->update('jenis_pembayaran',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Diubah!', 'success');</script>");
        	redirect('Jenis_pembayaran');
	}

	public function delete($id)
	{
		
		$this->db->where('id_jenis',$id);
		$this->db->delete('jenis_pembayaran');
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Dihapus!', 'success');</script>");
        	redirect('Jenis_pembayaran');
	}

}

/* End of file Jenis_pembayaran.php */
/* Location: ./application/controllers/Jenis_pembayaran.php */