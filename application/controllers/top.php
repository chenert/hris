<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends CI_Controller {

	public function index() {
		$this->load->view('top');
	}
	
	public function show_profile() {
		$this->load->view('profile');
	}
	
	public function show_leaves() {}
	
	public function show_timecard() {}
	
}

/* End of file top.php */
/* Location: ./application/controllers/top.php */