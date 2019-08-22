<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{

    private $_table   = 'admin';
    private $_primary = 'id';

    /*
	 * Start backend 
	 */
    public function rules()
    {
        $this->form_validation->set_rules('nama', 'Full name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');
    }

    public function registration()
    {
        $nama = htmlspecialchars($this->input->post('nama', true));
        $email = htmlspecialchars($this->input->post('email', true));
        $password = htmlspecialchars(password_hash($this->input->post('password1', true), PASSWORD_DEFAULT));
        $user = array(
            'nama'         => $nama,
            'email'        => $email,
            'password'     => $password
        );
        $this->db->insert($this->_table, $user);
    }

    public function getById($id)
    {
        $query = $this->db->get_where($this->_table, ['id' => $id]);
        return $query->row_array();
    }

    public function save()
    {
        $title = htmlspecialchars($this->input->post('title', true));
        $url = htmlspecialchars($this->input->post('url', true));
        $icon = htmlspecialchars($this->input->post('icon', true));
        $menu = array(
            'title' => $title,
            'url'   => $url,
            'icon'  => $icon,
            'is_active' => 1
        );
        $this->db->insert($this->_table, $menu);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $title = htmlspecialchars($this->input->post('title', true));
        $url = htmlspecialchars($this->input->post('url', true));
        $icon = htmlspecialchars($this->input->post('icon', true));
        $menu = [
            'id'    => $id,
            'title' => $title,
            'url'   => $url,
            'icon'  => $icon,
            'is_active' => 1
        ];
        $this->db->update($this->_table, $menu, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, ['id' => $id]);
    }

    /*
	 * End backend 
	 */

    public function getAll()
    {
        $query = $this->db->get($this->_table);
        return $query->result_array();
    }
}
