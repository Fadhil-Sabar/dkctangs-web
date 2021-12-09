<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarNT extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_nt','nt');
		$this->load->library('upload');
		$this->load->library('form_validation');
	}


// HALAMAN DAFTAR PWC 
	public function daftar_nt()
	{
		$this->load->view('daftar_nt');
	}

	// public function add()
	// {
	// 	$this->nt->tambah_data_nt();
	// 	redirect('Home');
	// }

	public function add_nt()
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
            if ($this->input->post('TambahNT')) {

                // setting upload img rules
                $config['upload_path']          = 'peserta/images/nt2021/serifikat_vaksin';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['encrypt_name']         = true;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('surat_vaksin')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('daftar_nt', $error);
                } else {
                    $data = array('image' => $this->upload->data());
                }
            }
        }

        if (empty($_FILES['surat_kesehatan']['name'])) {
        	$this->form_validation->set_rules('surat_kesehatan', 'Surat Kesehatan', 'required');
        } else {
            if ($this->input->post('TambahNT')) {

                // setting upload img rules
                $config['upload_path']          = 'peserta/images/nt2021/surat_kesehatan';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024; $config
                // ['max_height']           = 768;
                $config['encrypt_name']         = false;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('surat_kesehatan')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('daftar_nt', $error);
                } else {
                    $data = array('image' => $this->upload->data());
                }
            }
        }

        if (empty($_FILES['surat_mandat']['name'])) {
        	$this->form_validation->set_rules('surat_mandat', 'Surat Mandat', 'required');
        } else {
            if ($this->input->post('TambahNT')) {

                // setting upload img rules
                $config['upload_path']          = 'peserta/images/nt2021/surat_mandat';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['encrypt_name']         = false;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('sertifikat_vaksin')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('daftar_nt', $error);
                } else {
                    $data = array('image' => $this->upload->data());
                }
            }
        }

        if ($this->form_validation->run() == false) {
            redirect(base_url('Failed_NT'));
        } else {
            if ($this->input->post('TambahNT')) {

                // setting upload img rules
                $config['upload_path']          = 'peserta/images/nt2021/sertifikat_vaksin';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['encrypt_name']         = false;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('sertifikat_vaksin')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('daftar_nt', $error);
                } else {
                    $data = array('image' => $this->upload->data());
                 	$current_id = $this->nt->tambah_data_nt($this->upload->data('file_name'));
                    redirect(base_url('Success_NT/'.$current_id));	
                }
            }
        }
	}

	public function success_nt($current_id)
	{
		$data['NT'] = $this->nt->get_nt_by_id($current_id);
		$this->load->view('notif/nt/success_nt',$data);
	}

	public function failed_nt()
	{
		// $data['']=
		$this->load->view('notif/nt/failed_nt');
	}

	// public function edit_nt()
	// {
	// 	$data['nt'] = $this->nt->edit_data_nt();
	// }	

	// public function delete_nt($id_peserta_nt)
	// {
	// 	$data['nt'] = $this->nt->hapus_data_nt($id_peserta_nt);
	// }


}