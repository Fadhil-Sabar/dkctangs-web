<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarGelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_gelas','gs');
		$this->load->library('upload');
		$this->load->library('form_validation');
	}


// HALAMAN DAFTAR PWC 
	public function daftar_gs()
	{
		$this->load->view('daftar_gelas');
	}

	// public function add()
	// {
	// 	$this->gs->tambah_data_gelas();
	// 	redirect('Home');
	// }

	public function add_gs()
	{
        $data['active'] = true;
        // set validation rules
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
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
        }

        if ($this->form_validation->run() == false) {
            redirect(base_url('Failed_GS'));
        } else {
            if ($this->input->post('TambahGS')) {

                // setting upload img rules
                $config['upload_path']          = 'peserta/images/gelas2021/sertifikat_vaksin/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['encrypt_name']         = true;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('sertifikat_vaksin')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('daftar_gelas', $error);
                } else {
                    $data = array('image' => $this->upload->data());
                    $this->session->set_flashdata('msg', 'Data Anda berhasil di tambahkan!');

                 	$current_id = $this->gs->tambah_data_gelas($this->upload->data('file_name'));
                    redirect(base_url('Success_GS/'.$current_id));	
                }
            }
        }
	}

	public function success_gs($current_id)
	{
		$data['GS'] = $this->gs->get_gelas_by_id($current_id);
		$this->load->view('notif/gs/success_gs',$data);
	}

	public function failed_gs()
	{
		// $data['']=
		$this->load->view('notif/gs/failed_gs');
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