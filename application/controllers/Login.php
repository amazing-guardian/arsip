<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index(){
		$this->halaman_login();
	}

	public function halaman_login(){
		$this->load->view('layout/kosongan', array(
			'judul' => 'Login',
			'isi' => 'halaman_login',
			'parameter' => ''
		));
	}

	public function login_do(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek_login = $this->db->get_where('admin', array(
			'username' => $username,
			'password' => $password
		))->num_rows();
		if ($cek_login > 0){
			$this->session->set_userdata(array(
				'username' => $username,
				'status' => 'login'
			));
			redirect(base_url().'index.php/home');
		} else {
			$this->session->set_flashdata('pesan', 'Username dan password salah');
			redirect(base_url().'index.php/login');
		}
	}

}
