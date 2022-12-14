<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_alatbahan extends CI_Controller
{
    //Input:    
    //Output:   
    //Process:  self routing
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_alatbahan');
    }

    //Input:    func M_alatbahan index
    //Output:   
    //Process:  Tampilkan halaman valatbahan
    public function index()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $data['all_alatbahan']   = $this->M_alatbahan->index();

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('alatbahan/v_alatbahan', $data);
            $this->load->view('template/footer');
        }
    }

    //Input:    
    //Output:   
    //Process:  Tampilkan halaman vform_alatbahan
    public function form_alatbahan()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('alatbahan/vform_alatbahan');
            $this->load->view('template/footer');
        }
    }

    //Input:    post id_alat, nama, jenis, satuan, harga_per_unit
    //Output:   
    //Process:  INSERT data alat ke tbale alat
    public function simpan_alatbahan()
    {
        $daerah = $this->session->userdata('asal');
        $data = array( 
            'id_alat'                    => $this->input->post('id_alat'),
            'nama'                       => $this->input->post('nama'),
            'jenis'                      => $this->input->post('jenis'),
            'satuan'                     => $this->input->post('satuan'),
            'harga_per_unit'             => $this->input->post('harga_per_unit'),
            'lokasi'                     => $daerah
            // 'created_date'               => $this->input->post('created_date'),
            // 'created_by'                 => $this->input->post('created_by'),
            // 'modified_date'              => $this->input->post('modified_date'),
            // 'modified_by'                => $this->input->post('modified_by'),
            
            
            
          
        );
        $query = $this->db->insert('alat', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil Di Simpan');
            redirect('C_alatbahan');
        }
    }

    //Input:    $id -> id alat
    //          func M_alat edit()
    //Output:   
    //Process:  Tampilakn halamn vformedit_alatbahan
    public function edit($id)
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $isi['data'] = $this->M_alatbahan->edit($id);
            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('alatbahan/vformedit_alatbahan', $isi);
            $this->load->view('template/footer');
        }
    }

    //Input:    post id_alat, nama, jenis, satuan, harga_per_unit, created_date, modified_date, created_by, modified_by
    //Output:   
    //Process:  update di func M_alatbahan update()
    public function update()
    {
        $id_alat_bahan = $this->input->post('id_alat');
        $data = array(
                'id_alat'       => $this->input->post('id_alat'),
                'nama'          => $this->input->post('nama'),
                'jenis'         => $this->input->post('jenis'),
                'satuan'        => $this->input->post('satuan'),
                'harga_per_unit'=> $this->input->post('harga_per_unit'),
                'created_date'  => $this->input->post('created_date'),
                'modified_date' => $this->input->post('modified_date'),
                'created_by'    => $this->input->post('created_by'),
                'modified_by'   => $this->input->post('modified_by'),
                
            );
        $query = $this->M_alatbahan->update($id_alat_bahan, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil Di Update');
            redirect('C_alatbahan');
        }
    }

    //Input:    $id -> id alat
    //Output:   
    //Process:  hapus di func M_alatbahan hapus_alatbahan()
    public function hapus_alatbahan($id)
    {
        $a = $this->M_alatbahan->hapus_alatbahan($id);
        redirect('C_alatbahan');
    }
}