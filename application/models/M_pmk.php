<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pmk extends CI_Model
{
    public function tambah_data_pmk()
    {
        $data = [
            'nama' => $this->input->post('Nama', true),
            'pangkalan' => $this->input->post('Pangkalan', true),
            'tgl_lahir' => $this->input->post('Tanggal_Lahir', true),
            'jenis_kelamin' => $this->input->post('Jenis_Kelamin', true),
            'no_hp' => $this->input->post('No_Hp', true),
            'email' => $this->input->post('Email', true),
            'alamat' => $this->input->post('Alamat', true),
            'kecamatan' => $this->input->post('Kecamatan', true),
            'tingkatan' => $this->input->post('Tingkatan', true),
        ];

        $this->db->insert('db_pmk', $data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->input->post('Nama', true),
            'pangkalan' => $this->input->post('Pangkalan', true),
            'tgl_lahir' => $this->input->post('Tanggal_Lahir', true),
            'jenis_kelamin' => $this->input->post('Jenis_Kelamin', true),
            'no_hp' => $this->input->post('No_Hp', true),
            'email' => $this->input->post('Email', true),
            'alamat' => $this->input->post('Alamat', true),
            'kecamatan' => $this->input->post('Kecamatan', true),
            'tingkatan' => $this->input->post('Tingkatan', true),
        ];

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('db_pmk');
    }

    public function hapus_data_pmk($id)
    {
        $this->db->delete('db_pmk', array('id' => $id));
    }

    public function get_all_pmk()
    {
        return $this->db->get('db_pmk')->result();
    }

    public function get_pmk_by_id($id)
    {
        return $this->db->get_where('db_pmk', array('id' => $id))->row();
    }
}
