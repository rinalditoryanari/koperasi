<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_akun extends ci_Model
{
    //Input:    
    //Output:   
    //Process:  
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    //Input:    session userdata id
    //Output:   list $data -> list akun dan count 
    //Process:  SELECT data akun di table akun
    public function index($isall = true, $limit = null, $offset = null)
    {
        if ($this->session->userdata('client_id')) {
            $ses_client = $this->session->userdata('client_id');
        } else {
            $ses_client = $this->session->userdata('ID');
        }

        $keyword = '';
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
                        where a.`asal`= '$lokasi'
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

    //Input:    $akun_id -> id kaun
    //Output:   
    //Process:  DELETE akun di table akun
    public function hapus_akun($akun_id)
    {
        $querylog1   = "DELETE FROM akun WHERE akun_id='$akun_id';";
        $run2       = $this->db->query($querylog1);
      
        // $this->session->set_flashdata('flash', 'Berhasil Dihapus');
    }

    //Input:    $akun_id
    //Output:   
    //Process:  SELECT data akun di table akun
    public function edit($akun_id)
    {
        $this->db->where('akun_id', $akun_id);
        return $this->db->get('akun')->row_array();
    }
    
    //Input:    $akun_id -> id akun 
    //          $data    -> data akun
    //Output:   
    //Process:  UPDATE di table akun 
    public function update($akun_id, $data)
    {
        $this->db->where('akun_id', $akun_id);
        $this->db->update('akun', $data);
    }

    //Input:    
    //Output:   $client -> id_nelayan, nama_nelayan, kapal_nelayan
    //Process:  SELECT data nelayan di table nelayan
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

    //Input:    
    //Output:   $client -> id_lokasi, nama_koperasi, kecamatan
    //Process:  SELECT data koperasi di table koperasi
    public function list_lokasi()
    {
        $pilih_client = "SELECT `id` as id_lokasi, `nama` as nama_koperasi, `kecamatan`FROM `koperasi`;";
        $client = $this->db->query($pilih_client)->result_array();
        return $client;
    }

    public function cek_koperasi($asal)
    {
        $this->db->where('kecamatan', $asal);
        return $this->db->get('koperasi')->row_array();
    }

}