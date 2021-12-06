<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_nt extends CI_Model
{
    public function tambah_data_nt($filename)
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap', true),
            'no_hp' => $this->input->post('no_hp', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'pangkalan' => $this->input->post('pangkalan', true),
            'ranting' => $this->input->post('ranting', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir',true),
            'penyakit' => $this->input->post('penyakit', true),
            'email' => $this->input->post('email', true),
            'sertifikat_vaksin' => $filename
        ];

        $this->db->insert('db_peserta_tatil', $data);
        return $this->db->insert_id();        
    }

    //  FUNGSI EDIT BELOM FINISH
    // public function edit_data_nt($id_peserta_tatil)
    // {
    //     $data = [
    //         'nama_lengkap' => $this->input->post('nama_lengkap', true),
    //         'no_hp' => $this->input->post('no_hp', true),
    //         'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
    //         'pangkalan' => $this->input->post('pangkalan', true),
    //         'ranting' => $this->input->post('ranting', true),
    //         'tempat_lahir' => $this->input->post('tempat_lahir', true),
    //         'tanggal_lahir' => $this->input->post('tanggal_lahir',true),
    //         'email' => $this->input->post('email', true),
    //     ];

    //     $this->db->set($data);
    //     $this->db->where('id_peserta_tatil', $id_peserta_tatil);
    //     $this->db->update('db_peserta_tatil');
    // }

    // public function hapus_data_nt($id_peserta_tatil)
    // {
    //     $this->db->delete('db_peserta_tatil', array('id_peserta_tatil' => $id_peserta_tatil));
    // }

    public function get_all_nt()
    {
        return $this->db->get('db_peserta_tatil')->result();
    }

    public function get_nt_by_id($id_peserta_tatil)
    {
        return $this->db->get_where('db_peserta_tatil', array('id_peserta_tatil' => $id_peserta_tatil))->result_array();
    }
}
