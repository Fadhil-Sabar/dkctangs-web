<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pmk extends CI_Model
{
    public function tambah_data_pmk()
    {
        $this->load->helper('string');
        $data = [
            'id' => random_string('md5', 32),
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

        $this->db->insert('tb_pmk', $data);
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
        $this->db->update('tb_pmk');
    }

    public function hapus_data_pmk($id)
    {
        $this->db->set('is_deleted', true);
        $this->db->where('id', $id);
        $this->db->update('tb_pmk');
    }

    public function get_all_pmk()
    {
        $this->db->where('is_deleted', false);
        $this->db->order_by('updated_at');
        return $this->db->get('tb_pmk')->result();
    }

    public function get_pmk_by_id($id)
    {
        return $this->db->get_where('tb_pmk', array('id' => $id))->row();
    }
}
