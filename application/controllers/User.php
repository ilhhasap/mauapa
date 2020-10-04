<?php 
defined('BASEPATH') or exit('NO direct script access allowed');
 class User extends CI_Controller{

     function __construct()
     {
         parent::__construct();
         $this->load->helper('url', 'form');
         $this->load->library('form_validation');
     }

        public function index() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

         if ( $this->form_validation->run() == FALSE ) {
             $data['judul'] = 'Halaman LogIn';
            $this->load->view('templates/User_header', $data);
            $this->load->view('user/login');
            $this->load->view('templates/User_footer');
         } else {
             $this->_login();
         }
     }

     private function _login(){
         $username = $this->input->post('username');
         $password= $this->input->post('password');

         $user = $this->db->get_where('user', ['username' => $username]) -> row_array();
         if ( $user ) {
            if ( password_verify($password, $user['password']) ) {
                $data = [
                    'username' => $user['username'],
                    'id' => $user['id']
                ];
                $this->session->set_userdata($data);
                redirect(base_url());
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username/password belum terdaftar!</div>');
                redirect('User');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username/password belum benar!</div>');
            redirect('User');
         }
     }


    //  REGISTER
    public function register(){

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|alpha|min_length[8]|trim|is_unique[user.username]',[
            'is_unique' => 'Username sudah digunakan'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|trim');
        $this->form_validation->set_rules('password2', 'Password', 'matches[password]|required|trim');

        if ( $this->form_validation->run() ==  FALSE ) {
            $data['judul'] = 'Halaman Register';
            $this->load->view('templates/User_header', $data);
            $this->load->view('user/register');
            $this->load->view('templates/User_footer');
            
        } else { 
             $data = [
                 'nama' => htmlspecialchars($this->input->post('nama',true)),
                 'username' => htmlspecialchars($this->input->post('username', true)),
                 'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                 'data_dibuat' => date('Y-m-d')
             ];

             $this->db->insert('user', $data);
             $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat anda telah terdaftar, Silahkan Login!</div>');
             redirect('User');
    }
}
        

    public function logout() {
            $this->session->sess_destroy();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda telah logOut!</div>');
             redirect('User');
    }

    

       

    //         $this->User_model->register($enc_password);
    //         // SET PESAN
    //         $this->session->set_flashdata('user_registered', 'Selamat anda berhasil Registrasi dan Silahkan Login');
    //         redirect('User/login');
    //     }
    // }



    // public function login(){
    //     $data["judul"] = 'Halaman Login';

    //     $this->form_validation->set_rules('username', 'Username', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');

    //     if ( $this->form_validation->run() === FALSE ) {
    //         $this->load->view('templates/header');
    //         $this->load->view('login', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         // USERNAME
    //         $username = $this->input->post('username');
    //         // PASSWORD
    //         $password = md5($this->input->post('password'));

    //         // LOGIN
    //         $user_id = $this->User_model->login($username, $password);

    //         if ( $user_id ) {
    //             // BUAT SESSION
    //             $user_data = array(
    //                 'user_id' => $user_id,
    //                 'username' => $username,
    //                 'logged_in' => true );

    //                 $this->session->set_userdata($user_data);

    //                 // BUAT PESAN
    //                 $this->session->set_flashdata('user_loggedin', 'Selamat anda telah Login');
    //                 redirect(base_url('url');
    //         }
    //     }
    // }


    // // LOGOUT
    // public function logout() {
    //     $this->session->unset_userdata('logged_in');
    //     $this->session->unset_userdata('user_id');
    //     $this->session->unset_userdata('username');

    //     // BUAT PESAN
    //     $this->session->set_flashdata('user_loggedout', 'Kamu berhasil LogOut');
    //     redirect('User/login');
    // }

    // // CEK USERNAME
    // public function check_username_exists($username) {
    //     $this->form_validation->set_message('check_username_exists', 'Username sudah terdaftar, Gunakan yang lain');
    //     if ( $this->Login_model->check_username_exists($username) ) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
  
}