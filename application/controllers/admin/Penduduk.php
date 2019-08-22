<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk_m');
        $this->load->model('menu_m');
        is_logged_in();
    }

    public function index()
    {
        $menu = $this->menu_m;
        $penduduk = $this->penduduk_m;
        $data['menu'] = $menu->getAll();
        $data['penduduk'] = $penduduk->getAll();
        $data['title'] = "Penduduk";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/penduduk/index');
        $this->load->view('_partials/footer');
    }

    public function tambah()
    {
        $menu = $this->menu_m;
        $penduduk = $this->penduduk_m;
        $rules = $penduduk->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Penduduk";
            $data['menu'] = $menu->getAll();
            $data['penduduk'] = $penduduk->getAll();
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/penduduk/add');
            $this->load->view('_partials/footer');
        } else {
            $penduduk->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penduduk berhasil ditambahkan!</div>');
            redirect('admin/penduduk');
        }
    }

    public function edit($id = null)
    {
        $menu = $this->menu_m;
        $penduduk = $this->penduduk_m;
        $rules = $penduduk->editRules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Penduduk";
            $data['menu'] = $menu->getAll();
            $data['penduduk'] = $penduduk->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/penduduk/edit');
            $this->load->view('_partials/footer');
        } else {
            $penduduk->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penduduk berhasil diupdate!</div>');
            redirect('admin/penduduk');
        }
    }

    public function hapus($id = null)
    {
        $penduduk = $this->penduduk_m;
        if (!isset($id))
            show_404();
        $delete = $penduduk->delete($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penduduk berhasil dihapus!</div>');
            redirect('admin/penduduk');
        }
    }
}
