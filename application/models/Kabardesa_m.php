<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kabardesa_m extends CI_Model
{
    private $_table = "kabardesa";

    public $id;
    public $title;
    public $image = "default.jpg";
    public $content;

    /*
	 * Start backend 
	 */
    public function rules()
    {
        return [
            [
                'field' => 'title',
                'label' => 'Judul',
                'rules' => 'trim|required'
            ],

            [
                'field' => 'content',
                'label' => 'Kabar desa',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }

    public function save()
    {
        $title = htmlspecialchars($this->input->post('title', true));
        $content = $this->input->post('content', true);
        $image = $this->_uploadImage();
        $kabar = [
            'title'        => $title,
            'image'        => $image,
            'content'      => $content,
            'date_created' => time()
        ];
        $this->db->insert($this->_table, $kabar);
    }

    public function update()
    {
        if (!empty($_FILES["image"]["name"])) {
            $image = $this->_uploadImage();
        } else {
            $image = $this->input->post('old_image');
        }
        $id = $this->input->post('id');
        $title = htmlspecialchars($this->input->post('title', true));
        $content = $this->input->post('content', true);
        $kabar = [
            'id'           => $id,
            'title'        => $title,
            'image'        => $image,
            'content'      => $content,
            'date_created' => time()
        ];
        $this->db->update($this->_table, $kabar, array('id' => $id));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload_file/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $image = $this->getById($id);
        if ($image['image'] != "default.jpg") {
            $filename = explode(".", $image['image'])[0];
            return array_map('unlink', glob(FCPATH . "upload_file/images/$filename.*"));
        }
    }
    /*
	 * End backend 
	 */

    public function getAll()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get($this->_table)->result_array();
    }
}
