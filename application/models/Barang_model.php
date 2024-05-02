<?php

class Barang_model extends CI_Model
{

    public function getAllBarang()
    {
        $this->db->order_by('id', 'asc');
        return  $this->db->get('barang')->result_array();

    }

    public function tambahBarang($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

    public function getBarangById($id)
    {
        return $this->db->get_where('barang',['id' => $id])->row_array();
        
    }

    public function editBarang($id)
    {
        $data['barang'] = $this->db->get_where('barang',['id' => $id])->row_array();
       
           $data = [
                    "nama_barang" => $this->input->post('nama_barang', true),
                    "stok" => $this->input->post('stok',  true),
                    "jumlah_terjual" => $this->input->post('jumlah_terjual', true),
                    "tanggal" => $this->input->post('tanggal', true),
                    "jenis_barang" => $this->input->post('jenis_barang', true)
           ];
           $this->db->where('id', $this->input->post('id'));
           $this->db->update('barang', $data);
    }

    public function deleteData($id)
    {
        $this->db->where($id);
        return $this->db->delete('barang');
    }
}

   
