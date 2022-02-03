<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  // public function __construct()
  // {
  //   parent::__construct();
  //   $this->load->model('auth_model');
  //   if(!$this->auth_model->current_user()){
  //     redirect(base_url('Login'));
  //   }
  // }

  public function index()
  {

    $this->db->where('kecamatan', 'Ciputat');
    $this->db->from('tb_pmk');
    $ciputat = $this->db->count_all_results();

    $this->db->where('kecamatan', 'Ciputat Timur');
    $this->db->from('tb_pmk');
    $ciptim = $this->db->count_all_results();

    $this->db->where('kecamatan', 'Serpong');
    $this->db->from('tb_pmk');
    $serpong = $this->db->count_all_results();

    $this->db->where('kecamatan', 'Serpong Utara');
    $this->db->from('tb_pmk');
    $serut = $this->db->count_all_results();

    $this->db->like('kecamatan', 'Pondok Aren');
    $this->db->from('tb_pmk');
    $ponren = $this->db->count_all_results();

    $this->db->like('kecamatan', 'Pamulang');
    $this->db->from('tb_pmk');
    $pamulang = $this->db->count_all_results();

    $this->db->like('kecamatan', 'Setu');
    $this->db->from('tb_pmk');
    $setu = $this->db->count_all_results();

    $data = [
        'ciputat' => $ciputat,
        'ciptim' => $ciptim,
        'serpong' => $serpong,
        'serut' => $serut,
        'ponren' => $ponren,
        'pamulang' => $pamulang,
        'setu' => $setu,
        ];


    $this->db->like('jenis_kelamin', 'Pria');
    $this->db->from('tb_pmk');
    $pria = $this->db->count_all_results();

    $this->db->like('jenis_kelamin', 'Wanita');
    $this->db->from('tb_pmk');
    $wanita = $this->db->count_all_results();


    $data = [
        'ciputat' => $ciputat,
        'ciptim' => $ciptim,
        'serpong' => $serpong,
        'serut' => $serut,
        'ponren' => $ponren,
        'pamulang' => $pamulang,
        'setu' => $setu,
        'pria' => $pria,
        'wanita' => $wanita
    ];

    $this->load->model('M_pmk', 'pmk');
    $data['pmks'] = $this->pmk->get_all_pmk();

    $this->load->view('_partial/head-dash');
    $this->load->view('admin-page/admin', $data);
    $this->load->view('_partial/foot-dash');
  }


  public function pwc_admin()
  {
    $this->load->model('M_pwc', 'pwc');
    $data['PWC'] = $this->pwc->get_all_pwc();

    $this->load->view('_partial/head-dash');
    $this->load->view('admin-page/pwc2021/pwc_admin', $data);
    $this->load->view('_partial/foot-dash');
  }

  public function nt_admin()
  {
    $this->load->model('M_nt', 'nt');
    $data['NT'] = $this->nt->get_all_nt();

    $this->load->view('_partial/head-dash');
    $this->load->view('admin-page/tatil2021/tatil_admin', $data);
    $this->load->view('_partial/foot-dash');
  }

  public function gs_admin()
  {
    $this->load->model('M_gelas', 'gs');
    $data['GS'] = $this->gs->get_all_gelas();

    $this->load->view('_partial/head-dash');
    $this->load->view('admin-page/gelas2021/gelas_admin', $data);
    $this->load->view('_partial/foot-dash');
  }

  public function pmk_admin()
  {
    $this->load->model('M_pmk', 'pmk');
    $data['pmks'] = $this->pmk->get_all_pmk();

    $this->load->view('_partial/head-dash');
    $this->load->view('admin-page/pramuka/pmk_admin', $data);
    $this->load->view('_partial/foot-dash');
  }

  public function berita()
  {
    // Blocking adm klinik
    // if ($this->session->userdata('level') === '1' || $this->session->userdata('level') === '3') {
    $this->load->model('M_news', 'news');

    $data['title']   = 'Berita';
    $data['news']   = $this->news->get_all_news();

    $this->load->view('_partial/head-dash', $data);
    $this->load->view('admin-page/pramuka/berita_admin', $data);
    $this->load->view('_partial/foot-dash');
    // } else {
    //   return redirect(base_url('Error'));
    // }
  }

  public function kegiatan()
  {
    // Blocking adm klinik
    // if ($this->session->userdata('level') === '1' || $this->session->userdata('level') === '3') {
    $this->load->model('M_event', 'event');

    $data['title']   = 'Kegiatan';
    $data['events'] = $this->event->get_all_kegiatan();

    $this->load->view('_partial/head-dash', $data);
    $this->load->view('admin-page/pramuka/events', $data);
    $this->load->view('_partial/foot-dash');
    // } else {
    //   return redirect(base_url('Error'));
    // }
  }
}
