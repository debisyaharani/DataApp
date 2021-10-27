<?php
defined('BASEPATH') or exit('No direct script access allowed');

class welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}

	public function index()
	{
		if ($this->session->userdata('Login')) {
			$data['CountBarang'] = $this->MSudi->CountBarang('tbl_barang');
			$data['DataStok'] = $this->MSudi->CountStok('tbl_barang');
			$data['title'] = 'Dashboard';
			$data['content'] = 'VBlank';
			$this->load->view('dashboard', $data);
		} else {
			redirect(site_url('Login'));
		}
	}

	public function DataBarang()
	{



		if ($this->uri->segment(4) == 'view') {
			$id_barang = $this->uri->segment(3);
			$tampil = $this->MSudi->GetDataWhere('tbl_barang', 'id_barang', $id_barang)->row();
			$data['title'] = 'Update data';
			$data['detail']['id_barang'] = $tampil->id_barang;
			$data['detail']['nama_barang'] = $tampil->nama_barang;
			$data['detail']['stok'] = $tampil->stok;
			$data['detail']['tgl_masuk'] = $tampil->tgl_masuk;
			$data['content'] = 'VFormUpdateBarang';
		} else {
			$data['DataBarang'] = $this->MSudi->GetData('tbl_barang');
			$data['content'] = 'VBarang';
			$data['title'] = 'Data Barang';
		}


		$this->load->view('dashboard', $data);
	}


	public function TambahBarangBaru()
	{
		$data['content'] = 'VTambahBarang';
		$this->load->view('dashboard', $data);
	}

	public function VFormAddBarang()
	{
		$data['DataBarang'] = $this->MSudi->GetData('tbl_barang');
		$data['title'] = 'Tambah Data';
		$data['content'] = 'VFormAddBarang';
		$this->load->view('dashboard', $data);
	}
	public function AddDatabarang()
	{
		$add['id_barang'] = '';
		$add['nama_barang'] = $this->input->post('nama_barang');
		$add['stok'] = $this->input->post('stok');
		$add['tgl_masuk'] = $this->input->post('tgl_masuk');
		$this->MSudi->AddData('tbl_barang', $add);
		redirect(site_url('Welcome/Databarang'));
	}



	public function UpdateDatabarang()
	{
		$id_barang = $this->input->post('id_barang');
		$update['nama_barang'] = $this->input->post('nama_barang');
		$update['stok'] = $this->input->post('stok');
		$update['tgl_masuk'] = $this->input->post('tgl_masuk');
		$this->MSudi->UpdateData('tbl_barang', 'id_barang', $id_barang, $update);
		redirect(site_url('Welcome/Databarang'));
	}


	public function DeleteDatabarang()
	{
		$id_barang = $this->uri->segment('3');
		$this->MSudi->DeleteData('tbl_barang', 'id_barang', $id_barang);
		redirect(site_url('Welcome/Databarang'));
	}



	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}
}
