<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m', 'kategori', true);
        $this->load->model('menu_m', 'menu', true);
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Kategori";
        $data['menu'] = $this->menu->getAll();
        $data['kategori'] = $this->kategori->getAll();
        $this->form_validation->set_rules(
            'category',
            'Kategori',
            'trim|required',
            array('required' => 'Kategori tidak boleh kosong!')
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/kategori/index');
            $this->load->view('_partials/footer');
        } else {
            $this->kategori->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil ditambahkan!</div>');
            redirect('admin/kategori');
        }
    }

    public function edit()
    {
        $data['title'] = "Edit kategori";
        $where = $this->uri->segment(4);
        $data['kategori'] = $this->kategori->edit($where);
        $data['menu'] = $this->menu->getAll();
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/kategori/edit');
        $this->load->view('_partials/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $this->kategori->update($where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil diupdate!</div>');
        redirect('admin/kategori');
    }

    public function hapus()
    {
        $where = $this->uri->segment(4);
        $this->kategori->delete($where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil dihapus!</div>');
        redirect('admin/kategori');
    }
}
