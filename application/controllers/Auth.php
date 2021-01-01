<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	function __construct(){
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
        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email', [
            'required' => 'Harap isi bidang email!',
            'valid_email' => 'Email tidak valid!',
        ]);
        $this->form_validation->set_rules('Password', 'Password', 'trim|required', [
            'required' => 'Harap isi bidang password!',
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
			'email' => $email,
			'password' => $password
		);
        $cek = $this->Mlogin->cek_login("users",$where)->num_rows();
        $cek2 = $this->Mlogin->cek_login_2("users",$email)->row();
		if($cek > 0){
			if($cek2->level_akses == 0){
				$data_session = array(
					'id' => $cek2->id,
					'nama' => $cek2->nama,
					'email' => $email,
					'status' => "login",
					'level' => "Admin"
					);
	 
				$this->session->set_userdata($data_session);
	 
				redirect('Admin');
			}elseif($cek2->level_akses == 1){
				$data_session = array(
					'id' => $cek2->id,
					'nama' => $cek2->nama,
					'email' => $email,
					'status' => "login",
					'level' => "Teknisi"
					);
	 
				$this->session->set_userdata($data_session);
	 
				redirect('Teknisi');
			}elseif($cek2->level_akses == 2){
				$data_session = array(
					'id' => $cek2->id,
					'nama' => $cek2->nama,
					'email' => $email,
					'status' => "login",
					'level' => "Staff"
					);
	 
				$this->session->set_userdata($data_session);
	 
				redirect('Staff');
			} 
		}else{
			$this->load->view("login");
		}
	}
	
	public function logout()
    {
     $this->session->sess_destroy();
     redirect(base_url());
     
    }
        
}
