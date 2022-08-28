<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_akunMaster extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_akunMaster');
    }

    public function index()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $data['all_akun']   = $this->M_akunMaster->index();

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('akun/vakun', $data);
            $this->load->view('template/footer');
        }
    }

    public function alluser()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $data['all_akun']   = $this->M_akunMaster->alluser();

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('akun/vakun', $data);
            $this->load->view('template/footer');
        }
    }

    public function allkoperasi()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $data['all_akun']   = $this->M_akunMaster->allkoperasi();

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('akun/vakun_koperasi', $data);
            $this->load->view('template/footer');
        }
    }

    public function form_akun()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $data['list_nelayan'] = $this->M_akunMaster->list_nelayan();
            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('akun/vform_akun', $data);
            $this->load->view('template/footer');
        }
    }

    public function form_koperasi()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('akun/vform_koperasi');
            $this->load->view('template/footer');
        }
    }

    public function tambah_akun()
    {   
        $tipe = 2;
        $id_nelayan = "";
        $data = array(
            'akun_id'       => $this->input->post('akun_id'),
            'username'      => $this->input->post('username'),
            'password'      => $this->input->post('password'),
            'code'          => $this->input->post('code'),
            'tipe'          => $tipe,
            'id_nelayan'    => $id_nelayan,
            'asal'          => $this->input->post('asal'),

        );
        $query = $this->db->insert('akun', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil Di Simpan');
            redirect('C_akunMaster');
        }
    }

    public function tambah_koperasi()
    {   
        // $id = 2;
        $data = array(
            'id'            => $this->input->post('id'),
            'nama'          => $this->input->post('nama'),
            'kecamatan'     => $this->input->post('kecamatan'),
            'alamat'        => $this->input->post('alamat'),
            'ketua'         => $this->input->post('ketua'),

        );
        $query = $this->db->insert('koperasi', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil Di Simpan');
            redirect('C_akunMaster/allkoperasi');
        }
    }

    public function edit($akun_id)
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $isi['data'] = $this->M_akunMaster->edit($akun_id);
            $isi['list_nelayan'] = $this->M_akunMaster->list_nelayan();
            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('akun/vformedit_akun', $isi);
            $this->load->view('template/footer');
        }
    }

    public function editkoperasi($akun_id)
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $isi['data'] = $this->M_akunMaster->editkoperasi($akun_id);
            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('akun/vformedit_koperasi', $isi);
            $this->load->view('template/footer');
        }
    }

    public function update()
    {
        $akun_id = $this->input->post('akun_id');
        $id_nelayan = "";
        $tipe = 2;
        $data = array(
            'akun_id'       => $this->input->post('akun_id'),
            'username'      => $this->input->post('username'),
            'password'      => $this->input->post('password'),
            'code'          => $this->input->post('code'),
            'tipe'          => $tipe,
            'id_nelayan'    => $id_nelayan,

        );
        $query = $this->M_akunMaster->update($akun_id, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil Di Update');
            redirect('C_akunMaster');
        }
    }

    public function updatekoperasi()
    {
        $id = $this->input->post('id');
        $id_nelayan = "";
        $tipe = 2;
        $data = array(
            'id'             => $this->input->post('id'),
            'nama'           => $this->input->post('nama'),
            'kecamatan'      => $this->input->post('kecamatan'),
            'alamat'         => $this->input->post('alamat'),
            'ketua'          => $this->input->post('ketua'),


        );
        $query = $this->M_akunMaster->updatekoperasi($id, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil Di Update');
            redirect('C_akunMaster/allkoperasi');
        }
    }


    public function hapus_akun($id)
    {
        $a = $this->M_akunMaster->hapus_akun($id);
        redirect('C_akunMaster');
    }

    public function hapus_akunkoperasi($id)
    {
        $a = $this->M_akunMaster->hapus_akunkoperasi($id);
        redirect('C_akunMaster/allkoperasi');
    }
}
