<?php

/**
 *Untuk autentufikasi pada login
 */
class Admin_model extends CI_Model
{

     public function Tambah_Akun()
     {
         //menambahkan user baru ke database
         $data = array(
             'name' => $_POST['name'],
             'username' => $_POST['username'],
             'password' => md5($_POST['password'])
         );
         $this->db->insert('user', $data);
         $id = $this->db->insert_id();
         return $id;
     }

    public function Tampil_Akun()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }

    public function Edit_Akun($id)
    {
        $this->db->select('*');
        $this->db->where('id_pegawai', $id);
        $this->db->from('user');
        $query = $this->db->get();
        return $query->row();
    }

    public function Update_Barang($id)
    {
        $data = array(
            'name' => $_POST['name'],
            'username' => $_POST['username'],
        );
        $this->db->where('id_pegawai', $id);
        $this->db->update('user', $data);

        return $id;
    }

    public function Delete_Admin($id)
    {
        $this->db->where('id_pegawai', $id);
        $this->db->delete('user');
    }

}
