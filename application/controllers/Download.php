<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('download_m');
        $this->load->model('kategori_m');
        $this->load->model('artikel_m');
    }

    public function index()
    {
        $download = $this->download_m;
        $data['download'] = $download->getAll();
        $kategori = $this->kategori_m;
        $data['kategori'] = $kategori->getAll();
        $artikel = $this->artikel_m;
        $data['popular'] = $artikel->kabarTerkini();
        $data['title'] = "Download";

        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('download/index');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
