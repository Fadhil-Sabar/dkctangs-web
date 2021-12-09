<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarPWC extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pwc', 'pwc');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }


    // HALAMAN DAFTAR PWC 
    public function daftar_pwc()
    {
        $this->load->view('daftar_pwc');
    }

    // public function add()
    // {
    // 	$this->gs->tambah_data_gelas();
    // 	redirect('Home');
    // }

    public function add_pwc()
    {
        $data['active'] = true;
        // set validation rules
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_peserta', 'Jenis Peserta', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('pangkalan', 'Pangkalan', 'required');
        $this->form_validation->set_rules('ranting', 'Ranting', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('penyakit', 'Penyakit', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if (empty($_FILES['sertifikat_vaksin']['name'])) {
            $this->form_validation->set_rules('sertifikat_vaksin', 'Sertifikat Vaksin', 'required');
        } else {
            if ($this->input->post('TambahPWC')) {

                // setting upload img rules
                $config['upload_path']          = 'peserta/images/pwc2021/sertifikat_vaksin';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['encrypt_name']         = true;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('sertifikat_vaksin')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('daftar_pwc', $error);
                } else {
                    $data = array('image' => $this->upload->data());
                }
            }
        }

        if (empty($_FILES['surat_kesehatan']['name'])) {
            $this->form_validation->set_rules('surat_kesehatan', 'Surat Kesehatan', 'required');
        } else {
            if ($this->input->post('TambahPWC')) {

                // setting upload img rules
                $config['upload_path']          = 'peserta/images/pwc2021/surat_kesehatan';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024; $config
                // ['max_height']           = 768;
                $config['encrypt_name']         = false;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('surat_kesehatan')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('daftar_pwc', $error);
                } else {
                    $data = array('image' => $this->upload->data());
                }
            }
        }

        if (empty($_FILES['surat_mandat']['name'])) {
            $this->form_validation->set_rules('surat_mandat', 'Surat Mandat', 'required');
        } else {
            if ($this->input->post('TambahPWC')) {

                // setting upload img rules
                $config['upload_path']          = 'peserta/images/pwc2021/surat_mandat';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['encrypt_name']         = false;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('surat_mandat')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('daftar_pwc', $error);
                } else {
                    $data = array('image' => $this->upload->data());
                }
            }
        }

        if ($this->form_validation->run() == false) {
            redirect(base_url('Failed_PWC'));
        } else {
            if ($this->input->post('TambahPWC')) {

                // setting upload img rules
                $config['upload_path']          = 'peserta/images/pwc2021/sertifikat_vaksin';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['encrypt_name']         = false;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('sertifikat_vaksin')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('daftar_pwc', $error);
                } else {
                    $data = array('image' => $this->upload->data());
                    $current_id = $this->pwc->tambah_data_pwc($this->upload->data('file_name'));
                    redirect(base_url('Success_PWC/' . $current_id));
                }
            }
        }
    }

    public function success_pwc($current_id)
    {
        $data['PWC'] = $this->pwc->get_pwc_by_id($current_id);
        $this->load->view('notif/pwc/success_pwc', $data);
    }

    public function failed_pwc()
    {
        // $data['']=
        $this->load->view('notif/pwc/failed_pwc');
    }


    // public function edit_gs()
    // {
    // 	$data['nt'] = $this->gs->edit_data_gelas();
    // }	

    // public function delete_gs($id_peserta_gelas)
    // {
    // 	$data['nt'] = $this->gs->hapus_data_gelas($id_peserta_gelas);
    // }


}
