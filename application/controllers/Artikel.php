<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m', 'kategori', true);
        $this->load->model('artikel_m', 'artikel', true);
    }
    public function index()
    {
        $data['kategori'] = $this->kategori->getAll();
        $data['artikel'] = $this->artikel->getAll();
        $data['title'] = "Artikel";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('artikel/index');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }

    public function readmore()
    {
        $data['kategori'] = $this->kategori->getAll();
        $data['readmore'] = $this->artikel->readmore();
        $data['title'] = "Artikel";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('artikel/readmore');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
