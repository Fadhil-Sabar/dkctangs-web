<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{
    public function chartJk()
    {
        $this->db->like('jenis_kelamin', 'Pria');
        $this->db->from('tb_pmk');
        $pria = $this->db->count_all_results();

        $this->db->like('jenis_kelamin', 'Wanita');
        $this->db->from('tb_pmk');
        $wanita = $this->db->count_all_results();

        $data = [
            'pria' => $pria,
            'wanita' => $wanita
        ];
        $this->load->view('_partial/head-dash');
        $this->load->view('admin-page/pramuka/ChartJk', $data);
        $this->load->view('_partial/foot-dash');
    }

    public function chartKecamatan()
    {
        $this->db->where('kecamatan', 'Ciputat');
        $this->db->from('tb_pmk');
        $ciputat = $this->db->count_all_results();

        $this->db->where('kecamatan', 'Ciputat Timur');
        $this->db->from('tb_pmk');
        $ciptim = $this->db->count_all_results();

        $this->db->where('kecamatan', 'Serpong');
        $this->db->from('tb_pmk');
        $serpong = $this->db->count_all_results();

        $this->db->where('kecamatan', 'Serpong Utara');
        $this->db->from('tb_pmk');
        $serut = $this->db->count_all_results();

        $this->db->like('kecamatan', 'Pondok Aren');
        $this->db->from('tb_pmk');
        $ponren = $this->db->count_all_results();

        $this->db->like('kecamatan', 'Pamulang');
        $this->db->from('tb_pmk');
        $pamulang = $this->db->count_all_results();

        $this->db->like('kecamatan', 'Setu');
        $this->db->from('tb_pmk');
        $setu = $this->db->count_all_results();

        $data = [
            'ciputat' => $ciputat,
            'ciptim' => $ciptim,
            'serpong' => $serpong,
            'serut' => $serut,
            'ponren' => $ponren,
            'pamulang' => $pamulang,
            'setu' => $setu,
        ];

        $this->load->view('_partial/head-dash');
        $this->load->view('admin-page/pramuka/ChartKecamatan', $data);
        $this->load->view('_partial/foot-dash');
    }
}
