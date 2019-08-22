<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kabardesa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m', 'kategori', true);
        $this->load->model('kabardesa_m', 'kabardesa', true);
    }
    public function index()
    {
        $data['kategori'] = $this->kategori->getAll();
        $data['kabardesa'] = $this->kabardesa->getAll();
        $data['title'] = "Kabar desa";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('kabardesa/index');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }

    public function readmore()
    {
        $data['kategori'] = $this->kategori->getAll();
        $data['readmore'] = $this->artikel->readmore();
        $data['title'] = "Opini";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('kabardesa/readmore');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
