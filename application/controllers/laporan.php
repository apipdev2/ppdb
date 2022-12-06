<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_admin();
	}

	public function index()
	{
		
	}

}

/* End of file laporan.php */
/* Location: ./application/controllers/laporan.php */