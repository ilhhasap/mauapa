<?php 

class MauApa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MauApa_model'); 
        $this->load->library('form_validation');
    }

    public function index() {

        $data['komen'] = $this->MauApa_model->getAllkomen();

        $data['user'] = $this->db->get_where('user', ['username']); 
        $data['username'] = $this->session->userdata('username');
        $data['judul'] = 'Fitur MauApa';
        $data['mauapa'] = $this->MauApa_model->getAllMauApa();

        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('tema', 'Tema', 'required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ( $this->form_validation->run() == FALSE ) {
                $this->load->view('templates/header', $data); 
                $this->load->view('MauApa/index');
                $this->load->view('templates/footer'); 
        }
        else {
            $this->MauApa_model->bagikanPesan();
            $this->session->set_flashdata('flash', 'Dibagikan');
            redirect('MauApa');
        }
       
    }

    public function komen() {
        $this->MauApa_model->bagikanKomen();
        redirect('MauApa');
    }


    
    public function getProfil($id) {
        $data['judul'] = 'My Profil';
        $data['user'] = $this->MauApa_model->getProfil($id);
        $data['jenis_kelamin'] = ['Laki laki', 'Perempuan'];
        

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|alpha|min_length[8]|trim|is_unique[user.username]',[
            'is_unique' => 'Username sudah digunakan'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|trim');
        $this->form_validation->set_rules('password2', 'Password', 'matches[password]|required|trim');

        if ( $this->form_validation->run() ==  FALSE ) {
            
            $this->load->view('templates/User_header', $data);
            $this->load->view('MauApa/ubahProfil', $data);
            $this->load->view('templates/User_footer');
            
        } else { 
            $this->MauApa_model->getProfil();
             $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Diubah!</div>');
             redirect('Mauapa');
    }
    }

    


}