<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	// Index login
	public function index() {
		// Fungsi Login
		$valid = $this->form_validation;
		$username = $this->input->post('usernameadmin');
		$password = $this->input->post('passwordadmin');
		$valid->set_rules('usernameadmin','Usernameadmin','required');
		$valid->set_rules('passwordadmin','Passwordadmin','required');
		if($valid->run()) {
			$this->slogin->login($username,$password, base_url('pohon'), base_url('login'));
		}
		// End fungsi login
		$data = array(	'title'	=> 'Halaman Login Administrator');
		$this->load->view('login',$data);
	}
	
	// Logout di sini
	public function logout() {
		$this->slogin->logout();	
	}	
}