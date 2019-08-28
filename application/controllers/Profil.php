<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profil_m');
        $this->load->model('kategori_m');
    }

    public function desa()
    {
        $kategori = $this->kategori_m;
        $profil = $this->profil_m;
        $data['kategori'] = $kategori->getAll();
        $data['gambaran_umum'] = $profil->getGambaranUmum();
        $data['title'] = "Profil desa bahari";

        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('profil/desa');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }

    public function pemdes()
    {
        $kategori = $this->kategori_m;
        $profil = $this->profil_m;
        $data['kategori'] = $kategori->getAll();
        $data['profilPemdes'] = $profil->getProfilPemdes();
        $data['title'] = "Profil Pemerintah Desa Bahari";

        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('profil/pemdes');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }

    public function bpd()
    {
        $kategori = $this->kategori_m;
        $profil = $this->profil_m;
        $data['kategori'] = $kategori->getAll();
        $data['profilBpd'] = $profil->getProfilBpd();
        $data['title'] = "Profil Badan Permusyawaratan Desa Bahari";

        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('profil/bpd');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
