<?php

/**
 *Untuk autentufikasi pada login
 */
class Login extends CI_Controller {

    // untuk controller pada logout
    public function logout()
    {
        //untuk mengarahkan jika controller jika mengetik logout maka kembali ke menu login
        unset($_SESSION);

        //untuk memastikan ke halaman utama harus login terlebih dahulu
        session_destroy();
        redirect("Login/Valid_Login","refresh");
    }

    //untuk controller pada login
    public function Valid_Login()
    {
        //untuk memastikan user mengisi username dan password
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        //untuk memvalidasi usernmae dan password
        if($this->form_validation->run() == TRUE) {
             $username = $_POST['username'];
             $password  = md5($_POST['password']);

             //check user in database
             $this->db->select('*');
             $this->db->from('user');
             $this->db->where(array('username' => $username, 'password' => $password));
             $query = $this->db->get();

             $user = $query->row();

             //if user exists
             if ($user->username == 'admin') {
                 //temporary message
                 $this->session->set_flashdata("success","You are logged in");

                 //set session variables
                 $_SESSION['user_logged'] = TRUE;
                 $_SESSION['username'] = $user->username;

                 //rtedirect
                 redirect("User/ProfileAdmin" , "refresh");
             } elseif ($user->username) {
                 //temporary message
                 $this->session->set_flashdata("success","You are logged in");

                 //set session variables
                 $_SESSION['user_logged'] = TRUE;
                 $_SESSION['username'] = $user->username;

                 //rtedirect
                 redirect("User/ProfilePegawai" , "refresh");
             } else {
                 $this->session->set_flashdata("error","NO such account exists in database");
                 redirect("auth/login", "refresh");
             }

        }
        $this->load->view('login');
    }

    public function register()
    {

        //untuk form-validation
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
                $data = array(
                    'name' => $_POST['name'],
                    'username' => $_POST['username'],
                    'password' => md5($_POST['password'])
                );
                $this->db->insert('users', $data);

                //session masih error tidak dapat memunculkan nama
                //Error ===  $this->session->set_flashhdata("success", "Your account has been registered. You can login now");
                redirect("auth/register", "refresh");
            }
        }
        //load view untuk register
        $this->load->view("register");
        
    }
}
