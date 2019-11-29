<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
	}
	
	public function makananminuman()
	{
		$data['produk']=$this->m_produk->ambilmakanan();
		$data['content']="v_kat_makanan";
		$this->load->view('template', $data);
	}

	public function pakaian()
	{
		$data['produk']=$this->m_produk->ambilpakaian();
		$data['content']="v_kat_pakaian";
		$this->load->view('template', $data);
	}

	public function kecantikan()
	{
		$data['produk']=$this->m_produk->ambilkecantikan();
		$data['content']="v_kat_kecantikan";
		$this->load->view('template', $data);
	}

	public function peralatanatk()
	{
		$data['produk']=$this->m_produk->ambilalattulis();
		$data['content']="v_kat_alattulis";
		$this->load->view('template', $data);
	}
}