<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function getSiswaAll()
	{
		return $this->db->select('*')
				 ->from('siswa')
				 ->get();
	}

}

/* End of file Siswa_model.php */
/* Location: ./application/models/Siswa_model.php */