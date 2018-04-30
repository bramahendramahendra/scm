<?php

class  Admin extends CI_Controller {

    public function TambahAkun()
    {
        //Setelah klik register langsung ke akun ini
        if(isset($_POST['register'])) {
            //Memunculkan kata kata error jika tidak mengisi username , meail,password, dan no hp
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');


            //Jika form validationnya true
            if ($this->form_validation->run() == TRUE) {
                echo 'form validated';

                //menambahkan user baru ke database
                $this->load->model('Admin_model');

                //Memastikan data succes atau tidak
                if($this->Admin_model->Tambah_Akun()) {
                    $this->session->set_flashdata('success', 'Product Added Successfully');
                    //Setelah Data dipastikan success
                    redirect("Home/indexAdmin", "refresh");
                } else {
                    $this->session->set_flashdata('error', 'An Error occurred. Please try again later');
                    //Setelah Data dipastikan fail
                    redirect("Admin/TambahAkun", "refresh");
                }

                //session masih error tidak dapat memunculkan nama
                //Error ===  $this->session->set_flashhdata("success", "Your account has been registered. You can login now");
                redirect("Home/indexAdmin", "refresh");
            }
        }
        //Jika berhasil menginputkan maka akan kembali ke Home
        $data['konten'] = 'admin/TambahAkun/Tampilan';
        $this->load->view('admin/Template_Home', $data);
    }

    public function EditAkun()
    {
        //untuk memanggil ke Database
        $this->load->model('Admin_model');
        $admin = $this->Admin_model->Tampil_Akun();

        //Untuk membuka halaman pada Sidebar
        $data['konten'] = 'admin/EditAkun/Tampilan';
        $data['admin'] = $admin;
        $this->load->view('admin/Template_Home',  $data);
    }

    public function Editing($id)
    {
        $this->load->model ('Admin_model');

        if (isset($_POST['update'])) {
            if ($this->Admin_model->Update_Barang($id)) {
                $this->session->set_flashdata('success', 'Product Updated Successfully');
                //Setelah Data dipastikan success
                redirect("Admin/EditAkun", "refresh");
            } else {
                $this->session->set_flashdata('error', 'An Error occurred. Please try again later');
                //Setelah Data dipastikan fail
                redirect("Admin/Editing", "refresh");
            }
        }

        $admin = $this->Admin_model->Edit_Akun($id);
        $data['admin'] = $admin;
        $this->load->view('admin/EditAkun/edit',  $data);
    }

    public function DeleteAkun()
    {
        //untuk memanggil ke Database
        $this->load->model('Admin_model');
        $admin = $this->Admin_model->Tampil_Akun();

        //Untuk membuka halaman pada Sidebar
        $data['konten'] = 'admin/DeleteAkun/Tampilan';
        $data['admin'] = $admin;
        $this->load->view('admin/Template_Home',  $data);
    }

    public function Delete($id)
    {
        //untuk memanggil ke Database
        $this->load->model('Admin_model');
        $this->Admin_model->Delete_Admin($id);
        redirect('Admin/DeleteAkun','refresh');
    }

}