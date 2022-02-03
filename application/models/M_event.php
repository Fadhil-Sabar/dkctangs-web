<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_event extends CI_Model
{
    public function tambah_data_kegiatan($imgEvent)
    {
        $data = [
            'nama_kegiatan' => $this->input->post('NamaKegiatan', true),
            'konten_kegiatan' => $this->input->post('Kontenkegiatan', true),
            'gambar_kegiatan' => $imgEvent,
            'tempat_kegiatan' => $this->input->post('TempatKegiatan', true),
            'tgl_kegiatan' => $this->input->post('TanggalKegiatan', true),
            'waktu_mulai' => $this->input->post('WaktuMulaiKegiatan', true),
            'waktu_akhir' => $this->input->post('WaktuAkhirKegiatan', true),
            'created_at' => date('d M Y', time())
        ];

        $this->db->insert('tb_kegiatan', $data);
    }

    public function edit_data_kegiatan($kode_kegiatan, $imgEvent)
    {
        $data = [
            'nama_kegiatan' => $this->input->post('NamaKegiatan', true),
            'konten_kegiatan' => $this->input->post('Kontenkegiatan', true),
            'gambar_kegiatan' => $imgEvent,
            'tempat_kegiatan' => $this->input->post('TempatKegiatan', true),
            'tgl_kegiatan' => $this->input->post('TanggalKegiatan', true),
            'waktu_mulai' => $this->input->post('WaktuMulaiKegiatan', true),
            'waktu_akhir' => $this->input->post('WaktuAkhirKegiatan', true),
            'created_at' => date('d M Y', time())
        ];

        $this->db->set($data);
        $this->db->where('kode_kegiatan', $kode_kegiatan);
        $this->db->update('tb_kegiatan');
    }


    public function hapus_data_berita($kode_kegiatan)
    {
        $this->db->delete('tb_kegiatan', array('kode_kegiatan' => $kode_kegiatan));
    }

    public function get_all_kegiatan()
    {
        $this->db->order_by('kode_kegiatan', 'DESC');
        return $this->db->get('tb_kegiatan')->result();
    }

    public function get_kegiatan_by_id($kode_kegiatan)
    {
        return $this->db->get_where('tb_kegiatan', array('kode_kegiatan' => $kode_kegiatan))->row();
    }

    public function get_ongoing_event()
    {
        return $this->db->get_where('tb_kegiatan', array('status_kegiatan' => 'Tersedia'))->result();
    }
}
