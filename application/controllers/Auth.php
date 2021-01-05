<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}


	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$this->form_validation->set_rules('Email', 'Username', 'trim|required', [
			'required' => 'Harap isi bidang email!',
		]);
		$this->form_validation->set_rules('Password', 'Password', 'trim|required', [
			'required' => 'Password Minimum 8 Karakter',
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("login");
		} else {
			$this->login_auth();
		}
	}

	private function login_auth()
	{
		$this->load->model('Mlogin');
		$email = $this->input->post('Email');
		$password = $this->input->post('Password');

		$where = array(
			'username' => $email,
			'password' => $password
		);
		$cek = $this->Mlogin->cek_login("users", $where)->num_rows();
		$cek2 = $this->Mlogin->cek_login_2("users", $email)->row();
		if ($cek > 0) {
			if ($cek2->level_akses == 0) {
				$data_session = array(
					'id' => $cek2->id,
					'nama' => $cek2->nama,
					'email' => $cek2->email,
					'username' => $email,
					'status' => "login",
					'level' => "Admin"
				);

				$this->session->set_userdata($data_session);

				redirect('Admin');
			} elseif ($cek2->level_akses == 1) {
				$data_session = array(
					'id' => $cek2->id,
					'nama' => $cek2->nama,
					'email' => $cek2->email,
					'username' => $email,
					'status' => "login",
					'level' => "Teknisi"
				);

				$this->session->set_userdata($data_session);

				redirect('Teknisi');
			} elseif ($cek2->level_akses == 2) {
				$data_session = array(
					'id' => $cek2->id,
					'nama' => $cek2->nama,
					'email' => $cek2->email,
					'username' => $email,
					'status' => "login",
					'level' => "Staff"
				);

				$this->session->set_userdata($data_session);

				redirect('Staff');
			}
		} else {
			echo ("<script LANGUAGE='JavaScript'>
		window.alert('Username atau Password Salah !!');
		var base_url = window.location.origin;
		var folder = window.location;
		var folder = folder.toString().split('/')[3];
		window.location.href=base_url+'/'+folder;
		</script>");

			$this->load->view("login");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
