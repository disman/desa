<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kabardesa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kabardesa_m', 'kabardesa', true);
        $this->load->model('menu_m', 'menu', true);
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Kabar desa";
        $data['menu'] = $this->menu->getAll();
        $data['kabardesa'] = $this->kabardesa->getAll();
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/kabardesa/index');
        $this->load->view('_partials/footer');
    }

    public function tambah()
    {
        $rules = $this->kabardesa->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Kabar desa";
            $data['menu'] = $this->menu->getAll();
            $data['kabardesa'] = $this->kabardesa->getAll();
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/kabardesa/add');
            $this->load->view('_partials/footer');
        } else {
            $this->kabardesa->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Info desa berhasil ditambahkan!</div>');
            redirect('admin/kabardesa');
        }
    }

    public function edit($id = null)
    {
        $rules = $this->kabardesa->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Kabar desa";
            $data['menu'] = $this->menu->getAll();
            $data['kabardesa'] = $this->kabardesa->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/kabardesa/edit');
            $this->load->view('_partials/footer');
        } else {
            $this->kabardesa->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Info desa berhasil diupdate!</div>');
            redirect('admin/kabardesa');
        }
    }

    public function hapus($id = null)
    {
        if (!isset($id))
            show_404();
        $delete = $this->kabardesa->delete($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Info desa berhasil dihapus!</div>');
            redirect('admin/kabardesa');
        }
    }
}
