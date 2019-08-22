<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk_m');
        $this->load->model('kategori_m');
    }

    public function index()
    {
        $penduduk = $this->penduduk_m;
        $data['penduduk'] = $penduduk->getAll();
        $kategori = $this->kategori_m;
        $data['kategori'] = $kategori->getAll();
        $data['title'] = "Penduduk";

        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('penduduk/index');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
