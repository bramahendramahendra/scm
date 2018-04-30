<?php

class Grocery_model extends CI_Model
{
    public function Tambah_Barang()
    {
        $data = array(
            'grocery_name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'stock' => $this->input->post('stock')
        );
        $this->db->insert('grocery', $data);
        $id = $this->db->insert_id();
        return $id;
    }

    public function Tampil_Barang()
    {
        $this->db->select('*');
        $this->db->from('grocery');
        $query = $this->db->get();
        return $query->result();
    }

    public function Pemasukan() {
        $this->db->select('*');
        $this->db->from('reports');
        $query = $this->db->get();
        return $query->result();
    }
}