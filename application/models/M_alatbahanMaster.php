<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_alatbahanMaster extends ci_Model
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
            $where[] = " AND nama LIKE '%" . $keyword . "%'";
        }

        $is_limit = true;

        isLimit:

        $stringwhere = implode(" AND ", $where);

        $lokasi = $this->session->userdata('asal');

        // $query = "  SELECT
        //                 * 
        //             FROM `alat` 
        //             where 1=1
        //             $stringwhere
        //             ORDER BY lokasi ASC";

        $query = "  SELECT
                            a.`id_alat`,a.`nama`, a.`jenis`, a.`satuan`, a.`harga_per_unit`, a.`created_by`, a.`modified_by`, a.`lokasi`,
                             c.`nama` as koperasi
                        FROM `alat` a
                        JOIN `koperasi` c on a.`id_koperasi` = c.`code`
                        WHERE 1=1
                        $stringwhere 
                        ORDER BY a.`id_alat` DESC;
                  ";
        // echo $query;
        // die();
        if ($is_limit) {
            if (!$isall) {
                $query .= ' LIMIT ' . $limit . " offset " . $offset;
            }
        }

        if ($is_limit) {
            // echo $query;
            // die;
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
    
    public function hapus_alatbahan($id_alat_bahan)
    {
        $querylog1   = "DELETE FROM alat WHERE id_alat='$id_alat_bahan';";
        $run2       = $this->db->query($querylog1);
      
        // $this->session->set_flashdata('flash', 'Berhasil Dihapus');
    }
    
    public function edit($id_alat)
    {
        $this->db->where('id_alat', $id_alat);
        return $this->db->get('alat')->row_array();
    }
    
    public function update($id_alat, $data)
    {
        $this->db->where('id_alat', $id_alat);
        $this->db->update('alat', $data);
    }

    public function list_alat()
    {
        $pilih_client = "SELECT `id_alat`, `nama` as nama_alat, `jenis`, `satuan`, `harga_per_unit` FROM `alat` ;";
        $client = $this->db->query($pilih_client)->result_array();
        return $client;
    }

    public function list_alat_regist()
    {
        $pilih_client = "SELECT `id_alat`, `nama` as nama_alat, `jenis`, `satuan`, `harga_per_unit` FROM `alat` WHERE `jenis` = 'ALAT';";
        $client = $this->db->query($pilih_client)->result_array();
        return $client;
    }
}