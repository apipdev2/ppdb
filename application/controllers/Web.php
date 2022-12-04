<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{	
		$data =[

			'title' => 'E-PPDB',
		];
		
		$this->load->view('web/index',$data);
	}

}

/* End of file Web.php */
/* Location: ./application/controllers/Web.php */