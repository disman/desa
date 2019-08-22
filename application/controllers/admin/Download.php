<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('download_m', 'download', true);
        $this->load->model('menu_m', 'menu', true);
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Download";
        $data['menu'] = $this->menu->getAll();
        $data['download'] = $this->download->getAll();
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/download/index');
        $this->load->view('_partials/footer');
    }

    public function tambah()
    {
        $rules = $this->download->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $this->index();
        } else {
            $this->download->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berkas berhasil ditambahkan!</div>');
            redirect('admin/download');
        }
    }

    public function hapus($id = null)
    {
        if (!isset($id))
            show_404();
        $delete = $this->download->delete($id);

        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berkas berhasil dihapus!</div>');
            redirect('admin/download');
        }
    }
}
