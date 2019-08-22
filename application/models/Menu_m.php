<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_m extends CI_Model
{

    private $_table   = 'menu';
    private $_primary = 'id';

    /*
	 * Start backend 
	 */
    public function rules()
    {
        $this->form_validation->set_rules(
            'title',
            'Title',
            'trim|required',
            array('required' => 'Nama menu tidak boleh kosong!')
        );
        $this->form_validation->set_rules(
            'url',
            'Url',
            'trim|required',
            array('required' => 'Url tidak boleh kosong!')
        );
        $this->form_validation->set_rules(
            'icon',
            'Icon',
            'trim|required',
            array('required' => 'Icon menu tidak boleh kosong!')
        );
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
