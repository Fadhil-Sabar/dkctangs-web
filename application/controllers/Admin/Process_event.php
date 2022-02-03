<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Process_event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // if (!$this->session->userdata('username')) {
        //     return redirect(base_url('Login'));
        // }

        // // blocking adm klinik
        // if ($this->session->userdata('level') === '2') {
        //     return redirect(base_url('Error'));
        // }

        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->model('M_Event', 'event');
    }

    public function tambah_kegiatan()
    {
        $data['title'] = 'Tambah Kegiatan';

        // set validation rules
        $this->form_validation->set_rules('NamaKegiatan', 'Nama Kegiatan', 'required');
        $this->form_validation->set_rules('Kontenkegiatan', 'Konten Kegiatan', 'required');
        $this->form_validation->set_rules('TempatKegiatan', 'Tempat Kegiatan', 'required');
        $this->form_validation->set_rules('TanggalKegiatan', 'Tanggal Kegiatan', 'required');
        $this->form_validation->set_rules('WaktuMulaiKegiatan', 'Waktu mulai Kegiatan', 'required');
        $this->form_validation->set_rules('WaktuAkhirKegiatan', 'Waktu akhir Kegiatan', 'required');
        if (empty($_FILES['GambarKegiatan']['name'])) {
            $this->form_validation->set_rules('GambarKegiatan', 'Gambar Kegiatan', 'required');
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('_partial/head-dash', $data);
            $this->load->view('admin-page/pramuka/event_process/add-event', $data);
            $this->load->view('_partial/foot-dash');
        } else {
            if ($this->input->post('TambahKegiatan')) {

                // setting upload img rules
                $config['upload_path']          = 'dashboard/images/events/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['encrypt_name']         = true;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('GambarKegiatan')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('includes/head-dash', $data);
                    $this->load->view('admin/process/event_process/add-event', $error);
                    $this->load->view('includes/foot-dash');
                } else {

                    $this->event->tambah_data_kegiatan($this->upload->data('file_name'));
                    $this->session->set_flashdata('msg', 'Data kegiatan berhasil di tambahkan!');
                    redirect(base_url('Event-Page'));
                }
            }
        }
    }

    public function edit_kegiatan($kode_kegiatan)
    {
        $parsed_kode_kegiatan = (int)$kode_kegiatan;

        $data['title'] = 'Edit Kegiatan';
        $data['eventById'] = $this->event->get_kegiatan_by_id($parsed_kode_kegiatan);

        // set validation rules
        $this->form_validation->set_rules('NamaKegiatan', 'Nama Kegiatan', 'required');
        $this->form_validation->set_rules('Kontenkegiatan', 'Konten Kegiatan', 'required');
        $this->form_validation->set_rules('TempatKegiatan', 'Tempat Kegiatan', 'required');
        $this->form_validation->set_rules('TanggalKegiatan', 'Tanggal Kegiatan', 'required');
        $this->form_validation->set_rules('WaktuMulaiKegiatan', 'Waktu mulai Kegiatan', 'required');
        $this->form_validation->set_rules('WaktuAkhirKegiatan', 'Waktu akhir Kegiatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('_partial/head-dash', $data);
            $this->load->view('admin-page/pramuka/event_process/edit-event', $data);
            $this->load->view('_partial/foot-dash');
        } else {
            if ($this->input->post('EditKegiatan')) {

                // check if user add new file or not
                if (($_FILES['GambarKegiatan']['name']) !== '') {

                    $GambarKegiatan = $_FILES['GambarKegiatan']['name'];

                    $currentImage   = $this->event->get_kegiatan_by_id($parsed_kode_kegiatan)->gambar_kegiatan;

                    if ($GambarKegiatan !== $currentImage) {
                        $path = 'dashboard/images/events/';
                        if (file_exists($path . $currentImage) || !file_exists($path)) {
                            unlink($path . $currentImage);
                        }
                    }

                    // setting upload img rules
                    $config['upload_path']          = 'dashboard/images/events/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 2048;
                    // $config['max_width']            = 1024;
                    // $config['max_height']           = 768;
                    $config['encrypt_name']         = true;
                    $config['remove_spaces']        = true;

                    $this->upload->initialize($config);

                    if (!$this->upload->do_upload('GambarKegiatan')) {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('_partial/head-dash', $data);
                        $this->load->view('admin-page/pramuka/event_process/edit-event', $data);
                        $this->load->view('_partial/foot-dash');
                    } else {
                        $this->event->edit_data_kegiatan($parsed_kode_kegiatan, $this->upload->data("file_name"));
                        $this->session->set_flashdata('msg', 'Data kegiatan berhasil di perbaharui!');
                        redirect(base_url('Event-Page'));
                    }
                } else {
                    $GambarKegiatan = $this->event->get_kegiatan_by_id($parsed_kode_kegiatan)->gambar_kegiatan;

                    $this->event->edit_data_kegiatan($parsed_kode_kegiatan, $GambarKegiatan);
                    $this->session->set_flashdata('msg', 'Data kegiatan berhasil di perbaharui!');
                    redirect(base_url('Event-Page'));
                }
            }
        }
    }

    public function detail_kegiatan($kode_kegiatan)
    {
        $parsed_kode_kegiatan = (int)$kode_kegiatan;

        $data['title']      = 'Detail Kegiatan';
        $data['eventById'] = $this->event->get_kegiatan_by_id($parsed_kode_kegiatan);

        $this->load->view('_partial/head-dash', $data);
        $this->load->view('admin-page/pramuka/event_process/detail-event', $data);
        $this->load->view('_partial/foot-dash');
    }

    public function hapus_kegiatan($kode_kegiatan)
    {
        $parsed_kode_kegiatan = (int)$kode_kegiatan;

        $path = 'dashboard/images/events/';
        $img = $this->event->get_kegiatan_by_id($parsed_kode_kegiatan)->gambar_kegiatan;

        unlink($path . $img);

        $this->event->hapus_data_berita($parsed_kode_kegiatan);
        $this->session->set_flashdata('msg', 'Data kegiatan berhasil di hapus!');
        redirect(base_url('Event-Page'));
    }
}
