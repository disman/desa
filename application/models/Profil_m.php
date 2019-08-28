<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_m extends CI_Model
{
    private $_table = "profil";

    /*
	 * Start backend 
	 */
    public function rules()
    {
        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'trim|required'
        );
        $this->form_validation->set_rules(
            'profil',
            'Profil',
            'trim|required'
        );
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }

    public function updateProfilDesa()
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
        $profil = $this->input->post('profil', true);
        $data = [
            'id'           => $id,
            'judul'        => $judul,
            'profil'       => $profil,
            'date_created' => time()
        ];
        $this->db->update($this->_table, $data, array('id' => $id));
    }

    public function updateProfilPemdes()
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
        $profil = $this->input->post('profil', true);
        $data = [
            'id'           => $id,
            'judul'        => $judul,
            'profil'       => $profil,
            'date_created' => time()
        ];
        $this->db->update($this->_table, $data, array('id' => $id));
    }

    public function updateProfilBpd()
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
        $profil = $this->input->post('profil', true);
        $data = [
            'id'           => $id,
            'judul'        => $judul,
            'profil'       => $profil,
            'date_created' => time()
        ];
        $this->db->update($this->_table, $data, array('id' => $id));
    }
    /*
	 * End backend 
	 */

    public function getGambaranUmum()
    {
        return $this->db->get_where($this->_table, 'id = 1')->result_array();
    }

    public function getProfilPemdes()
    {
        return $this->db->get_where($this->_table, 'id = 2')->result_array();
    }

    public function getProfilBpd()
    {
        return $this->db->get_where($this->_table, 'id = 3')->result_array();
    }
}
