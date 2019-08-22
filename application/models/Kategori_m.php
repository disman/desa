<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_m extends CI_Model
{

    private $table   = 'category';
    private $primary = 'id';

    /*
	 * Start backend 
	 */
    public function save()
    {
        $category = htmlspecialchars($this->input->post('category', true));
        $data = array(
            'category' => $category
        );
        $this->db->insert($this->table, $data);
    }

    public function edit($where)
    {
        $this->db->where($this->primary, $where);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    public function update($where)
    {
        $kategori = htmlspecialchars($this->input->post('category', true));
        $data = [
            'category' => $kategori
        ];
        $this->db->where($where);
        $this->db->update($this->table, $data);
    }

    public function delete($where)
    {
        $this->db->where($this->primary, $where);
        $this->db->delete($this->table);
    }

    /*
	 * End backend 
	 */

    public function getAll()
    {
        $this->db->order_by($this->primary, 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
}
