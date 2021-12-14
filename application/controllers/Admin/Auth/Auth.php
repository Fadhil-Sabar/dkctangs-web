<?php

class Auth extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function masuk()
	{
		$this->load->model('auth_model');
		$this->load->library('form_validation');

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('auth/login');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->auth_model->login($username, $password)){
			redirect('Admin');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
		}

		$this->load->view('auth/login');
	}

	public function keluar()
	{
		$this->load->model('auth_model');
		$this->auth_model->logout();
		redirect(site_url('auth/login'));
	}

	public function lupa_pass(){
		$this->load->view('auth/forgot');
	}
}