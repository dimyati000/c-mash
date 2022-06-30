<?php

class Laporan extends CI_Controller{
    public function __construct()
	{
			parent::__construct();
			$this->load->model('ModelLaporan');
			$this->load->model('ModelBarang');
	}

    public function index()
    {
        $data['laporan'] = $this->ModelLaporan->showData()->result();
        $this->load->view("layout/templateAdmin");
        $this->load->view("admin/laporan", $data);
    }
	// Tambah data laporan
    public function tambahData()
    {
        $namaPemesan = $this->input->post('namaPemesan');
        $jenisLaporan = $this->input->post('jenisLaporan');
        $barangTerbeli = $this->input->post('barangTerbeli');
        $totalHarga = $this->input->post('totalHarga');
        $keterangan = $this->input->post('keterangan');
        $tanggalPemesanan = $this->input->post('tanggalPemesanan');
       
        $data = array(
            'namaPemesan' => $namaPemesan,
            'jenisLaporan'   => $jenisLaporan,
            'barangTerbeli'      => $barangTerbeli,
            'totalHarga'       => $totalHarga,
            'keterangan' => $keterangan,
            'tanggalPemesanan' => $tanggalPemesanan,
            'tanggalDibuat' => date('Y-m-d H:i:s')
        );
        $this->ModelLaporan->tambahLaporan($data, 'tb_laporan');
        redirect('../Laporan');
    }
	// Edit data laporan berdasarkan id
    public function edit($idLaporan)
    {
      $where = array('idLaporan' => $idLaporan);
      $data['laporan'] = $this->ModelLaporan->editLaporan($where, 'tb_laporan')->result();
      $this->load->view("layout/templateAdmin");
      $this->load->view("admin/editLaporan", $data); 
    }
	// Update data laporan
    public function update()
    {
        $idLaporan = $this->input->post('idLaporan');
        $namaPemesan = $this->input->post('namaPemesan');
        $jenisLaporan = $this->input->post('jenisLaporan');
        $barangTerbeli = $this->input->post('barangTerbeli');
        $totalHarga = $this->input->post('totalHarga');
        $keterangan = $this->input->post('keterangan');
        $tanggalPemesanan = $this->input->post('tanggalPemesanan');

        $data = array(
            'namaPemesan' => $namaPemesan,
            'jenisLaporan' => $jenisLaporan,
            'totalHarga' => $totalHarga,
            'barangTerbeli' => $barangTerbeli,
            'keterangan' => $keterangan,
            'tanggalPemesanan' => $tanggalPemesanan
        );
        $where = array(
            'idLaporan' => $idLaporan
        );
        $this->ModelBarang->updateData($where, $data, 'tb_laporan');
        redirect('../Laporan');
    }
	
	// Delete data laporan
    public function delete($idLaporan)
    {
        $where = array('idLaporan' => $idLaporan);
        $this->ModelLaporan->hapusData($where, 'tb_laporan');
        redirect('../Laporan');
    }    
}
