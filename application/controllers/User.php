<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_admin();
		if ($this->session->userdata('id_level')!=1) {
			$this->session->set_flashdata('message', "<script>swal('Info!', 'Not Allowed!', 'info');</script>");
        	redirect('Dashboard');
		}
	}

	public function index()
	{	
		$data = [
			'title'=>'Data User',
			'user' =>  $this->db->select('*')
								->from('tbl_user u')
								->join('tbl_userlevel ul','ul.id_level = u.id_level')
								->get()->result(),
			'level'=> $this->db->get('tbl_userlevel')->result(),
		];

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('user/index',$data);
		$this->load->view('template/footer',$data);
	}

	public function add()
	{
		$data = [
			'username'		=> $this->input->post('username'),
			'email'	    	=> $this->input->post('email'),
			'password'	    => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'id_level'	    => $this->input->post('id_level'),
			'image'			=> 'default.jpg',
			'is_active'		=> 'Y'
		];

		$this->db->insert('tbl_user',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Tersimpan!', 'success');</script>");
        	redirect('User');
	}

	public function edit($id)
	{	
		$id = decrypt_url($id);
		$data = [
			'username'		=> $this->input->post('username'),
			'email'	    	=> $this->input->post('email'),
			'id_level'	    => $this->input->post('id_level'),
			'is_active'		=> $this->input->post('is_active'),
		];

		$this->db->where('id_user',$id);
		$this->db->update('tbl_user',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Diubah!', 'success');</script>");
        	redirect('User');


	}

	public function change($id)
	{	
		$id = decrypt_url($id);
		$data = [
			'password'	    => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
		];
		$this->db->where('id_user',$id);
		$this->db->update('tbl_user',$data);
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Diubah!', 'success');</script>");
        	redirect('User');
	}

	public function delete($id)
	{
		$id = decrypt_url($id);
		$this->db->where('id_user',$id);
		$this->db->delete('tbl_user');
		$this->session->set_flashdata('message', "<script>swal('Sukses!', 'Data Berhasil Dihapus!', 'success');</script>");
        	redirect('User');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */