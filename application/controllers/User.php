<?php
/**
 * Created by PhpStorm.
 * User: R.O.G
 * Date: 11/24/2017
 * Time: 12:52 AM
 */



class User extends CI_Controller {
    //untuk memastikan  setelah login ke menu utama

    public function ProfileAdmin() {
        //untuk memastikan ke halaman utama harus login terlebih dahulu
        if($_SESSION['user_logged'] == FALSE) {
            $this->session->set_flashdata("error","Please login first to view this page!! ");
            redirect("auth/login");
        }

        $this->load->view('admin/profile');
    }

    public function ProfilePegawai() {
        //untuk memastikan ke halaman utama harus login terlebih dahulu
        if($_SESSION['user_logged'] == FALSE) {
            $this->session->set_flashdata("error","Please login first to view this page!! ");
            redirect("auth/login");
        }

        $this->load->view('pegawai/profile');
    }
}