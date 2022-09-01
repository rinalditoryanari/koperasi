<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_akunMaster extends ci_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index($isall = true, $limit = null, $offset = null)
    {
        if ($this->session->userdata('client_id')) {
            $ses_client = $this->session->userdata('client_id');
        } else {
            $ses_client = $this->session->userdata('ID');
        }

        $keyword ='';
        $keyword = $keyword ? str_replace("'", "\'", $this->input->get('table_search')):"";

        $where = array();
        if (!empty($this->input->get('table_search'))) {
            $where[] = " AND username LIKE '%" . $keyword . "%'";
        }

        $is_limit = true;

        isLimit:

        $stringwhere = implode(" AND ", $where);
        $lokasi = $this->session->userdata('asal');

        $query = "  SELECT
                            a.`akun_id`, a.`username`, a.`password`, a.`code`, a.`tipe`,a.`asal`, b.`nama` as nama_nelayan
                        FROM `akun` a
                        LEFT JOIN `nelayan` b on a.`id_nelayan` = b.`id`
                        where a.`tipe`= '2'
                        $stringwhere 
                        ORDER BY a.`akun_id` DESC;";

        // echo $query;
        // die();
        if ($is_limit) {
            if (!$isall) {
                $query .= ' LIMIT ' . $limit . " offset " . $offset;
            }
        }

        if ($is_limit) {
            $res = $this->db->query($query)->result_array();
            $is_limit = false;
            goto isLimit;
        }

        $count = $this->db->query($query)->num_rows();

        $data = array(
            "total" => $count,
            "data" => $res
        );
        // var_dump($data);
        // die;
        return $data;
    }

    public function alluser($isall = true, $limit = null, $offset = null)
    {
        if ($this->session->userdata('client_id')) {
            $ses_client = $this->session->userdata('client_id');
        } else {
            $ses_client = $this->session->userdata('ID');
        }
        $keyword ='';
        $keyword = $keyword ? str_replace("'", "\'", $this->input->get('table_search')):"";

        $where = array();
        if (!empty($this->input->get('table_search'))) {
            $where[] = " AND username LIKE '%" . $keyword . "%'";
        }

        $is_limit = true;

        isLimit:

        $stringwhere = implode(" AND ", $where);
        $lokasi = $this->session->userdata('asal');

        $query = "  SELECT
                            a.`akun_id`, a.`username`, a.`password`, a.`code`, a.`tipe`,a.`asal`, b.`nama` as nama_nelayan
                        FROM `akun` a
                        LEFT JOIN `nelayan` b on a.`id_nelayan` = b.`id`
                        where a.`tipe`!= '2' AND a.`tipe`!= '3' 
                        $stringwhere 
                        ORDER BY a.`akun_id` DESC;";

        // echo $query;
        // die();
        if ($is_limit) {
            if (!$isall) {
                $query .= ' LIMIT ' . $limit . " offset " . $offset;
            }
        }

        if ($is_limit) {
            $res = $this->db->query($query)->result_array();
            $is_limit = false;
            goto isLimit;
        }

        $count = $this->db->query($query)->num_rows();

        $data = array(
            "total" => $count,
            "data" => $res
        );
        // var_dump($data);
        // die;
        return $data;
    }

    // public function hapus_akun($akun_id)
    // {
    //     $querylog1   = "DELETE FROM akun WHERE akun_id='$akun_id';";
    //     $run2       = $this->db->query($querylog1);
      
    //     // $this->session->set_flashdata('flash', 'Berhasil Dihapus');
    // }
    public function hapus_akunkoperasi($code)
    {
        $querylog1  = "DELETE FROM koperasi WHERE code='$code';";
        $run1       = $this->db->query($querylog1);
        $querylog2  = "DELETE FROM akun WHERE code='$code';";
        $run2       = $this->db->query($querylog2);
    }
    // public function edit($akun_id)
    // {
    //     $this->db->where('akun_id', $akun_id);
    //     return $this->db->get('akun')->row_array();
    // }
    
    public function editkoperasi($code)
    {
        $query = "SELECT a.`akun_id`, b.id,
                a.`username`, a.`code`, a.password, b.ketua,
                b.alamat, b.kecamatan, b.kota, b.provinsi
                FROM `akun` a JOIN koperasi b on a.code = b.code
                WHERE a.code = '$code'
                ORDER BY a.`code` DESC;";
        $data = $this->db->query($query)->row_array();
        return $data;
    }
    public function update($code, $data)
    {
        $this->db->where('code', $code);
        return $this->db->update('akun', $data);
    }
    public function updatekoperasi($code, $data)
    {
        $this->db->where('code', $code);
        return $this->db->update('koperasi', $data);
    }

    public function list_nelayan()
    {
        $pilih_client = "SELECT	
                            `id` as id_nelayan,
                            `nama` as nama_nelayan,
                            `nama_kapal` as kapal_nelayan
                        FROM `nelayan`
                        WHERE `status` = 1";
        $client = $this->db->query($pilih_client)->result_array();

        return $client;
    }

    public function allkoperasi($isall = true, $limit = null, $offset = null)
    {
        if ($this->session->userdata('client_id')) {
            $ses_client = $this->session->userdata('client_id');
        } else {
            $ses_client = $this->session->userdata('ID');
        }

        $keyword ='';
        $keyword = $keyword ? str_replace("'", "\'", $this->input->get('table_search')):"";

        $where = array();
        if (!empty($this->input->get('table_search'))) {
            $where[] = " AND username LIKE '%" . $keyword . "%'";
        }

        $is_limit = true;

        isLimit:

        $stringwhere = implode(" AND ", $where);
        $lokasi = $this->session->userdata('asal');

        $query = "  SELECT 
        a.`username`, a.`code`, a.password, b.ketua,
        b.alamat, b.kecamatan, b.kota, b.provinsi
        FROM `akun` a JOIN koperasi b on a.code = b.code
        ORDER BY a.`code` DESC;";

        // echo $query;
        // die();
        if ($is_limit) {
            if (!$isall) {
                $query .= ' LIMIT ' . $limit . " offset " . $offset;
            }
        }

        if ($is_limit) {
            $res = $this->db->query($query)->result_array();
            $is_limit = false;
            goto isLimit;
        }

        $count = $this->db->query($query)->num_rows();

        $data = array(
            "total" => $count,
            "data" => $res
        );
        // var_dump($data);
        // die;
        return $data;
    }
}