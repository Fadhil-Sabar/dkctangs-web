<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_post_category extends CI_Model
{
    public function tambah_data_kategori()
    {
        $data = [
            'nama_kategori' => $this->input->post('NamaKategori', true)
        ];

        $this->db->insert('tb_kategori', $data);
    }

    public function hapus_data_kategori($kode_kategori)
    {
        $this->db->delete('tb_kategori', array('kode_kategori' => $kode_kategori));
    }

    public function get_all_kategori()
    {
        $this->db->order_by('kode_kategori', 'DESC');
        return $this->db->get('tb_kategori')->result();
    }

    public function get_all_nama_kategori()
    {
        return $this->db->select('nama_kategori')->get('tb_kategori')->result();
    }
}
