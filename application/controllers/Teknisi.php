<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teknisi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$check = $this->session->userdata('level');
		if ($check != "Teknisi") {
			echo ("<script LANGUAGE='JavaScript'>
	window.alert('Login dulu ya !!');
	var base_url = window.location.origin;
    window.location.href=base_url+'/tiket';
    </script>");
		}
    }

    public function index()
	{
		$this->load->model('Muser');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->Muser->tampil_data()->result();
		$this->load->view('navbar/nav_teknisi',$data);
		$this->load->view('admin/list_pengguna',$data);
	}

	public function list_asset()
	{
		$this->load->model('Muser');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->Muser->tampil_data()->result();
		$this->load->view('navbar/nav_teknisi',$data);
		$this->load->view('admin/list_pengguna',$data);
	}

}