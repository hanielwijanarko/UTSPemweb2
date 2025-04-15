<?php

class Buku extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Buku_model');
    }
    public function index()
    {
        $this->load->model('Buku_model');
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->Buku_model->getAllBuku();
        $this->load->view('templates/header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }
}

    public function daftar_buku()
    {
        $data['buku'] = [
            ['judul' => 'Laskar Pelangi'],
            ['judul' => 'Bumi Manusia'],
            ['judul' => 'Negeri 5 Menara']
        ];

        $this->load->view('daftar_buku', $data);
    }
