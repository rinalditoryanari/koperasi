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
            $data['judul']      = 'SISTEM INFORMASI KOPERASI NELAYAN SUMBER LAUT MANDIRI';

            $tipe = $this->session->userdata('tipe_akun');
            $asal = $this->session->userdata('asal');

            if ($tipe == 2) {
                $data['lokasi'] = $this->M_akun->cek_koperasi($asal);
            }

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('vmenu', $data);
            $this->load->view('template/footer');
        }
    }
}
