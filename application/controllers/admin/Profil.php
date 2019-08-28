<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profil_m');
        $this->load->model('menu_m');
        is_logged_in();
    }

    public function desa()
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $data['menu'] = $menu->getAll();
        $data['gambaran_umum'] = $profil->getGambaranUmum();
        $data['title'] = "Profil";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/profil/desa');
        $this->load->view('_partials/footer');
    }

    public function updateProfilDesa($id = null)
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $rules = $profil->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Profil";
            $data['menu'] = $menu->getAll();
            $data['profilDesa'] = $profil->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/profil/edit_profil_desa');
            $this->load->view('_partials/footer');
        } else {
            $profil->updateProfilDesa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">profil desa berhasil diupdate!</div>');
            redirect('admin/profil/desa');
        }
    }

    public function pemdes()
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $data['menu'] = $menu->getAll();
        $data['profilPemdes'] = $profil->getProfilPemdes();
        $data['title'] = "Profil";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/profil/pemdes');
        $this->load->view('_partials/footer');
    }

    public function updateProfilPemdes($id = null)
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $rules = $profil->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Profil";
            $data['menu'] = $menu->getAll();
            $data['profilPemdes'] = $profil->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/profil/edit_profil_pemdes');
            $this->load->view('_partials/footer');
        } else {
            $profil->updateProfilPemdes();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil pemerintah desa berhasil diupdate!</div>');
            redirect('admin/profil/pemdes');
        }
    }

    public function bpd()
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $data['menu'] = $menu->getAll();
        $data['profilBpd'] = $profil->getProfilBpd();
        $data['title'] = "Profil";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/profil/bpd');
        $this->load->view('_partials/footer');
    }

    public function updateProfilBpd($id = null)
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $rules = $profil->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Profil";
            $data['menu'] = $menu->getAll();
            $data['profilBpd'] = $profil->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/profil/edit_profil_bpd');
            $this->load->view('_partials/footer');
        } else {
            $profil->updateProfilBpd();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">profil BPD berhasil diupdate!</div>');
            redirect('admin/profil/bpd');
        }
    }
}
