<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $cek = $this->session->userdata('arr_login');
		if (empty($cek)) {
			redirect('welcome/admin');
            return false;
		}
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->library('pdf');
    }

    public function index()
    {
         $this->load->view('navbar/nav');
         $this->load->view('admin/index');
    }

    // Management Barang-----------------------------------------

    public function data_barang()
    {
        $this->load->model('m_barang');
        $this->load->view('navbar/nav');
        $data['user'] = $this->m_barang->tampil_data()->result();
        $this->load->view('admin/data_barang', $data);

    }

    public function detail_barang($id)
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_barang');
        $where = array('id' => $id);
        $detail = $this->m_barang->detail_barang($id);
        $data['detail'] = $detail;
        $this->load->view('admin/detail_barang', $data);
    }

 

    public function add_barang()
    {
        $config['upload_path']          = './uploads_barang/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;

		$config['encrypt_name']			= TRUE;
        $this->load->library('upload', $config);
        
        $this->form_validation->set_rules('namabarang', 'Namabarang', 'required|trim|min_length[4]', [
            'required' => 'Harap isi Nama Barang.',
            'min_length' => 'Nama Barang terlalu pendek.',
        ]);

        $this->form_validation->set_rules('nomerspk', 'nomerspk', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Nomer SPK.',
            'min_length' => 'Nomer SPK terlalu pendek.',
        ]);

        
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Tanggal.',
            'min_length' => 'Tanggal terlalu pendek.',
        ]);

        $this->form_validation->set_rules('volume', 'volume', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom Volume.',
            'min_length' => 'Volume terlalu pendek.',
        ]);

        $this->form_validation->set_rules('satuan', 'satuan', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Satuan.',
            'min_length' => 'Satuan terlalu pendek.',
        ]);

        $this->form_validation->set_rules('lokasi', 'lokasi', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Lokasi.',
            'min_length' => 'Lokasi terlalu pendek.',
        ]);

        $this->form_validation->set_rules('harga', 'harga', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Harga.',
            'min_length' => 'Harga terlalu pendek.',
        ]);

        $this->form_validation->set_rules('koordinator', 'koordinator', 'required|trim|min_length[4]', [
            'required' => 'Koordinator isi kolom Harga.',
            'min_length' => 'Koordinator terlalu pendek.',
        ]);

        if ($this->form_validation->run() == false || ! $this->upload->do_upload('berkas')) {
        
          

            $error = array('error' => $this->upload->display_errors());
       
            $this->load->view('admin/add_barang',$error);
        } else {
            

            $data = [
                'namabarang' => htmlspecialchars($this->input->post('namabarang', true)),
                'nospk' => htmlspecialchars($this->input->post('nomerspk', true)),
                'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
                'volume' => htmlspecialchars($this->input->post('volume', true)),
                'satuan' => htmlspecialchars($this->input->post('satuan', true)),
                'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
                'koordinator' => htmlspecialchars($this->input->post('koordinator', true)),
                'harga' => htmlspecialchars($this->input->post('harga', true)),
                'kegiatan' => htmlspecialchars($this->input->post('kegiatan', true)),
                'kondisi' => htmlspecialchars($this->input->post('kondisi', true)),
                'gambar' => $this->upload->data("file_name"),
            ];

            $this->db->insert('tbl_barang', $data);

            $this->session->set_flashdata('success-reg', 'Berhasil');
            redirect(base_url('admin/data_barang'));

        }

    }

    
    public function import_barang()
    {
        $fileName = $_FILES["file"]["tmp_name"];
    
        if ($_FILES["file"]["size"] > 0) {
            
            $file = fopen($fileName, "r");
            
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                $data = [
                    'namabarang' => $column[0],
                    'nospk' => $column[1],
                    'tanggal' => $column[2],
                    'kegiatan' => $column[3],
                    'volume' => $column[4],
                    'satuan' => $column[5],
                    'harga' => $column[6],
                    'koordinator' => $column[7],
                    'lokasi' => $column[8],
                    'kondisi' => $column[9],      
                ];
                
                $this->db->insert('tbl_barang', $data);

            }
            
        }
        $this->session->set_flashdata('success-reg', 'Berhasil');
        redirect(base_url('admin/data_barang'));
    }

    public function update_barang($id)
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_barang');
        $where = array('id' => $id);
        $data['user'] = $this->m_barang->update_barang($where, 'tbl_barang')->result();
        $this->load->view('admin/update_barang', $data);
    }

    public function edit_barang(){
        $config = array(
            'upload_path'=>'./uploads_barang/',
            'allowed_types'=>'jpg|png|jpeg',
            'max_size'=>2086
            );
        $this->load->model('m_barang');
        $id = $this->input->post('id');
        $namabarang = $this->input->post('namabarang');
        $nomorspk = $this->input->post('nomerspk');
        $tanggal = $this->input->post('tanggal');
        $volume = $this->input->post('volume');
        $satuan = $this->input->post('satuan');
        $lokasi = $this->input->post('lokasi');
        $harga = $this->input->post('harga');
        $koordinator = $this->input->post('koordinator');
        $kegiatan = $this->input->post('kegiatan');
        $kondisi = $this->input->post('kondisi');

        $data_kode = array('id'=>$id);
        $foto= $this->db->get_where('tbl_barang',$data_kode);
        if($foto->num_rows()>0){
            $pros=$foto->row();
            $name=$pros->gambar;
           
            if(file_exists($lok=FCPATH.'/uploads_barang/'.$name)){
              unlink($lok);
            }
       
            $this->load->library('upload',$config);
            if($this->upload->do_upload('gambar')){
                $data = array(
                    'namabarang' => $namabarang,
                    'nospk' => $nomorspk,
                    'tanggal' => $tanggal,
                    'volume' => $volume,
                    'satuan' => $satuan,
                    'lokasi' => $lokasi,
                    'harga' => $harga,
                    'koordinator' => $koordinator,
                    'kegiatan' => $kegiatan,
                    'kondisi' => $kondisi,  
                    'gambar' => $this->upload->data("file_name"),
                );
            }else{
                $data = array(
                    'namabarang' => $namabarang,
                    'nospk' => $nomorspk,
                    'tanggal' => $tanggal,
                    'volume' => $volume,
                    'satuan' => $satuan,
                    'lokasi' => $lokasi,
                    'harga' => $harga,
                    'koordinator' => $koordinator,
                    'kegiatan' => $kegiatan,
                    'kondisi' => $kondisi, 
                );
            }

            $where = array(
                'id' => $id,
            );

        $this->m_barang->update_data($where, $data, 'tbl_barang');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/data_barang');
        }else{
         redirect('admin/data_barang');
        }

    }

    public function delete_barang($id)
    {
        $this->load->model('m_barang');
        $where = array('id' => $id);
        $this->m_barang->delete_barang($where, 'tbl_barang');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/data_barang');
    }

    // END Management Barang-----------------------------------------

    // manajemen Pegawai

    public function data_pegawai()
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_pegawai');
        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_pegawai->tampil_data()->result();
        $this->load->view('admin/data_pegawai', $data);

    }

    public function add_pegawai()
    {

        $this->form_validation->set_rules('nip', 'nip', 'required|trim|min_length[4]', [
            'required' => 'Harap isi NIP.',
            'min_length' => 'NIP terlalu pendek.',
        ]);

        $this->form_validation->set_rules('namalengkap', 'namalengkap', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Nama Lengkap.',
            'min_length' => 'Nama Lengkap terlalu pendek.',
        ]);

        
        $this->form_validation->set_rules('username', 'username', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Username.',
            'min_length' => 'Username terlalu pendek.',
        ]);

        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom Password.',
            'min_length' => 'Password terlalu pendek.',
        ]);

        $this->form_validation->set_rules('email', 'email', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Email.',
            'min_length' => 'Email terlalu pendek.',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('navbar/nav');
            $this->load->view('admin/add_pegawai');
        } else {

            $data = [
                'nip' => htmlspecialchars($this->input->post('nip', true)),
                'namalengkap' => htmlspecialchars($this->input->post('namalengkap', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'email' => htmlspecialchars($this->input->post('email', true)),
            ];

            $this->db->insert('tbl_pegawai', $data);

            $this->session->set_flashdata('success-reg', 'Berhasil');
            redirect(base_url('admin/data_pegawai'));

        }

    }

    public function detail_pegawai($nip)
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_pegawai');
        $where = array('nip' => $nip);
        $detail = $this->m_pegawai->detail_pegawai($nip);
        $data['detail'] = $detail;
        $this->load->view('admin/detail_pegawai', $data);
    }

    public function update_pegawai($nip)
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_pegawai');
        $where = array('nip' => $nip);
        $data['user'] = $this->m_pegawai->update_pegawai($where, 'tbl_pegawai')->result();
        $this->load->view('admin/update_pegawai', $data);
    }

    public function edit_pegawai()
    {
        $this->load->model('m_pegawai');
        $id = $this->input->post('id');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('namalengkap');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        
        if($password == "Terenkripsi"){
            $data = array(
                'namalengkap' => $nama,
                'email' => $email,
                'nip' => $nip,
                'username' => $username,
            );
        }else{
            $data = array(
                'namalengkap' => $nama,
                'email' => $email,
                'nip' => $nip,
                'username' => $username,
                'password' => $password,
            );
        }
        

        $where = array(
            'id' => $id,
        );

        $this->m_pegawai->update_data($where, $data, 'tbl_pegawai');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/data_pegawai');

    }

    public function delete_pegawai($nip)
    {
        $this->load->model('m_pegawai');
        $where = array('nip' => $nip);
        $this->m_pegawai->delete_pegawai($where, 'tbl_pegawai');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/data_pegawai');
    }

    //--------------END Manajemen Pegawai

    //manajemen Peminjaman

    public function data_peminjaman()
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_peminjaman');

        $data['user'] = $this->m_peminjaman->tampil_data()->result();
        $this->load->view('admin/data_peminjaman', $data);

    }

    public function delete_peminjaman($id)
    {
        $this->load->model('m_materi');
        $where = array('id' => $id);
        $this->m_materi->delete_materi($where, 'materi');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/data_materi');
    }

    public function add_peminjaman()
    {
        
        $this->form_validation->set_rules('tgl_pinjam', 'tgl_pinjam', 'required|trim|min_length[4]|xss_clean', [
            'required' => 'Harap isi kolom Tanggal Pinjam.',
            'min_length' => 'Tanggal terlalu pendek.',
        ]);

        $this->form_validation->set_rules('kebutuhan', 'kebutuhan', 'required|trim|min_length[1]|xss_clean', [
            'required' => 'Harap isi kolom Kebutuhan.',
            'min_length' => 'Kebutuhan terlalu pendek.',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('navbar/nav');
            $this->load->model('m_pegawai');
            $this->load->model('m_barang');
            $data['list_pegawai'] = $this->m_pegawai->for_option();
            $data['list_barang'] = $this->m_barang->for_option();
            $this->load->view('admin/add_peminjaman',$data);
        } else {
            $cek_login = $this->session->userdata('arr_login');
            $cek_role = explode('*&*&*', $cek_login);
            $image = $this->input->post('image');
            $image = str_replace('data:image/jpeg;base64,','', $image);
            $image = base64_decode($image);
            $filename = 'image_'.time().'.png';
            file_put_contents(FCPATH.'/uploads/'.$filename,$image);
            $data = [
                'id_barang' => htmlspecialchars($this->input->post('id_barang', true)),
                'id_pegawai' => htmlspecialchars($this->input->post('id_pegawai', true)),
                'tanggal_pinjam' => htmlspecialchars($this->input->post('tgl_pinjam', true)),
                'kebutuhan' => htmlspecialchars($this->input->post('kebutuhan', true)),
                'foto_pinjam' => $filename,
                'id_admin' => $cek_role[2], 
            ];

            $res=$this->db->insert('tbl_peminjaman', $data);

            echo json_encode($res);

        }

    }

    public function add_kembalikan($id)
    {
        $this->form_validation->set_rules('tgl_pinjam', 'tgl_pinjam', 'required|trim|min_length[4]|xss_clean', [
            'required' => 'Harap isi kolom Tanggal Pinjam.',
            'min_length' => 'Tanggal terlalu pendek.',
        ]);

        $this->form_validation->set_rules('kebutuhan', 'kebutuhan', 'required|trim|min_length[1]|xss_clean', [
            'required' => 'Harap isi kolom Kebutuhan.',
            'min_length' => 'Kebutuhan terlalu pendek.',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('navbar/nav');
            $this->load->model('m_peminjaman');
            $data['data_pinjam']=$this->m_peminjaman->kembali_Peminjaman($id);
            $this->load->view('admin/add_kembalikan',$data);
        } else {

            $id_pinjam = $this->input->post('id', true);
            $tgl_kembali = $this->input->post('tgl_kembali', true);
            $image = $this->input->post('image');
            $image = str_replace('data:image/jpeg;base64,','', $image);
            $image = base64_decode($image);
            $filename = 'image_'.time().'.png';
            file_put_contents(FCPATH.'/uploads/'.$filename,$image);
            $data = array(
                'tanggal_kembali' => $tgl_kembali,
                'foto_kembali' => $filename,
            );
            $where = array(
                'id' => $id_pinjam,
            );
    
            $this->m_peminjaman->update_data($where, $data, 'tbl_peminjaman');
            $this->session->set_flashdata('success-reg', 'Berhasil');
            redirect(base_url('admin/data_peminjaman'));

        }
    }

    public function edit_peminjaman()
    {
        $this->load->model('m_peminjaman');
        $id = $this->input->post('id');
        $image = $this->input->post('image');
        $kembali = $this->input->post('tanggal_kembali',true);
		$image = str_replace('data:image/jpeg;base64,','', $image);
		$image = base64_decode($image);
		$filename = 'image_'.time().'.png';
		file_put_contents(FCPATH.'/uploads/'.$filename,$image);
        $data = array(
            'tanggal_kembali' => $kembali,
            'foto_kembali' => $filename,
        );

        $where = array(
            'id' => $id,
        );

        $res = $this->m_peminjaman->update_data($where, $data, 'tbl_peminjaman');
        echo json_encode($res);


    }

    public function data_pengembalian()
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_peminjaman');

        $data['user'] = $this->m_peminjaman->tampil_data_pengembalian()->result();
        $this->load->view('admin/data_pengembalian', $data);

    }

    public function detail_kembalikan($id)
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_peminjaman');
        $detail = $this->m_peminjaman->detail_peminjaman($id);
        $data['detail'] = $detail;
        $this->load->view('admin/detail_kembalikan', $data);
    }


    //END MANAJEMEN

    //Export

    public function export_pegawai()
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_pegawai');
        $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_pegawai->tampil_data()->result();
        $this->load->view('admin/export_pdfpegawai', $data);


    }

    public function export_barang()
    {
        $this->load->model('m_barang');
        $this->load->view('navbar/nav');
        $data['user'] = $this->m_barang->tampil_data()->result();
        $this->load->view('admin/export_pdfbarang', $data);

    }

    public function export_peminjaman()
    {
        $this->load->view('navbar/nav');
        $this->load->model('m_peminjaman');

        $data['user'] = $this->m_peminjaman->tampil_data()->result();
        $this->load->view('admin/export_pdfpeminjaman', $data);

    }

    public function pdf_export_peg(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(250,7,'Pusat Teknologi Elektronika (TIEM - BPPT)',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(250,7,'Daftar Pegawai Aktif di Unit Pusat Teknologi Elektronika',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(100,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(45,6,'NIP',1,0);
        $pdf->Cell(85,6,'Nama Pegawai',1,0);
        $pdf->Cell(40,6,'Username',1,0);
        $pdf->Cell(80,6,'Email Pegawai',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('tbl_pegawai')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(45,6,$row->nip,1,0);
            $pdf->Cell(85,6,$row->namalengkap,1,0);
            $pdf->Cell(40,6,$row->username,1,0);
            $pdf->Cell(80,6,$row->email,1,1); 
        }
        $pdf->Output();
    }

    public function pdf_export_barang(){
        $pdf = new FPDF('l','mm','a4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,7,'Pusat Teknologi Elektronika (TIEM - BPPT)',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'Daftar Pengadaan Barang di Unit Pusat Teknologi Elektronika',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'Nama Barang',1,0);
        $pdf->Cell(30,6,'NO SPK',1,0);
        $pdf->Cell(30,6,'Tanggal',1,0);
        $pdf->Cell(30,6,'Kegiatan',1,0);
        $pdf->Cell(20,6,'Volume',1,0);
        $pdf->Cell(15,6,'Satuan',1,0);
        $pdf->Cell(35,6,'Harga',1,0);
        $pdf->Cell(40,6,'Koordinator',1,0);
        $pdf->Cell(25,6,'Lokasi',1,0);
        $pdf->Cell(25,6,'Kondisi',1,1);
        
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('tbl_barang')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(30,6,$row->namabarang,1,0);
            $pdf->Cell(30,6,$row->nospk,1,0);
            $pdf->Cell(30,6,$row->tanggal,1,0);
            $pdf->Cell(30,6,$row->kegiatan,1,0);
            $pdf->Cell(20,6,$row->volume,1,0);
            $pdf->Cell(15,6,$row->satuan,1,0);
            $pdf->Cell(35,6,$row->harga,1,0);
            $pdf->Cell(40,6,$row->koordinator,1,0);
            $pdf->Cell(25,6,$row->lokasi,1,0);
            $pdf->Cell(25,6,$row->kondisi,1,1);
        }
        $pdf->Output();
    }

    public function pdf_export_peminjaman(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(180,7,'Pusat Teknologi Elektronika (TIEM - BPPT)',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(180,7,'Daftar Barang Peminjaman di Unit Pusat Teknologi Elektronika',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(100,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,6,'Nama Peminjam',1,0);
        $pdf->Cell(40,6,'Nama Barang',1,0);
        $pdf->Cell(30,6,'Tanggal Pinjam',1,0);
        $pdf->Cell(30,6,'Tanggal Kembali',1,0);
        $pdf->Cell(100,6,'Kebutuhan',1,0);
        $pdf->Cell(30,6,'Admin [Acc]',1,0);
        $pdf->SetFont('Arial','',10);
        $this->db->select('tbl_pegawai.namalengkap,tbl_barang.namabarang,tbl_peminjaman.tanggal_pinjam,tbl_peminjaman.tanggal_kembali,tbl_peminjaman.kebutuhan,tbl_peminjaman.id,admin.username');
        $this->db->from('tbl_peminjaman');
        $this->db->join('tbl_pegawai', 'tbl_peminjaman.id_pegawai = tbl_pegawai.nip');
        $this->db->join('tbl_barang', 'tbl_peminjaman.id_barang = tbl_barang.id');     
        $this->db->join('admin', 'tbl_peminjaman.id_admin = admin.id');   
        $this->db->where('tbl_peminjaman.tanggal_kembali =', null);   
        $mahasiswa = $this->db->get()->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(40,6,$row->namalengkap,1,0);
            $pdf->Cell(40,6,$row->namabarang,1,0);
            $pdf->Cell(40,6,$row->tanggal_pinjam,1,0);
            $pdf->Cell(30,6,$row->tanggal_kembali,1,0);
            $pdf->Cell(100,6,$row->kebutuhan,1,0);
            $pdf->Cell(40,6,$row->username,1,1);; 
        }
        $pdf->Output();
    }

    public function pdf_bast_peminjaman($n_adm,$nip_adm,$notel_adm,$n_pemn,$nip_pemn,$notel_pemn,$tanggal){
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(180,7,'Pusat Teknologi Elektronika (TIEM - BPPT)',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(180,7,'Berita Acara Serah Terima',0,1,'C');
        $pdf->Cell(180,7,'Peminjaman Barang',0,1,'C');
        $pdf->Cell(180,7,'________________________________________________________',0,1,'C');
        $pdf->Cell(180,7,'',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(100,7,'',0,1);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(180,7,'Pada Hari Ini,Senin Tanggal 12 Bulan 1 tahun 2020',0,1);
        $pdf->Cell(100,7,'',0,1);
        $pdf->Cell(180,7,'Yang Tercetak Dibawah Ini : ',0,1);
        $pdf->Cell(40,6,'1. Nama        :',0,0);
        $pdf->Cell(40,6,$n_adm,0,1);
        $pdf->Cell(40,6,'    NIP          :',0,0);
        $pdf->Cell(40,6,$nip_adm,0,1);
        $pdf->Cell(30,6,'    No Telepon   :',0,0);
        $pdf->Cell(40,6,$notel_adm,0,1);
        $pdf->Cell(30,6,'    Sebagai Pihak yang menyerahkan, selanjutnya disebut PIHAK PERTAMA, ',0,1);
        $pdf->Cell(40,6,'1. Nama        :',0,0);
        $pdf->Cell(40,6,$n_pemn,0,1);
        $pdf->Cell(40,6,'    NIP          :',0,0);
        $pdf->Cell(40,6,$nip_pemn,0,1);
        $pdf->Cell(30,6,'    No Telepon   :',0,0);
        $pdf->Cell(40,6,$notel_pemn,0,1);
        $pdf->Cell(30,6,'    Sebagai Pihak yang meerima, selanjutnya disebut PIHAK KEDUA, ',0,1);
        $pdf->Cell(100,7,'',0,1);
        $pdf->Cell(30,6,'PIHAK PERTAMA, menyerahkan sebuah ..........  kepada PIHAK KEDUA, dan PIHAK KEDUA telah menerima ',0,1);
        $pdf->Cell(30,6,'sebuah untuk keperluan ................. ',0,1);
        $pdf->Output(__DIR__."/../../bast_peminjaman/BAST_peminjaman_".rand(0,120)."_".date('d-M-Y').".pdf", 'F');
    }

    public function pdf_bast_pengembalian(){
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(180,7,'Pusat Teknologi Elektronika (TIEM - BPPT)',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(180,7,'Berita Acara Serah Terima',0,1,'C');
        $pdf->Cell(180,7,'Pengembalian Barang',0,1,'C');
        $pdf->Cell(180,7,'________________________________________________________',0,1,'C');
        $pdf->Cell(180,7,'',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(100,7,'',0,1);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(180,7,'Pada Hari Ini,Senin Tanggal 12 Bulan 1 tahun 2020',0,1);
        $pdf->Cell(100,7,'',0,1);
        $pdf->Cell(180,7,'Yang Tercetak Dibawah Ini : ',0,1);
        $pdf->Cell(40,6,'1. Nama',0,1);
        $pdf->Cell(40,6,'    NIP',0,1);
        $pdf->Cell(30,6,'    No Telepon',0,1);
        $pdf->Cell(30,6,'    Sebagai Pihak yang menyerahkan, selanjutnya disebut PIHAK PERTAMA, ',0,1);
        $pdf->Cell(100,7,'',0,1);
        $pdf->Cell(40,6,'2. Nama',0,1);
        $pdf->Cell(40,6,'    NIP',0,1);
        $pdf->Cell(30,6,'    No Telepon',0,1);
        $pdf->Cell(30,6,'    Sebagai Pihak yang meerima, selanjutnya disebut PIHAK KEDUA, ',0,1);
        $pdf->Cell(100,7,'',0,1);
        $pdf->Cell(30,6,'PIHAK PERTAMA, menyerahkan sebuah ..........  kepada PIHAK KEDUA, dan PIHAK KEDUA telah menerima ',0,1);
        $pdf->Cell(30,6,'sebuah untuk keperluan ................. ',0,1);


        $this->db->select('tbl_pegawai.namalengkap,tbl_barang.namabarang,tbl_peminjaman.tanggal_pinjam,tbl_peminjaman.tanggal_kembali,tbl_peminjaman.kebutuhan,tbl_peminjaman.id,admin.username');
        $this->db->from('tbl_peminjaman');
        $this->db->join('tbl_pegawai', 'tbl_peminjaman.id_pegawai = tbl_pegawai.nip');
        $this->db->join('tbl_barang', 'tbl_peminjaman.id_barang = tbl_barang.id');     
        $this->db->join('admin', 'tbl_peminjaman.id_admin = admin.id');   
        $this->db->where('tbl_peminjaman.tanggal_kembali =', null);   
        $mahasiswa = $this->db->get()->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(40,6,$row->namalengkap,1,0);
            $pdf->Cell(40,6,$row->namabarang,1,0);
            $pdf->Cell(40,6,$row->tanggal_pinjam,1,0);
            $pdf->Cell(30,6,$row->tanggal_kembali,1,0);
            $pdf->Cell(100,6,$row->kebutuhan,1,0);
            $pdf->Cell(40,6,$row->username,1,1);; 
        }
        $pdf->Output(__DIR__."/../../bast_pengembalian/BAST_pengembalian_".rand(10,100)."_".date('d-M-Y').".pdf", 'F');
    }
    
}