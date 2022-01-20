<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Process_news extends CI_Controller
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
        $this->load->model('M_news', 'news');
        $this->load->model('M_post_category', 'category');
    }

    public function tambah_berita()
    {
        $data['title'] = 'Tambah Berita';
        $data['categories'] = $this->category->get_all_kategori();

        // set validation rules
        $this->form_validation->set_rules('JudulBerita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('KontenBerita', 'Konten Berita', 'required');
        $this->form_validation->set_rules('KategoriBerita', 'Kategori', 'trim|required');

        if (empty($_FILES['ImgBerita']['name'])) {
            $this->form_validation->set_rules('ImgBerita', 'Gambar Berita', 'required');
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('_partial/head-dash', $data);
            $this->load->view('admin-page/pramuka/news_process/add-news', $data);
            $this->load->view('_partial/foot-dash');
        } else {
            if ($this->input->post('TambahBerita')) {

                // setting upload img rules
                $config['upload_path']          = 'dashboard/images/news/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['encrypt_name']         = true;
                $config['remove_spaces']        = true;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('ImgBerita')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('_partial/head-dash', $data);
                    $this->load->view('admin-page/pramuka/news_process/add-news', $error);
                    $this->load->view('_partial/foot-dash');
                } else {
                    $data = array('image' => $this->upload->data());

                    $this->news->tambah_data_berita($this->upload->data('file_name'));
                    $this->session->set_flashdata('msg', 'Data berita berhasil di tambahkan!');
                    redirect(base_url('News-Page'));
                }
            }
        }
    }

    public function edit_berita($kode_berita)
    {
        $parsed_kode_berita = (int)$kode_berita;

        $data['title'] = 'Edit Berita';
        $data['newsById'] = $this->news->get_news_by_id($parsed_kode_berita);
        $data['categories'] = $this->category->get_all_kategori();

        // set validation rules
        $this->form_validation->set_rules('JudulBerita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('KontenBerita', 'Konten Berita', 'required');
        $this->form_validation->set_rules('KategoriBerita', 'Kategori', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('_partial/head-dash', $data);
            $this->load->view('admin-page/pramuka/news_process/edit-news', $data);
            $this->load->view('_partial/foot-dash');
        } else {
            if ($this->input->post('EditBerita')) {

                // check if user add new file or not
                if (($_FILES['ImgBerita']['name']) !== '') {

                    $imgBerita      = $_FILES['ImgBerita']['name'];

                    $currentImage   = $this->news->get_news_by_id($parsed_kode_berita)->gambar_berita;

                    if ($imgBerita !== $currentImage) {
                        $path = 'dashboard/images/news/';
                        if (file_exists($path . $currentImage) || !file_exists($path)) {
                            unlink($path . $currentImage);
                        }
                    }

                    // setting upload img rules
                    $config['upload_path']          = 'dashboard/images/news/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 2048;
                    // $config['max_width']            = 1024;
                    // $config['max_height']           = 768;
                    $config['encrypt_name']         = true;
                    $config['remove_spaces']        = true;

                    $this->upload->initialize($config);

                    if (!$this->upload->do_upload('ImgBerita')) {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('_partial/head-dash', $data);
                        $this->load->view('admin-page/pramuka/news_process/edit-news', $error);
                        $this->load->view('_partial/foot-dash');
                    } else {
                        $this->news->edit_data_berita($parsed_kode_berita, $this->upload->data("file_name"));
                        $this->session->set_flashdata('msg', 'Data berita berhasil di perbaharui!');
                        redirect(base_url('News-Page'));
                    }
                } else {
                    $imgBerita = $this->news->get_news_by_id($kode_berita)->gambar_berita;

                    $this->news->edit_data_berita($parsed_kode_berita, $imgBerita);
                    $this->session->set_flashdata('msg', 'Data berita berhasil di perbaharui!');
                    redirect(base_url('News-Page'));
                }
            }
        }
    }

    public function detail_berita($kode_berita)
    {
        $parsed_kode_berita = (int)$kode_berita;

        $data['title']      = 'Detail Berita';
        $data['newsById'] = $this->news->get_news_by_id($parsed_kode_berita);

        $this->load->view('_partial/head-dash', $data);
        $this->load->view('admin-page/pramuka/news_process/detail-news', $data);
        $this->load->view('_partial/foot-dash');
    }

    public function hapus_berita($kode_berita)
    {
        $parsed_kode_berita = (int)$kode_berita;

        $path = 'dashboard/images/news/';
        $img = $this->news->get_news_by_id($parsed_kode_berita)->gambar_berita;

        unlink($path . $img);

        $this->news->hapus_data_berita($parsed_kode_berita);
        $this->session->set_flashdata('msg', 'Data berita berhasil di hapus!');
        redirect(base_url('News-Page'));
    }

    public function publish_berita($kode_berita)
    {
        $parsed_kode_berita = (int)$kode_berita;

        $this->news->publish_data_berita($parsed_kode_berita);
        $this->session->set_flashdata('msg', 'Berita berhasil di publish!');
        redirect(base_url('News-Page'));
    }

    public function draft_berita($kode_berita)
    {
        $parsed_kode_berita = (int)$kode_berita;

        $this->news->draft_data_berita($parsed_kode_berita);
        $this->session->set_flashdata('msg', 'Berita berhasil dimasukkan kedalam draft!');
        redirect(base_url('News-Page'));
    }
}
