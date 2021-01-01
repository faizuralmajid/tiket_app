<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function logout()
    {
        $this->session->unset_userdata('arr_login');
        $this->session->set_flashdata('success-logout', 'Berhasil!');
        redirect(base_url('auth'));
    }

    public function error()
    {
        $this->load->view("cli/error_404");
    }

}