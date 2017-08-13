<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Slogin {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	// Fungsi login
	public function login($username, $password) {
		$query = $this->CI->db->get_where('admin',array('usernameadmin'=>$username,'passwordadmin' => $password));
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT idadmin FROM admin where usernameadmin = "'.$username.'"');
			$admin 	= $row->row();
			$id 	= $admin->idadmin;
			$this->CI->session->set_userdata('usernameadmin', $username);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			redirect(base_url('Pohon'));
		}else{
			$this->CI->session->set_flashdata('sukses','Oops... Username/Password salah');
			redirect(base_url('Login'));
		}
		return false;
	}
	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('usernameadmin') == '') {
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			redirect(base_url('Login'));
		}
	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('usernameadmin');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(base_url('Login'));
	}
}