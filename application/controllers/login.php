<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('login');
	}
	
	public function authenticate() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if ($this->Users->get_info($username, $password)) {
			$this->load->view('top');
		}
		return false;
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */