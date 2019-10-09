<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_m', 'galery', true);
        $this->load->model('menu_m', 'menu', true);
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Galery";
        $data['menu'] = $this->menu->getAll();
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/galery/index');
        $this->load->view('_partials/footer');
    }

    public function listFoto()
    {
        $data['title'] = "Galery";
        $data['menu'] = $this->menu->getAll();
        $data['image'] = $this->galery->getAllImage();
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/galery/list_foto');
        $this->load->view('_partials/footer');
    }

    public function tambahFoto()
    {
        $rules = $this->galery->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $this->index();
        } else {
            $this->galery->saveImage();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto berhasil ditambahkan!</div>');
            redirect('admin/galery/listFoto');
        }
    }

    public function editFoto($id = null)
    {
        $rules = $this->galery->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Galery";
            $data['menu'] = $this->menu->getAll();
            $data['foto'] = $this->galery->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/galery/edit_foto');
            $this->load->view('_partials/footer');
        } else {
            $this->artikel->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto berhasil diupdate!</div>');
            redirect('admin/galery/listFoto');
        }
    }

    public function hapusFoto($id = null)
    {
        if (!isset($id))
            show_404();
        $delete = $this->galery->deleteImage($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto berhasil dihapus!</div>');
            redirect('admin/galery/listFoto');
        }
    }
}
