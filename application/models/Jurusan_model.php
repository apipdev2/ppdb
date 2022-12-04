<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {

	public function getJurusan()
	{
		return $this->db->get('jurusan');
	}

}

/* End of file Jurusan_model.php */
/* Location: ./application/models/Jurusan_model.php */