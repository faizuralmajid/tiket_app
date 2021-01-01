<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$check = $this->session->userdata('level');
		if($check != "Staff"){
			redirect(base_url());
		}
	}

	public function index()
	{
		$this->load->model('Mrequest');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['request'] = $this->Mrequest->tampil_data()->result();
		$this->load->view('navbar/nav_staff',$data);
		$this->load->view('staff/dashboard_staff',$data);
	}

	public function list_request()
	{
		$this->load->model('Mrequest');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['request'] = $this->Mrequest->tampil_data()->result();
		$this->load->view('navbar/nav_staff',$data);
		$this->load->view('staff/list_request', $data);
	}

	public function list_pengumuman()
	{
		$this->load->model('Mrequest');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['request'] = $this->Mrequest->tampil_data()->result();
		$this->load->view('navbar/nav_staff',$data);
		$this->load->view('staff/list_pengumuman', $data);
	}

	public function list_solusi()
	{
		$this->load->model('Mrequest');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['request'] = $this->Mrequest->tampil_data()->result();
		$this->load->view('navbar/nav_staff',$data);
		$this->load->view('staff/list_solusi', $data);
	}


	public function add_request()
	{
		$this->load->model('Mrequest');
		$this->load->model('Mkategori');
		$data['level'] = $this->session->userdata('level');
		$data['kategori'] = $this->Mkategori->get_category()->result();
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id');
		$data['m_subkategori'] = $this->Mkategori->get_sub_category($_GET['id_menu'])->result();
		$data['m_sla'] = $this->Mrequest->for_option('master_sla');
		$data['m_asset'] = $this->Mrequest->for_option('tbl_asset');
		$data['m_pj'] = $this->Mrequest->for_option('users');
		$this->load->view('navbar/nav_staff',$data);
		$this->load->view('staff/add_request', $data);
	}

	public function create_request()
	{
		$this->form_validation->set_rules('user', 'user', 'required', [
			'required' => 'user Wajib Diisi.',
		]);

		$this->form_validation->set_rules('sla', 'sla', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		$this->form_validation->set_rules('kategori', 'kategori', 'required', [
			'required' => 'kategori Wajib Diisi.',
		]);

		$this->form_validation->set_rules('sub_kategori', 'sub_kategori', 'required', [
			'required' => 'sub_kategori Wajib Diisi',
		]);

		$this->form_validation->set_rules('staff_nama', 'staff_nama', 'required', [
			'required' => 'staff_nama Wajib Diisi.',
		]);

		$this->form_validation->set_rules('type', 'type', 'required', [
			'required' => 'type Wajib Diisi.',
		]);

		$this->form_validation->set_rules('subject', 'subject', 'required', [
			'required' => 'subject Wajib Diisi.',
		]);

		$this->form_validation->set_rules('body', 'body', 'required', [
			'required' => 'body Wajib Diisi.',
		]);

		$this->form_validation->set_rules('asset', 'asset', 'required', [
			'required' => 'asset Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("staff/add_assets");
		} else {
			$data = [
				'user' => htmlspecialchars($this->input->post('user', true)),
				'sla' => htmlspecialchars($this->input->post('sla', true)),
				'kategori' => htmlspecialchars($this->input->post('kategori', true)),
				'sub_kategori' => htmlspecialchars($this->input->post('sub_kategori', true)),
				'staff_nama' => htmlspecialchars($this->input->post('staff_nama', true)),
				'type' => htmlspecialchars($this->input->post('tyoe', true)),
				'subject' =>  htmlspecialchars($this->input->post('subject', true)),
				'body' => htmlspecialchars($this->input->post('body', true)),
				'asset' => htmlspecialchars($this->input->post('asset', true)),
				'status' => "open",
			];
			//echo $this->session->userdata('level');
			$this->db->insert('tbl_request', $data);
			redirect(base_url('index.php/staff/list_request'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
