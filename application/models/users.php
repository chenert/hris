<?php
class Users extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_user_info($username, $password) {

		$result = $this->db->get_where('users', array('username'=>$username, 'password'=>$password));
		return $result->row();
	}
	
}
?>