<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_model extends CI_Model {

	public function getAllPeserta()
	{
		return $this->db->select('*')
				 ->from('peserta p')
				 ->join('jurusan j', 'j.id_jurusan = p.id_jurusan')
				 ->where('p.id_tahun','6')
				 ->get();
	}

	public function getPesertaById($id)
	{
		return $this->db->select('*')
				 ->from('peserta p')
				 ->join('jurusan j', 'j.id_jurusan = p.id_jurusan')
				 ->where('p.id_peserta',$id)
				 ->where('p.id_tahun','6')
				 ->get();
	}

	public function getPesertaByNo($no_pendaftaran)
	{
		return $this->db->select('*')
				 ->from('peserta p')
				 ->join('jurusan j', 'j.id_jurusan = p.id_jurusan')
				 ->where('p.no_pendaftaran',$no_pendaftaran)
				 ->where('p.id_tahun','6')
				 ->get();
	}

	public function insert_peserta($data)
	{
		$this->db->insert('peserta',$data);
	}

	public function getSiswaById($id)
	{
		return $this->db->select('*')
				 ->from('peserta p')
				 ->where('p.id_peserta',$id)
				 ->where('p.id_tahun','6')
				 ->get();
	}



	

}

/* End of file Peserta_model.php */
/* Location: ./application/models/Peserta_model.php */