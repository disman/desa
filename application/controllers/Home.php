<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m', 'kategori', true);
    }
    public function index()
    {
        $data['penduduk'] = $this->db->get('penduduk')->num_rows();
        // $data['pria'] = $this->db->get_where('penduduk', array('gender' => 'Pria'));
        // echo ($data['pria']);
        // die;
        // $this->db->select('*');
        // $this->db->where('gender = gender');
        // $pria = $this->db->get('penduduk')->count();
        // $data['pria'] = $pria;

        // $this->db->select('*');
        // $this->db->where('gender = gender');
        // $wanita = $this->db->get('penduduk')->result();
        // $data['wanita'] = $wanita;

        $data['kategori'] = $this->kategori->getAll();
        $data['title'] = "Selamat Datang";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/slide-show');
        $this->load->view('themes/kabar-terkini');
        $this->load->view('themes/struktur-organisasi');
        $this->load->view('themes/jumlah-penduduk');
        $this->load->view('themes/testimoni');
        $this->load->view('themes/recent-artikel');
        $this->load->view('themes/footer');
    }
}
