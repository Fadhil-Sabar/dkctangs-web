<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Process_Pmk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pmk', 'pmk');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function tambah_data_pmk()
    {
        $this->load->view('_partial/head-dash');
        $this->load->view('admin-page/pramuka/process/add_pmk');
        $this->load->view('_partial/foot-dash');

        $data['active'] = true;
        // set validation rules
        $this->form_validation->set_rules('Nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Pangkalan', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Tanggal_Lahir', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Jenis_Kelamin', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('No_Hp', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Email', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Alamat', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Kecamatan', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Tingkatan', 'Nama Lengkap', 'required');

        if ($this->input->post('TambahPmk')) {
            $this->pmk->tambah_data_pmk();
            $this->session->set_flashdata('msg', 'Data dokter berhasil di tambahkan!');
            redirect(base_url('Admin_Pramuka'));
        }
    }

    public function Edit_pmk($id)
    {
        $parse_id = (int) $id;
        $data['title']          = 'Edit';
        $data['active']         = true;
        $data['pmk']      = $this->pmk->get_pmk_by_id($parse_id);

        $this->load->view('_partial/head-dash', $data);
        $this->load->view('admin-page/pramuka/process/edit_pmk', $data);
        $this->load->view('_partial/foot-dash');

        $data['active'] = true;
        // set validation rules
        $this->form_validation->set_rules('Nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Pangkalan', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Tanggal_Lahir', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Jenis_Kelamin', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('No_Hp', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Email', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Alamat', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Kecamatan', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('Tingkatan', 'Nama Lengkap', 'required');

        if ($this->input->post('UpdatePmk')) {
            $this->pmk->update($parse_id);
            $this->session->set_flashdata('msg', 'Data dokter berhasil di tambahkan!');
            redirect(base_url('Admin_Pramuka'));
        }
    }

    public function hapus_pmk($id)
    {
        $parse_id = (int) $id;
        $this->pmk->hapus_data_pmk($parse_id);
        $this->session->set_flashdata('msg', 'Data berhasil di hapus!');
        redirect(base_url('Admin_Pramuka'));
    }
}
