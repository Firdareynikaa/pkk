<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $data['content']='v_dashboard';
        $this->load->view('template', $data);
    }
}