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
		$this->load->model('Msolusi');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['solusi'] = $this->Msolusi->tampil_data()->result();
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/list_solusi', $data);
	}

	public function list_solusi()
	{
		$this->load->model('Msolusi');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['solusi'] = $this->Msolusi->tampil_data()->result();
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/list_solusi', $data);
	}

	public function add_solusi()
	{
		$this->form_validation->set_rules('judul', 'judul', 'required', [
			'required' => 'judul Wajib Diisi.',
		]);

		$this->form_validation->set_rules('tujuan', 'tujuan', 'required', [
			'required' => 'tujuan Wajib Diisi.',
		]);

		$this->form_validation->set_rules('created_date', 'created date', 'required', [
			'required' => 'Created Date Wajib Diisi',
		]);

		$this->form_validation->set_rules('end_date', 'End Date', 'required', [
			'required' => 'End Date Jawab Wajib Diisi.',
		]);

		$this->form_validation->set_rules('isi', 'isi', 'required', [
			'required' => 'Isi Jawab Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$this->load->view('navbar/nav_teknisi', $data);
			$this->load->view('teknisi/add_solusi', $data);
		} else {
			$data = [
				'judul' => htmlspecialchars($this->input->post('judul', true)),
				'created_date' => htmlspecialchars($this->input->post('created_date', true)),
				'end_date' => htmlspecialchars($this->input->post('end_date', true)),
				'isi' => $this->input->post('isi', true),
				'tujuan' => htmlspecialchars($this->input->post('tujuan', true)),
				'user' => $this->session->userdata('username')
			];
			$this->db->insert('tbl_solusi', $data);
			redirect(base_url('teknisi/list_solusi'));
		}
	}

	public function list_pengumuman()
	{
		$this->load->model('Mpengumuman');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['pengumuman'] = $this->Mpengumuman->tampil_data()->result();
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/list_pengumuman', $data);
	}

	public function add_pengumuman()
	{
		$this->form_validation->set_rules('judul', 'judul', 'required', [
			'required' => 'judul Wajib Diisi.',
		]);

		$this->form_validation->set_rules('created_date', 'created date', 'required', [
			'required' => 'Created Date Wajib Diisi',
		]);

		$this->form_validation->set_rules('end_date', 'End Date', 'required', [
			'required' => 'End Date Jawab Wajib Diisi.',
		]);

		$this->form_validation->set_rules('isi', 'isi', 'required', [
			'required' => 'Isi Jawab Wajib Diisi.',
		]);


		if ($this->form_validation->run() == false) {
			$data['nama'] = $this->session->userdata('nama');
			$data['level'] = $this->session->userdata('level');
			$this->load->view('navbar/nav_teknisi', $data);
			$this->load->view('teknisi/add_pengumuman', $data);
		} else {
			$data = [
				'judul' => htmlspecialchars($this->input->post('judul', true)),
				'start_date' => htmlspecialchars($this->input->post('created_date', true)),
				'end_date' => htmlspecialchars($this->input->post('end_date', true)),
				'isi' => $this->input->post('isi', true),
			];
			$this->db->insert('tbl_pengumuman', $data);
			redirect(base_url('teknisi/list_pengumuman'));
		}
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