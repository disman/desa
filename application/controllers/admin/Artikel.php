<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('artikel_m', 'artikel', true);
        $this->load->model('menu_m', 'menu', true);
        $this->load->model('kategori_m', 'kategori', true);
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Artikel";
        $data['menu'] = $this->menu->getAll();
        $data['get_artikel'] = $this->artikel->getAllArtikel();
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/artikel/index');
        $this->load->view('_partials/footer');
    }

    public function tambah()
    {
        $rules = $this->artikel->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Artikel";
            $data['menu'] = $this->menu->getAll();
            $data['artikel'] = $this->artikel->getAll();
            $data['kategori'] = $this->kategori->getAll();
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/artikel/add');
            $this->load->view('_partials/footer');
        } else {
            $this->artikel->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Artikel berhasil ditambahkan!</div>');
            redirect('admin/artikel');
        }
    }

    public function edit($id = null)
    {
        $rules = $this->artikel->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Artikel";
            $data['menu'] = $this->menu->getAll();
            $data['artikel'] = $this->artikel->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/artikel/edit');
            $this->load->view('_partials/footer');
        } else {
            $this->artikel->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Artikel berhasil diupdate!</div>');
            redirect('admin/artikel');
        }
    }

    public function hapus($id = null)
    {
        if (!isset($id))
            show_404();
        $delete = $this->artikel->delete($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Artikel berhasil dihapus!</div>');
            redirect('admin/artikel');
        }
    }
}
