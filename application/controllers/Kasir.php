<?php
class Kasir extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKasir');
    }

	public function index()
	{
		$this->load->view("layout/templateAdmin");
		$this->load->view("admin/kasir");
	}
	// Tambah Data Kasir
	public function tambahData()
	{
		$nama = $this->input->post('nama');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');
		$sub_total = $this->input->post('sub_total');
		$bayar = $this->input->post('bayar');
		$kembalian = $this->input->post('kembalian');
		$data = array(
			'namaPelanggan' => $nama,
			'tanggal'=> $tanggal,
			'keterangan' => $keterangan,
			'total' => $sub_total,
			'bayar' => $bayar,
			'kembalian' => $kembalian 
		);
		$this->ModelKasir->tambahData($data, 'tb_kasir');
        redirect('../Kasir');

	} 
	// Tampilkan Data kasir
	public function data()
	{
        $data['kasir'] = $this->ModelKasir->showData()->result();
		$this->load->view("layout/templateAdmin");
		$this->load->view("admin/menuKasir", $data);	
	}
	
	// delete Data Kasir
	public function delete($id)
    {
        $where = array('id' => $id);
        $this->ModelKasir->hapusData($where, 'tb_kasir');
        redirect('Kasir/data');
    }    
}
