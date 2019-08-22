<?php

class Upload extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    // public function index()
    // {
    //     $this->load->view('upload_form', array('error' => ' '));
    // }

    // public function do_upload()
    // {
    //     $config['upload_path']          = './upload_image/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['max_size']             = 1000;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('userfile')) {
    //         $error = array('error' => $this->upload->display_errors());

    //         $this->load->view('upload_form', $error);
    //     } else {
    //         $data = array('upload_data' => $this->upload->data());

    //         $this->load->view('upload_success', $data);
    //     }
    // }


    function index()
    {
        $this->load->view('upload_form');
    }

    function do_upload()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|csv';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
    }
}
