<?php 
    class Home extends CI_Controller {
        
        public function index(){
            $data['user'] = $this->db->get_where('user', ['username']); 
            $data['username'] = $this->session->userdata('username');

                $data['judul'] = 'MauApa';
                $this->load->view('templates/header', $data);
                $this->load->view('home/index');
                $this->load->view('templates/footer');  

        }
    }
 