<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_menu extends CI_Controller
{
    //Input:    
    //Output:   
    //Process:  Selft Routing
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_akun');

    }

    //Input:    
    //Output:   
    //Process:  Menampilkan halaman vmenu + template header + template vsidebar + template footer
    public function index()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $asal       = $this->session->userdata('asal');
            $code = $this->session->userdata('code_koperasi');

            $data['lokasi']     = $this->M_akun->cek_koperasi($code);
            if ($data['lokasi']['nama'] == '') {
                $data['judul']      = 'KOPERASI NELAYAN INDONESIA';
            } else {
                $data['judul']      = 'SISTEM INFORMASI '. strtoupper($data['lokasi']['nama']);
            }

            if ($this->session->userdata('tipe_akun') == '2') {
                $data['ikan']       = $this->M_akun->count_ikan($code);
                $data['alat']       = $this->M_akun->count_alat($code);
                $data['nelayan']    = $this->M_akun->count_nelayan($code);
                $data['penjualan']  = $this->M_akun->count_penjualan($code);
                $data['akun']       = $this->M_akun->count_akun($code);
            }

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('vmenu', $data);
            $this->load->view('template/footer');
        }
    }

    
}
