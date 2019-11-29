<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
	}

    public function index()
	{
		$data['produk']=$this->m_produk->ambilproduk();
		$data['user']=$this->m_produk->ambiluser();
		$data['kategori']=$this->m_produk->ambilkategori();
		$data['content']="v_produk";
		$this->load->view('template', $data);
	}

	public function tambah()
	{
		$config['upload_path'] = './assets/img/product-img';
		$config['allowed_types'] = 'jpg|png';

		if ($_FILES['gambar']['name'] != "") {
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('pesan', $this->upload->display_errors());
				redirect('produk');
			} else {
				if($this->m_produk->tambah($this->upload->data('file_name'))){
					$this->session->set_flashdata('pesan', 'berhasil menambah data');
				} else {
					$this->session->set_flashdata('pesan', 'gagal menambah data');
				}
				redirect('produk');
			}
				
		} else {
			if ($this->m_produk->tambah('')) {
				$this->session->set_flashdata('pesan', 'berhasil menambah data');
			} else {
				$this->session->set_flashdata('pesan', 'gagal menambah data');
			}
			redirect('produk');
		}	
	}

	public function tampil_ubah_produk($id_produk)
	{
		$data =  $this->m_produk->tampil_ubah_produk($id_produk);
		echo json_encode($data);
	}

	public function update(){
		if($this->input->post('update')){
			if($_FILES['gambar']['name']==""){
				if($this->m_produk->update()){
					$this->session->set_flashdata('pesan', 'sukses ubah data ');
				}else{
					$this->session->set_flashdata('pesan', 'gagal ubah data ');
				}
				redirect('produk');	
			}else{
				$config['upload_path'] = './assets/img/product-img/';
				$config['allowed_types'] = 'jpg|png|jpeg';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('gambar')){
					$this->session->set_flashdata('pesan', $this->upload->display_errors());
					redirect('produk');
				}else{
					if($this->m_produk->update_gbr($this->upload->data('file_name'))){
						$this->session->set_flashdata('pesan', 'sukses ubah data ');
					}else{
						$this->session->set_flashdata('pesan', 'gagal ubah data ');
					}
					redirect('produk');
				}
			}
		}
	}

	public function hapus($id_produk){
		$this->m_produk->hapus($id_produk);
		redirect('produk');
	}
}