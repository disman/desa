<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m');
    }

    public function index()
    {
        $kategori = $this->kategori_m;
        $data['kategori'] = $kategori->getAll();
        $data['title'] = "Galeri";

        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('galeri/index');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
