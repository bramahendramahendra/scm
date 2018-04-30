<?php


class Home extends CI_Controller {
    public function indexAdmin()
    {
        //untuk memanggil ke Database
        $this->load->model('Admin_model');
        $admin = $this->Admin_model->Tampil_Akun();

        //Untuk membuka halaman pada Sidebar
        $data['konten'] = 'admin/konten';
        $data['admin'] = $admin;
        $this->load->view('admin/Template_Home',$data);
    }

    public function indexManager()
    {
        $data['konten'] = 'manager/konten';
        $this->load->view('manager/Template_Home',$data);
    }

    public function indexPegawai()
    {
        $data['konten'] = 'pegawai/konten';
        $this->load->view('pegawai/Template_Home',$data);
    }

    public function dashboard()
    {
        echo "ini adalah dashboard untuk pendaftaran";
    }



}