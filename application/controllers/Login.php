<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
	    $this->load->model('m_login');
    }

    public function index()
    {
        $this->load->view('v_login');
	}
	
	public function register()
    {
        $this->load->view('v_register');
    }

    public function proses_login()
	{
		if($this->session->userdata('logged_in') == FALSE){
			if ($this->m_login->cek_login() == TRUE) {
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('pesan','Email / Password Salah');
				redirect('login');
			}
        }else{
			redirect('dashboard');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
