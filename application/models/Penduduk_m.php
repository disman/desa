<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_m extends CI_Model
{
    private $_table = "penduduk";

    /*
	 * Start backend 
	 */
    public function rules()
    {
        $this->form_validation->set_rules(
            'nik',
            'Nomor induk kependudukan',
            'trim|required|is_unique[penduduk.nik]',
            ['is_unique' => 'NIK ini sudah terdaftar!']
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'trim|required'
        );

        $this->form_validation->set_rules(
            'gender',
            'Jenis kelamin',
            'trim|required'
        );

        $this->form_validation->set_rules(
            'usia',
            'Tahun lahir',
            'trim|required'
        );

        $this->form_validation->set_rules(
            'pendidikan',
            'Pendidikan',
            'trim|required'
        );

        $this->form_validation->set_rules(
            'pekerjaan',
            'Pekerjaan',
            'trim|required'
        );
    }

    public function editRules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'gender',
                'label' => 'Jenis kelamin',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'usia',
                'label' => 'Tahun lahir',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'pendidikan',
                'label' => 'Pendidikan',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nik" => $id])->row_array();
    }

    public function save()
    {
        $nik = htmlspecialchars($this->input->post('nik', true));
        $nama = htmlspecialchars($this->input->post('nama', true));
        $gender = htmlspecialchars($this->input->post('gender', true));
        $usia = date('Y') - htmlspecialchars($this->input->post('usia', true));
        $dusun = htmlspecialchars($this->input->post('dusun', true));
        $rt = htmlspecialchars($this->input->post('rt', true));
        $pendidikan = htmlspecialchars($this->input->post('pendidikan', true));
        $pekerjaan = htmlspecialchars($this->input->post('pekerjaan', true));
        $penduduk = [
            'nik'        => $nik,
            'nama'       => $nama,
            'gender'     => $gender,
            'usia'       => $usia,
            'dusun'      => $dusun,
            'rt'         => $rt,
            'pendidikan' => $pendidikan,
            'pekerjaan'  => $pekerjaan
        ];
        $this->db->insert($this->_table, $penduduk);
    }

    public function update()
    {
        $id = htmlspecialchars($this->input->post('nik', true));
        $nama = htmlspecialchars($this->input->post('nama', true));
        $gender = htmlspecialchars($this->input->post('gender', true));
        $usia = htmlspecialchars($this->input->post('usia', true));
        $dusun = htmlspecialchars($this->input->post('dusun', true));
        $rt = htmlspecialchars($this->input->post('rt', true));
        $pendidikan = htmlspecialchars($this->input->post('pendidikan', true));
        $pekerjaan = htmlspecialchars($this->input->post('pekerjaan', true));
        $penduduk = [
            // 'nik'        => $id,
            'nama'       => $nama,
            'gender'     => $gender,
            'usia'       => $usia,
            'dusun'      => $dusun,
            'rt'         => $rt,
            'pendidikan' => $pendidikan,
            'pekerjaan'  => $pekerjaan
        ];
        $this->db->update($this->_table, $penduduk, array('nik' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nik" => $id));
    }
    /*
	 * End backend 
	 */

    public function getAll()
    {
        // $this->db->order_by('nik', 'desc');
        return $this->db->get($this->_table)->result_array();
        // $query = $this->db->get($this->_table);
        // return $query->result_array();
    }

    public function countAll()
    {
        return $this->db->get($this->_table)->num_rows();
    }

    public function getByGender()
    {
        $this->db->select('*');
        $this->db->where('gender');
        $this->db->from($this->_table);
        return $this->db->get()->result();
    }
}
