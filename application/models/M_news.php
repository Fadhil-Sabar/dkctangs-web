<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_news extends CI_Model
{
    public function tambah_data_berita($imgNews)
    {
        $penulis = 'Admin';

        if ($this->input->post('PenulisBerita', true) != '') {
            $penulis = $this->input->post('PenulisBerita', true);
        }

        $data = [
            'judul_berita' => $this->input->post('JudulBerita', true),
            'konten_berita' => $this->input->post('KontenBerita', true),
            'gambar_berita' => $imgNews,
            'kategori_berita' => $this->input->post('KategoriBerita', true),
            'penulis_berita' => $penulis,
            'status_berita' => 'Draft',
            'created_at' => date('d M Y', time())
        ];

        $this->db->insert('tb_berita', $data);
    }

    public function edit_data_berita($kode_berita, $imgNews)
    {
        $penulis = 'Admin';

        if ($this->input->post('PenulisBerita', true) != '') {
            $penulis = $this->input->post('PenulisBerita', true);
        }

        $data = [
            'judul_berita' => $this->input->post('JudulBerita', true),
            'konten_berita' => $this->input->post('KontenBerita', true),
            'gambar_berita' => $imgNews,
            'kategori_berita' => $this->input->post('KategoriBerita', true),
            'penulis_berita' => $penulis,
            'created_at' => date('d M Y', time())
        ];

        $this->db->set($data);
        $this->db->where('kode_berita', $kode_berita);
        $this->db->update('tb_berita');
    }

    public function hapus_data_berita($kode_berita)
    {
        $this->db->delete('tb_berita', array('kode_berita' => $kode_berita));
    }

    public function publish_data_berita($kode_berita)
    {
        $data = [
            'status_berita' => 'Published'
        ];

        $this->db->set($data);
        $this->db->where('kode_berita', $kode_berita);
        $this->db->update('tb_berita');
    }

    public function draft_data_berita($kode_berita)
    {
        $data = [
            'status_berita' => 'Draft'
        ];

        $this->db->set($data);
        $this->db->where('kode_berita', $kode_berita);
        $this->db->update('tb_berita');
    }

        public function tolak_data_berita($kode_berita)
    {
        $data = [
            'status_berita' => 'Ditolak'
        ];

        $this->db->set($data);
        $this->db->where('kode_berita', $kode_berita);
        $this->db->update('tb_berita');
    }

    public function get_all_news()
    {
        $this->db->order_by('kode_berita', 'DESC');
        return $this->db->get('tb_berita')->result();
    }

    public function get_news_by_id($kode_berita)
    {
        return $this->db->get_where('tb_berita', array('kode_berita' => $kode_berita))->row();
    }

    public function get_publised_news()
    {
        return $this->db->get_where('tb_berita', array('status_berita' => 'Published'))->result();
    }
}
