<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opini extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m', 'kategori', true);
        $this->load->model('opini_m', 'opini', true);
    }
    public function index()
    {
        $data['kategori'] = $this->kategori->getAll();
        $data['opini'] = $this->opini->getAll();
        $data['title'] = "Opini";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('opini/index');
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
        $this->load->view('opini/readmore');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
