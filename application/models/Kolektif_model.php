<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kolektif_model extends CI_Model {

	public function getKolektif()
	{
		return $this->db->select('*')
						->from('tbl_kolektif')
						->join('peserta','peserta.id_peserta = tbl_kolektif.id_peserta')
						->join('tbl_kolektor','tbl_kolektor.id_kolektor = tbl_kolektif.id_kolektor')
						->get();
	}

	public function getTotalKolektif()
	{
		return $this->db->select_sum('age');
	}

}

/* End of file Kolektif_model.php */
/* Location: ./application/models/Kolektif_model.php */