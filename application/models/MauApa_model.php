<?php 

class MauApa_model extends CI_Model {
    public function getAllMauApa() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('bagikan')->result_array();
    }

    public function bagikanPesan() 
    {
        $data = [
        "fitur" => htmlspecialchars($this->input->post('fitur', true)),
        "lokasi" => htmlspecialchars($this->input->post('lokasi', true)),
        "tema" => htmlspecialchars($this->input->post('tema', true)),
        "pesan" => htmlspecialchars($this->input->post('pesan', true)),
        "tanggal" => htmlspecialchars(date('Y-m-d')),
        "nama" => htmlspecialchars($this->input->post('nama', true))
        ];

        $this->db->insert('bagikan', $data);
    }

    public function getAllkomen() {
        return $this->db->get('komen')->result_array();
    }   
    public function bagikanKomen() 
    {
        $data = [
        "id_bagikan" => htmlspecialchars($this->input->post('id_bagikan', true)),
        "pesan" => htmlspecialchars($this->input->post('pesan', true)),
        "nama" => htmlspecialchars($this->session->userdata('username'))
        ];

        $this->db->insert('komen', $data);
    }

    public function getProfil($id) {
        return $this->db->get_where('user', ['id' => $id])->row_array();
        // $data['nama'] = $this->db->get_where('user', ['id']);
    }

    public function UbahProfil() 
    {
        $data = [
        "nama" => $this->input->post('nama', true),
        "username" => $this->input->post('username', true),
        "password" => $this->input->post('password', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}