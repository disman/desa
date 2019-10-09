<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m');
        $this->load->model('artikel_m');
        $this->load->model('penduduk_m');
    }
    public function index()
    {
        $penduduk = $this->penduduk_m;
        $data['penduduk'] = $penduduk->countAll();
        $kategori = $this->kategori_m;
        $artikel = $this->artikel_m;
        $data['kategori'] = $kategori->getAll();
        $data['news'] = $artikel->kabarTerkini();
        $data['recent'] = $artikel->recentArtikel();
        $data['title'] = "Selamat Datang";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/slide-show');
        $this->load->view('themes/kabar-terkini', $data);
        $this->load->view('themes/struktur-organisasi');
        $this->load->view('themes/jumlah-penduduk');
        $this->load->view('themes/testimoni');
        $this->load->view('themes/recent-artikel');
        $this->load->view('themes/footer');
    }
}
