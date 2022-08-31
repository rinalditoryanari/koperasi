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
            $data['all_akun']   = $this->M_akunMaster->allkoperasi();

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('akun/vakun_koperasi', $data);
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

    // public function allkoperasi()
    // {
    //     if ($this->session->userdata("akun_id") == "") {
    //         $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
    //         redirect(site_url('CLogin'));
    //     } else {
    //         $data['all_akun']   = $this->M_akunMaster->allkoperasi();

    //         $this->load->view('template/header');
    //         $this->load->view('template/vsidebar');
    //         $this->load->view('akun/vakun_koperasi', $data);
    //         $this->load->view('template/footer');
    //     }
    // }

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
            $data['code']   = $this->code_koperasi();

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('akun/vform_koperasi', $data);
            $this->load->view('template/footer');
        }
    }

    public function tambah_akun()
    {   
        $tipe = 2;
        $id_nelayan = "";
        $data = array(
            'akun_id'            => $this->input->post('akun_id'),
            'username'          => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'code'         => $this->input->post('code'),
            'tipe'         => $tipe,
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
        $tipe = 2;
        $id_nelayan = "";
        $username = $this->input->post('username');

        $this->db->select('nama');
        $panggilnama = " SELECT
                `nama`
                FROM `koperasi`
                WHERE `nama`='$username'";
        
        $listname = $this->db->query($panggilnama)->num_rows();
        if($listname == 0){
            $data = array(
                'akun_id'       => $this->input->post('akun_id'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'code'          => $this->input->post('code'),
                'tipe'          => $tipe,
                'id_nelayan'    => $id_nelayan,
                'asal'          => $this->input->post('kecamatan'),
    
            );
            $query = $this->db->insert('akun', $data);
    
            $data1 = array(
                'id'            => $this->input->post('id'),
                'nama'          => $this->input->post('username'),
                'ketua'         => $this->input->post('ketua'),
                'code'          => $this->input->post('code'),
                'alamat'        => $this->input->post('alamat'),
                'kecamatan'     => $this->input->post('kecamatan'),
                'kota'          => $this->input->post('kota'),
                'provinsi'      => $this->input->post('provinsi'),
            );
            $query1 = $this->db->insert('koperasi', $data1);
    
            if ($query == true && $query1 == true ) {
                $this->session->set_flashdata('info', 'Data Berhasil Di Simpan');
                redirect('C_akunMaster/');
            } else {
                $this->session->set_flashdata('flash3', 'Prosess Gagal');
                redirect('C_akunMaster/form_koperasi');
            }
        } else {
            $this->session->set_flashdata('flash4', 'Nama telah terdaftar');
            redirect('C_akunMaster/form_koperasi');
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

    public function editkoperasi($code)
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $isi['data'] = $this->M_akunMaster->editkoperasi($code);

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
        $id     =$this->input->post('id');
        $code   = $this->input->post('code');
        $tipe   = 2;
        $data   = array(
            'id'            => $id,
            'nama'          => $this->input->post('username'),
            'code'          => $code,
            'ketua'         => $this->input->post('ketua'),
            'alamat'        => $this->input->post('alamat'),
            'kecamatan'     => $this->input->post('kecamatan'),
            'kota'          => $this->input->post('kota'),
            'provinsi'      => $this->input->post('provinsi'),
        );
        $query = $this->M_akunMaster->updatekoperasi($code, $data);

        $akun_id = $this->input->post('akun_id');
        $data1 = array(
            'akun_id'       => $akun_id,
            'username'      => $this->input->post('username'),
            'password'      => $this->input->post('password'),
            'code'          => $code,
            'tipe'          => $tipe,
            'id_nelayan'    => '',
            'asal'          => $this->input->post('kecamatan'),
        );
        $query1 = $this->M_akunMaster->update($code, $data1);

        if ($query == true AND $query1 == true) {
            $this->session->set_flashdata('info', 'Data Berhasil Di Update');
            redirect('C_akunMaster/');
        } else {
            $this->session->set_flashdata('flash3', 'Proses Gagal');
            redirect('C_akunMaster/vformedit_koperasi/'.strval($code));
        }
    }


    public function hapus_akun($id)
    {
        $a = $this->M_akunMaster->hapus_akun($id);
        redirect('C_akunMaster');
    }

    public function hapus_akunkoperasi($code)
    {
        $a = $this->M_akunMaster->hapus_akunkoperasi($code);
        redirect('C_akunMaster/');
    }

    //Input:    
    //Output:   $code -> code 
    //Process:  generate code 
    public function code_koperasi()
    {
        $bulan = date('m');
        $tahun = substr(date('Y'), 2);
        $bulan_tahun = $bulan . $tahun;

        $profcode  = "  SELECT MAX(CAST(SUBSTR(code,10,4) AS UNSIGNED)) AS guest_code  FROM `koperasi` 
        WHERE SUBSTR(code,6,4) = '$bulan_tahun'";

        $prof_code = $this->db->query($profcode)->result_array();
        $cd        = json_encode($prof_code[0]['guest_code']);
        $code      = json_decode($cd) + 1;

        if ($code > 0) {
            if (strlen($code) == 1) {
                $final_code = "000" . $code;
            } else if (strlen($code) == 2) {
                $final_code = "00" . $code;
            } else if (strlen($code) == 3) {
                $final_code = "0" . $code;
            } else if (strlen($code) == 4) {
                $final_code = $code;
            }
        } else {
            $final_code = "0001";
        }
        $code = 'SUPER' . $bulan_tahun . $final_code;
        // echo $code;
        // die();
        return $code;
    }
}
