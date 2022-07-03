<?php
class ModelLaporan extends CI_Model{
    //ini adalah modal untuk mengambil data dari tb layanan demi kebutuhan laporan pelayanan
    public function laporanDataPelayanan($filter)
    {   
        $jenis_layanan = $filter['jenis_layanan'];
        return $this->db->get_where("tb_layanan", array('jenisLayanan' => $jenis_layanan));
    }

    //ini adalah modal untuk mengambil data dari tb layanan demi kebutuhan laporan penjualan
    public function showDataPenjualan()
    {
        return $this->db->get('tb_invoice');
    }


    public function tambahLaporan($data, $table)
    {
        return $this->db->insert($table, $data);
    }
    public function editLaporan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function hapusData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}