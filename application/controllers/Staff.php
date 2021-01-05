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
		if ($check != "Staff") {
			echo ("<script LANGUAGE='JavaScript'>
	window.alert('Login dulu ya !!');
	var base_url = window.location.origin;
    window.location.href=base_url+'/tiket';
    </script>");
		}
	}

	public function index()
	{
		$this->load->model('Mrequest');
		$this->load->model('Mpengumuman');
		$this->load->model('Msolusi');
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['request'] = $this->Mrequest->tampil_data_ten_terbaru()->result();
		$data['request_lama'] = $this->Mrequest->tampil_data_ten_terlama()->result();
		$data['pengumuman'] = $this->Mpengumuman->tampil_data()->result();
		$data['solusi'] = $this->Msolusi->tampil_data()->result();
		$this->load->view('navbar/nav_staff', $data);
		$this->load->view('staff/dashboard_staff', $data);
	}

	public function list_request()
	{
		$this->load->model('Mrequest');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['request'] = $this->Mrequest->tampil_data()->result();
		$this->load->view('navbar/nav_staff', $data);
		$this->load->view('staff/list_request', $data);
	}

	public function list_pengumuman()
	{
		$this->load->model('Mpengumuman');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['pengumuman'] = $this->Mpengumuman->tampil_data()->result();
		$this->load->view('navbar/nav_staff', $data);
		$this->load->view('staff/list_pengumuman', $data);
	}

	public function list_solusi()
	{
		$this->load->model('Msolusi');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['solusi'] = $this->Msolusi->tampil_data()->result();
		$this->load->view('navbar/nav_staff', $data);
		$this->load->view('staff/list_solusi', $data);
	}


	public function add_request()
	{
		$this->load->model('Mrequest');
		$this->load->model('Mkategori');
		$data['level'] = $this->session->userdata('level');
		$data['kategori'] = $this->Mkategori->get_category()->result();
		$data['group'] = $this->Mkategori->get_group()->result();
		$data['m_subkategori'] = $this->Mkategori->get_sub_category($_GET['id_menu'])->result();
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id');
		$data['m_asset'] = $this->Mrequest->for_option('tbl_asset');
		$data['m_pj'] = $this->Mkategori->get_teknisi()->result();
		$this->load->view('navbar/nav_staff', $data);
		$this->load->view('staff/add_request', $data);
	}

	public function detail_request($id)
	{
		$this->load->model('Mrequest');
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id');
		$data['detail'] = $this->Mrequest->tampil_data_detail($id)->result();
		$this->load->view('navbar/nav_staff', $data);
		$this->load->view('staff/detail', $data);
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
			$data['m_subkategori'] = $this->Mkategori->get_sub_category($subkat->id_kategori)->result();
		}

		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id');
		$data['m_asset'] = $this->Mrequest->for_option('tbl_asset');
		$data['m_pj'] = $this->Mkategori->get_teknisi()->result();
		$data['id_user'] = $this->session->userdata('id');
		$data['detail'] = $this->Mrequest->tampil_data_detail($id)->result();
		$this->load->view('navbar/nav_staff', $data);
		$this->load->view('staff/update', $data);
	}

	public function create_request()
	{

		$this->form_validation->set_rules('status', 'status', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		$this->form_validation->set_rules('kategori', 'kategori', 'required', [
			'required' => 'kategori Wajib Diisi.',
		]);

		$this->form_validation->set_rules('sub_kategori', 'sub_kategori', 'required', [
			'required' => 'sub_kategori Wajib Diisi',
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
			$this->load->model('Mrequest');
			$this->load->model('Mkategori');
			$url_data = "?id_menu={$_POST['id_menu']}&menu={$_POST['kategori']}&submenu={$_POST['sub_kategori']}";
			$data['level'] = $this->session->userdata('level');
			$data['kategori'] = $this->Mkategori->get_category()->result();
			$data['group'] = $this->Mkategori->get_group()->result();
			$data['m_subkategori'] = $this->Mkategori->get_sub_category($_POST['id_menu'])->result();
			$data['nama'] = $this->session->userdata('nama');
			$data['id_user'] = $this->session->userdata('id');
			$data['m_asset'] = $this->Mrequest->for_option('tbl_asset');
			$data['m_pj'] = $this->Mkategori->get_teknisi()->result();
			$this->load->view('navbar/nav_staff', $data);
			$this->load->vars($url_data);
			$this->load->view('staff/add_request/' . $url_data, $data);
		} else {
			$data = [
				'id_user' => $this->session->userdata('id'),
				'username' => $this->session->userdata('username'),
				'user' => htmlspecialchars($this->input->post('user', true)),
				'status' => htmlspecialchars($this->input->post('status', true)),
				'kategori' => htmlspecialchars($this->input->post('kategori', true)),
				'sub_kategori' => htmlspecialchars($this->input->post('sub_kategori', true)),
				'grup' => htmlspecialchars($this->input->post('grup', true)),
				'count_asset' => htmlspecialchars($this->input->post('count_a', true)),
				'subject' =>  htmlspecialchars($this->input->post('subject', true)),
				'body' => $this->input->post('body', true),
				'pj' => htmlspecialchars($this->input->post('pj', true)),
				'asset' => htmlspecialchars($this->input->post('assets', true)),
				'start_date' => htmlspecialchars($this->input->post('start_date', true)),
				'end_date' => htmlspecialchars($this->input->post('end_date', true)),
			];
			$this->db->insert('tbl_request', $data);
			redirect(base_url('staff/list_request'));
		}
	}

	public function update_datarequest()
	{
		$this->load->model('Mrequest');

		$this->form_validation->set_rules('status', 'status', 'required', [
			'required' => 'sla Wajib Diisi.',
		]);

		$this->form_validation->set_rules('kategori', 'kategori', 'required', [
			'required' => 'kategori Wajib Diisi.',
		]);

		$this->form_validation->set_rules('sub_kategori', 'sub_kategori', 'required', [
			'required' => 'sub_kategori Wajib Diisi',
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
				'kategori' => htmlspecialchars($this->input->post('kategori', true)),
				'sub_kategori' => htmlspecialchars($this->input->post('sub_kategori', true)),
				'grup' => htmlspecialchars($this->input->post('grup', true)),
				'count_asset' => htmlspecialchars($this->input->post('count_a', true)),
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
				'kategori' => htmlspecialchars($this->input->post('log_kategori', true)),
				'sub_kategori' => htmlspecialchars($this->input->post('log_subkategori', true)),
				'grup' => htmlspecialchars($this->input->post('log_grup', true)),
				'count_asset' => htmlspecialchars($this->input->post('log_count', true)),
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


	function get_sub_category()
	{
		$this->load->model('Mkategori');
		$data['level'] = $this->session->userdata('level');
		$category_id = $this->input->post('id', TRUE);
		$data = $this->Mkategori->get_sub_category($category_id)->result();
		echo json_encode($data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
