<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_ikanMaster extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_ikanMaster');
       
    }

    public function index()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $data['all_ikan']   = $this->M_ikanMaster->index(10, 1);

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('ikan/vikan', $data);
            $this->load->view('template/footer');
            $this->load->library('pagination');


            $config['base_url'] = 'https://localhost/Koperasinelayan/C_ikan/index';
            $config['total_rows'] = $this->M_ikanMaster->count_allikan();
            $config['per_page'] = 10;

            $this->pagination->initialize($config);

            $data['start'] = $this->uri->segment(3);
            $data['ikan'] = $this->M_ikanMaster->index($config['per_page'], $data['start']);

           


        }
    }
}