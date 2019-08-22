<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_m', 'menu', true);
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Management menu";
        $data['menu'] = $this->menu->getAll();
        $rules = $this->menu->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/menu/index');
            $this->load->view('_partials/footer');
        } else {
            $this->menu->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambahkan!</div>');
            redirect('admin/menu');
        }
    }

    public function edit($id = null)
    {
        $rules = $this->menu->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Management menu";
            $data['menu'] = $this->menu->getAll();
            $data['editMenu'] = $this->menu->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/menu/edit');
            $this->load->view('_partials/footer');
        } else {
            $this->menu->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil diupdate!</div>');
            redirect('admin/menu');
        }
    }

    public function hapus($id = null)
    {
        if (!isset($id))
            show_404();
        $delete = $this->menu->delete($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil dihapus!</div>');
            redirect('admin/menu');
        }
    }
}
