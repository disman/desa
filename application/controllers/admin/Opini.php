<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opini extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('opini_m', 'opini', true);
        $this->load->model('menu_m', 'menu', true);
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Opini";
        $data['menu'] = $this->menu->getAll();
        $data['opini'] = $this->opini->getAll();
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/opini/index');
        $this->load->view('_partials/footer');
    }

    public function tambah()
    {
        $rules = $this->opini->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Opini";
            $data['menu'] = $this->menu->getAll();
            $data['opini'] = $this->opini->getAll();
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/opini/add');
            $this->load->view('_partials/footer');
        } else {
            $this->opini->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Opini berhasil ditambahkan!</div>');
            redirect('admin/opini');
        }
    }

    public function edit($id = null)
    {
        $rules = $this->opini->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Opini";
            $data['menu'] = $this->menu->getAll();
            $data['opini'] = $this->opini->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/opini/edit');
            $this->load->view('_partials/footer');
        } else {
            $this->opini->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Opini berhasil diupdate!</div>');
            redirect('admin/opini');
        }
    }

    public function hapus($id = null)
    {
        if (!isset($id))
            show_404();
        $delete = $this->opini->delete($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Opini berhasil dihapus!</div>');
            redirect('admin/opini');
        }
    }
}
