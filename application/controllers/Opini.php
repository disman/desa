<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opini extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m', 'kategori', true);
        $this->load->model('opini_m', 'opini', true);
        $this->load->helper('text');
    }
    public function index()
    {
        // konfigurasi pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . '/opini/index/';
        $config['total_rows'] = $this->opini->countAllOpini();
        $config['per_page'] = 2;

        // styling
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<span class="all">';
        $config['first_tag_close'] = '</span>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<span class="all">';
        $config['last_tag_close'] = '</span>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<span class="all">';
        $config['next_tag_close'] = '</span>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<span class="all">';
        $config['prev_tag_close'] = '</span>';

        $config['cur_tag_open'] = '<span class="current">';
        $config['cur_tag_close'] = '</span>';

        $config['num_tag_open'] = '<a class="inactive">';
        $config['num_tag_close'] = '</a>';

        $config['attributes'] = array('class' => 'current');

        $this->pagination->initialize($config);

        $data['kategori'] = $this->kategori->getAll();
        // $data['opini'] = $this->opini->getAll();
        $data['start'] = $this->uri->segment(3);
        $data['opini'] = $this->opini->getAllOpini($config['per_page'], $data['start']);
        $data['title'] = "Opini";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('opini/index');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }

    public function readmore()
    {
        $id = $this->uri->segment(3);
        $data['kategori'] = $this->kategori->getAll();
        $data['opini'] = $this->opini->readmore($id);
        $data['title'] = "Opini";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('opini/readmore');
        $this->load->view('themes/sidebar');
        $this->load->view('themes/footer');
    }
}
