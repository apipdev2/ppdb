<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{	
		
		
		$this->load->view('template/index');
	}

}

/* End of file Web.php */
/* Location: ./application/controllers/Web.php */