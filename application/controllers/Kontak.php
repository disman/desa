<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m', 'kategori', true);
    }
    public function index()
    {
        $data['kategori'] = $this->kategori->getAll();
        $data['title'] = "Kontak";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('kontak/index');
        $this->load->view('themes/footer');
    }
}
