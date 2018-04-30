<?php

class  Grocery extends CI_Controller
{
    public function InputDataBarang()
    {

        if (isset($_POST['TambahBarang'])) {
                //menambahkan user baru ke database
                $this->load->model('Grocery_model');

                //Memastikan data succes atau tidak
                if($this->Grocery_model->Tambah_Barang()) {
                    $this->session->set_flashdata('success', 'Product Added Successfully');
                    //Setelah Data dipastikan success
                    redirect("Home/indexPegawai", "refresh");
                } else {
                    $this->session->set_flashdata('error', 'An Error occurred. Please try again later');
                    //Setelah Data dipastikan fail
                    redirect("Grocery/InputDataBarang", "refresh");
                }

        }
        $datakonten['konten'] = 'pegawai/InputDataBarang/Tampilan';
        $this->load->view('pegawai/Template_Home', $datakonten);
    }

    public function DataBarang()
    {
        //untuk memanggil ke Database
        $this->load->model('Grocery_model');
        $products = $this->Grocery_model->Tampil_Barang();

        //Untuk membuka halaman pada Sidebar
        $data['konten'] = 'pegawai/DataBarang/Tampilan';
        $data['grocery'] = $products;

        //Untuk menload ke view
        $this->load->view('pegawai/Template_Home', $data);
        //$this->load->view('pegawai/DataBarang/tampilan', $dataproducts);

    }

    public function DataKeuangan()
    {
        //untuk memanggil ke Database
        $this->load->model('Grocery_model');
        $products = $this->Grocery_model->Tampil_Barang();
        $Pemasukan = $this->Grocery_model->Pemasukan();


        //Untuk membuka halaman pada Sidebar
        $data['konten'] = 'pegawai/DataKeuangan/Tampilan';
        $data['grocery'] = $products;
        $data['pemasukan'] = $Pemasukan;

        $this->load->view('pegawai/Template_Home', $data);
    }

}