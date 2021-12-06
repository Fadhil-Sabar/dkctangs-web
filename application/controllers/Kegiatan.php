<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function index()
	{
		$this->load->view('kegiatan');
	}

	public function Detail_PWC()
	{
		$this->load->view('v_pwc');
		$this->load->view('_partial/footer');
	}
	
	public function Detail_Napak_Tilas()
	{
		$this->load->view('v_nt');
		$this->load->view('_partial/footer');
	}

	public function Detail_Gelar_Senja()
	{	
		$this->load->view('v_gelas');
		$this->load->view('_partial/footer');
	}
 
}
