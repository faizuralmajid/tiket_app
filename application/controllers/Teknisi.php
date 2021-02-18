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

	public function list_assets($menu)
	{
		$this->load->model('Masset');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['asset'] = $this->Masset->tampil_data_group($menu)->result();
		$data['menu'] = $menu;
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/list_assets', $data);
	}

	public function add_assets($menu)
	{
		$this->load->model('Mrequest');
		$this->load->model('Mkategori');
		$this->load->model('Mlokasi');
		$data['level'] = $this->session->userdata('level');
		$data['kategori'] = $this->Mkategori->get_category()->result();
		$data['group'] = $this->Mkategori->get_group()->result();
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id');
		$data['m_asset'] = $this->Mrequest->for_option('tbl_asset');
		$data['m_pj'] = $this->Mkategori->get_teknisi()->result();
		$data['lokasi'] = $this->Mlokasi->get_category()->result();
		$data['kota'] = $this->Mlokasi->get_category_back()->result();
		$data['menu'] = $menu;
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/add_assets', $data);
	}


	public function create_assets($type, $jenis)
	{
		$data = [
			'type' => $type,
			'jenis' => $jenis,
			'nama_asset' => htmlspecialchars($this->input->post('nama', true)),
			'created_by' => $this->session->userdata('nama'),
			'a' => htmlspecialchars($this->input->post('a', true)),
			'b' => htmlspecialchars($this->input->post('b', true)),
			'c' => htmlspecialchars($this->input->post('c', true)),
			'd' => htmlspecialchars($this->input->post('d', true)),
			'e' => htmlspecialchars($this->input->post('e', true)),
			'f' => htmlspecialchars($this->input->post('f', true)),
			'g' => htmlspecialchars($this->input->post('g', true)),
			'h' => htmlspecialchars($this->input->post('h', true)),
			'i' => htmlspecialchars($this->input->post('i', true)),
			'j' => htmlspecialchars($this->input->post('j', true)),
			'k' => htmlspecialchars($this->input->post('k', true)),
			'l' => htmlspecialchars($this->input->post('l', true)),
			'm' => htmlspecialchars($this->input->post('m', true)),
			'n' => htmlspecialchars($this->input->post('n', true)),
			'o' => htmlspecialchars($this->input->post('o', true)),
			'p' => htmlspecialchars($this->input->post('p', true)),
			'q' => htmlspecialchars($this->input->post('q', true)),
			'r' => htmlspecialchars($this->input->post('r', true)),
			's' => htmlspecialchars($this->input->post('s', true)),
			't' => htmlspecialchars($this->input->post('t', true)),
			'u' => htmlspecialchars($this->input->post('u', true)),
			'v' => htmlspecialchars($this->input->post('v', true)),
			'w' => htmlspecialchars($this->input->post('w', true)),
			'x' => htmlspecialchars($this->input->post('x', true)),
			'y' => htmlspecialchars($this->input->post('y', true)),
			'z' => htmlspecialchars($this->input->post('z', true)),
			'aa' => htmlspecialchars($this->input->post('aa', true)),
			'ab' => htmlspecialchars($this->input->post('ab', true)),
			'bisnis' => htmlspecialchars($this->input->post('bisnis', true)),
			'date1' => htmlspecialchars($this->input->post('date1', true)),
			'date2' => htmlspecialchars($this->input->post('date2', true)),
			'date3' => htmlspecialchars($this->input->post('date3', true)),
			
		];
		$this->db->insert('tbl_asset', $data);
		redirect(base_url('teknisi/list_assets/'.$jenis));
	}

	public function detail_solusi($id)
	{
		$this->load->model('Msolusi');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['detail'] = $this->Msolusi->tampil_data_detail($id)->result();
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/detail_solusi', $data);
	}

	public function detail_pengumuman($id)
	{
		$this->load->model('Mpengumuman');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['detail'] = $this->Mpengumuman->tampil_data_detail($id)->result();
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/detail_pengumuman', $data);
	}

	public function list_request()
	{
		$this->load->model('Mrequest');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['request'] = $this->Mrequest->tampil_data()->result();
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/list_request', $data);
	}

	public function detail_request($id)
	{
		$this->load->model('Mrequest');
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id');
		$data['detail'] = $this->Mrequest->tampil_data_detail($id)->result();
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/detail', $data);
	}

	public function update_request($id, $submenu)
	{
		$this->load->model('Mrequest');
		$this->load->model('Mkategori');
		$data['level'] = $this->session->userdata('level');
		$data['kategori'] = $this->Mkategori->get_category()->result();
		$data['group'] = $this->Mkategori->get_group()->result();
		if (isset($_GET['id_menu'])) {
			if ($_GET['id_menu'] != NULL) {
				$subkat = $this->Mkategori->cek('master_kategori', $_GET['id_menu'], 'kategori')->row();
				$data['m_subkategori'] = $this->Mkategori->get_sub_category($subkat->id)->result();
			}
		} else {
			$subkat = $this->Mkategori->cek('master_subkategori', $submenu, 'subkategori')->row();
			$data['m_subkategori'] = $this->Mkategori->get_sub_category($id)->result();
		}

		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id');
		$data['m_asset'] = $this->Mrequest->for_option('tbl_asset');
		$data['m_pj'] = $this->Mkategori->get_teknisi()->result();
		$data['id_user'] = $this->session->userdata('id');
		$data['detail'] = $this->Mrequest->tampil_data_detail($id)->result();
		$this->load->view('navbar/nav_teknisi', $data);
		$this->load->view('teknisi/update', $data);
	}

	public function update_datarequest()
	{
		$this->load->model('Mrequest');

		$this->form_validation->set_rules('status', 'status', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		$this->form_validation->set_rules('pj', 'pj', 'required', [
			'required' => 'Penanggung Jawab Wajib Diisi.',
		]);

		$this->form_validation->set_rules('grup', 'grup', 'required', [
			'required' => 'Group Wajib Diisi.',
		]);

		$this->form_validation->set_rules('subject', 'subject', 'required', [
			'required' => 'subject Wajib Diisi.',
		]);

		$this->form_validation->set_rules('body', 'body', 'required', [
			'required' => 'body Wajib Diisi.',
		]);

		$this->form_validation->set_rules('assets', 'asset', 'required', [
			'required' => 'asset Wajib Diisi.',
		]);


		$this->form_validation->set_rules('start_date', 'start_date', 'required', [
			'required' => 'Start Date Wajib Diisi.',
		]);


		$this->form_validation->set_rules('end_date', 'end Date', 'required', [
			'required' => 'End Date Wajib Diisi.',
		]);

		if ($this->form_validation->run() == false) {
			echo ("<script LANGUAGE='JavaScript'>
		window.alert('Cek Isian !!');
		</script>");
		} else {
			$data_update = [
				'id_user' => $this->session->userdata('id'),
				'username' => $this->session->userdata('username'),
				'user' => htmlspecialchars($this->input->post('user', true)),
				'status' => htmlspecialchars($this->input->post('status', true)),
				'grup' => htmlspecialchars($this->input->post('grup', true)),
				'subject' =>  htmlspecialchars($this->input->post('subject', true)),
				'body' => $this->input->post('body', true),
				'pj' => htmlspecialchars($this->input->post('pj', true)),
				'asset' => htmlspecialchars($this->input->post('assets', true)),
				'start_date' => htmlspecialchars($this->input->post('start_date', true)),
				'end_date' => htmlspecialchars($this->input->post('end_date', true)),
			];

			$where = array(
				'id' => $this->input->post('id_data', true)
			);

			$data_log = [
				'id_user' => $this->session->userdata('id'),
				'username' => $this->session->userdata('username'),
				'id_data' => htmlspecialchars($this->input->post('id_data', true)),
				'user' => htmlspecialchars($this->input->post('log_user', true)),
				'status' => htmlspecialchars($this->input->post('log_status', true)),
				'grup' => htmlspecialchars($this->input->post('log_grup', true)),
				'subject' =>  htmlspecialchars($this->input->post('log_subject', true)),
				'body' => $this->input->post('log_body', true),
				'pj' => htmlspecialchars($this->input->post('log_pj', true)),
				'asset' => htmlspecialchars($this->input->post('log_assets', true)),
				'start_date' => htmlspecialchars($this->input->post('log_startdate', true)),
				'end_date' => htmlspecialchars($this->input->post('log_enddate', true)),
			];
			//echo $this->session->userdata('level');
			$this->db->insert('log_request', $data_log);
			$this->Mrequest->update_data($where,$data_update,'tbl_request');
			redirect(base_url('staff/list_request'));
		}
	}
}
