<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$check = $this->session->userdata('level');
		if ($check != "Admin") {
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
		$this->load->view('navbar/nav_admin', $data);
		$this->load->view('admin/list_pengguna', $data);
	}

	public function list_pengguna()
	{
		$this->load->model('Muser');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->Muser->tampil_data()->result();
		$this->load->view('navbar/nav_admin', $data);
		$this->load->view('admin/list_pengguna', $data);
	}

	public function add_pengguna()
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('navbar/nav_admin', $data);
		$this->load->view('admin/add_pengguna', $data);
	}

	public function create_pengguna()
	{
		$this->form_validation->set_rules('status', 'status', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		$this->form_validation->set_rules('email', 'email', 'required', [
			'required' => 'email Wajib Diisi.',
		]);

		$this->form_validation->set_rules('username', 'username', 'required', [
			'required' => 'username Wajib Diisi',
		]);

		$this->form_validation->set_rules('pass', 'password', 'required', [
			'required' => 'Password Jawab Wajib Diisi.',
		]);

		$this->form_validation->set_rules('repass', 'repassword', 'required', [
			'required' => 'Re-Password Jawab Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$this->load->view('navbar/nav_admin', $data);
			$this->load->view('admin/add_pengguna', $data);
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => htmlspecialchars($this->input->post('pass', true)),
				'level_akses' => htmlspecialchars($this->input->post('status', true)),
			];
			$this->db->insert('users', $data);
			redirect(base_url('admin/list_pengguna'));
		}
	}

	public function update_pengguna($username)
	{
		$this->load->model('Muser');
		$this->form_validation->set_rules('status', 'status', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		$this->form_validation->set_rules('email', 'email', 'required', [
			'required' => 'email Wajib Diisi.',
		]);

		$this->form_validation->set_rules('username', 'username', 'required', [
			'required' => 'username Wajib Diisi',
		]);

		if ($this->form_validation->run() == false) {
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$data['data_pengguna'] = $this->Muser->tampil_data_user($username)->result();
			$this->load->view('navbar/nav_admin', $data);
			$this->load->view('admin/update_pengguna', $data);
		} else {
			$where = array(
				'username' => $username
			);

			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'level_akses' => htmlspecialchars($this->input->post('status', true)),
			];
			$this->Muser->update_data($where, $data, 'users');
			redirect(base_url('admin/list_pengguna'));
		}
	}

	public function delete_pengguna($username)
	{
		$this->load->model('Muser');
		$where = array(
			'username' => $username
		);

		$this->Muser->delete_user($where, 'users');
		redirect(base_url('admin/list_pengguna'));
	}

	public function list_menu()
	{
		$this->load->model('Mkategori');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['kategori'] = $this->Mkategori->get_category()->result();
		$data['subkategori'] = $this->Mkategori->get_all_subcategory()->result();
		$this->load->view('navbar/nav_admin', $data);
		$this->load->view('admin/list_menu', $data);
	}

	public function list_lokasi()
	{
		$this->load->model('Mlokasi');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['kategori'] = $this->Mlokasi->get_category()->result();
		$data['subkategori'] = $this->Mlokasi->get_all_subcategory()->result();
		$this->load->view('navbar/nav_admin', $data);
		$this->load->view('admin/list_lokasi', $data);
	}

	public function create_parent()
	{
		$this->form_validation->set_rules('kategori', 'kategori', 'required', [
			'required' => 'Kategori Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->model('Mkategori');
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$data['kategori'] = $this->Mkategori->get_category()->result();
			$data['subkategori'] = $this->Mkategori->get_all_subcategory()->result();
			$this->load->view('navbar/nav_admin', $data);
			$this->load->view('admin/list_menu', $data);
		} else {
			$data = [
				'kategori' => htmlspecialchars($this->input->post('kategori', true))
			];
			$this->db->insert('master_kategori', $data);
			redirect(base_url('admin/list_menu'));
		}
	}

	public function create_subparent()
	{
		$this->form_validation->set_rules('kategori', 'kategori', 'required', [
			'required' => 'kategori Wajib Diisi.',
		]);

		$this->form_validation->set_rules('subkategori', 'subkategori', 'required', [
			'required' => 'Sub Kategori Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->model('Mkategori');
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$data['kategori'] = $this->Mkategori->get_category()->result();
			$data['subkategori'] = $this->Mkategori->get_all_subcategory()->result();
			$this->load->view('navbar/nav_admin', $data);
			$this->load->view('admin/list_menu', $data);
		} else {
			$data = [
				'id_kategori' => htmlspecialchars($this->input->post('kategori', true)),
				'subkategori' => htmlspecialchars($this->input->post('subkategori', true))
			];
			$this->db->insert('master_subkategori', $data);
			redirect(base_url('admin/list_menu'));
		}
	}

	public function update_parent()
	{
		$this->load->model('Muser');
		$this->form_validation->set_rules('kategori', 'kategroi', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->model('Mkategori');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['kategori'] = $this->Mkategori->get_category()->result();
		$data['subkategori'] = $this->Mkategori->get_all_subcategory()->result();
		$this->load->view('navbar/nav_admin', $data);
		$this->load->view('admin/list_menu', $data);
		} else {
			$where = array(
				'id' => htmlspecialchars($this->input->post('id_kat', true)),
			);

			$data = [
				'kategori' => htmlspecialchars($this->input->post('kategori', true)),
			];
			$this->Muser->update_data($where, $data, 'master_kategori');
			redirect(base_url('admin/list_menu'));
		}
	}

	public function delete_parent($kategori,$id_kategori)
	{
		$this->load->model('Muser');
		$where = array(
			'kategori' => $kategori
		);

		$whereid = array(
			'id_kategori' => $id_kategori
		);

		$this->Muser->delete_user($where, 'master_kategori');
		$this->Muser->delete_user($whereid, 'master_subkategori');
		redirect(base_url('admin/list_menu'));
	}

	public function update_subparent()
	{
		$this->load->model('Muser');
		$this->form_validation->set_rules('kategori', 'kategori', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		$this->form_validation->set_rules('subkategori', 'subkategori', 'required', [
			'required' => 'sub kategori Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->model('Mkategori');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['kategori'] = $this->Mkategori->get_category()->result();
		$data['subkategori'] = $this->Mkategori->get_all_subcategory()->result();
		$this->load->view('navbar/nav_admin', $data);
		$this->load->view('admin/list_menu', $data);
		} else {
			$where = array(
				'id' => htmlspecialchars($this->input->post('id_sub', true)),
			);

			$data = [
				'id_kategori' => htmlspecialchars($this->input->post('kategori', true)),
				'subkategori' => htmlspecialchars($this->input->post('subkategori', true)),
				
			];
			$this->Muser->update_data($where, $data, 'master_subkategori');
			redirect(base_url('admin/list_menu'));
		}
	}

	public function delete_subparent($subkategori)
	{
		$this->load->model('Muser');
		$where = array(
			'id' => $subkategori
		);

		$this->Muser->delete_user($where, 'master_subkategori');
		redirect(base_url('admin/list_menu'));
	}


	public function create_lokasi()
	{
		$this->form_validation->set_rules('kategori', 'kategori', 'required', [
			'required' => 'Kategori Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->model('Mlokasi');
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$data['kategori'] = $this->Mlokasi->get_category()->result();
			$data['subkategori'] = $this->Mlokasi->get_all_subcategory()->result();
			$this->load->view('navbar/nav_admin', $data);
			$this->load->view('admin/list_lokasi', $data);
		} else {
			$data = [
				'lokasi' => htmlspecialchars($this->input->post('kategori', true))
			];
			$this->db->insert('master_lokasi', $data);
			redirect(base_url('admin/list_lokasi'));
		}
	}

	public function update_lokasi()
	{
		$this->load->model('Muser');
		$this->form_validation->set_rules('kategori', 'kategroi', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->model('Mlokasi');
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$data['kategori'] = $this->Mlokasi->get_category()->result();
			$data['subkategori'] = $this->Mlokasi->get_all_subcategory()->result();
			$this->load->view('navbar/nav_admin', $data);
			$this->load->view('admin/list_lokasi', $data);
		} else {
			$where = array(
				'id' => htmlspecialchars($this->input->post('id_kat', true)),
			);

			$data = [
				'lokasi' => htmlspecialchars($this->input->post('kategori', true)),
			];
			$this->Muser->update_data($where, $data, 'master_lokasi');
			redirect(base_url('admin/list_lokasi'));
		}
	}

	public function delete_lokasi($kategori,$id_kategori)
	{
		$this->load->model('Muser');
		$where = array(
			'id' => $kategori
		);

		$whereid = array(
			'id_lokasi' => $id_kategori
		);

		$this->Muser->delete_user($where, 'master_lokasi');
		$this->Muser->delete_user($whereid, 'master_kota');
		redirect(base_url('admin/list_lokasi'));
	}

	public function create_kota()
	{
		$this->form_validation->set_rules('kategori', 'kategori', 'required', [
			'required' => 'kategori Wajib Diisi.',
		]);

		$this->form_validation->set_rules('subkategori', 'subkategori', 'required', [
			'required' => 'Sub Kategori Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->model('Mlokasi');
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$data['kategori'] = $this->Mlokasi->get_category()->result();
			$data['subkategori'] = $this->Mlokasi->get_all_subcategory()->result();
			$this->load->view('navbar/nav_admin', $data);
			$this->load->view('admin/list_lokasi', $data);
		} else {
			$data = [
				'id_lokasi' => htmlspecialchars($this->input->post('kategori', true)),
				'kota' => htmlspecialchars($this->input->post('subkategori', true))
			];
			$this->db->insert('master_kota', $data);
			redirect(base_url('admin/list_lokasi'));
		}
	}

	
	public function update_kota(){
		
		$this->load->model('Muser');

		$this->form_validation->set_rules('kategori', 'kategori', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		$this->form_validation->set_rules('subkategori', 'subkategori', 'required', [
			'required' => 'sub kategori Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->model('Mlokasi');
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$data['kategori'] = $this->Mlokasi->get_category()->result();
			$data['subkategori'] = $this->Mlokasi->get_all_subcategory()->result();
			$this->load->view('navbar/nav_admin', $data);
			$this->load->view('admin/list_lokasi', $data);
		} else {
			$where = [
				'id' => htmlspecialchars($this->input->post('id_sub', true)),
			];

			$data = [
				'id_lokasi' => htmlspecialchars($this->input->post('kategori', true)),
				'kota' => htmlspecialchars($this->input->post('subkategori', true)),
			];
			$this->Muser->update_data($where, $data, 'master_kota');
			redirect(base_url('admin/list_lokasi'));
		}
	}

	public function delete_kota($subkategori)
	{
		$this->load->model('Muser');
		$where = array(
			'id' => $subkategori
		);

		$this->Muser->delete_user($where, 'master_kota');
		redirect(base_url('admin/list_lokasi'));
	}
}
