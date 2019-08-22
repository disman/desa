<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download_m extends CI_Model
{
    private $_table = "download";

    /*
	 * Start backend 
	 */
    public function rules()
    {
        $this->form_validation->set_rules('title', 'Nama berkas', 'trim|required');
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }

    public function save()
    {
        $title = htmlspecialchars($this->input->post('title', true));
        $berkas = $this->_uploadBerkas();
        $data = [
            'title'  => $title,
            'berkas' => $berkas
        ];
        $this->db->insert($this->_table, $data);
    }

    public function delete($id)
    {
        $this->_deleteBerkas($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadBerkas()
    {
        $config['upload_path']   = './upload_file/document/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|csv|xlsx|docx|doc|ppt|rtf|pptx';
        $config['overwrite']     = true;
        $config['max_size']      = 1500000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('berkas')) {
            return $this->upload->data("file_name");
        } else {
            throw new Exception($this->upload->display_errors());
        }
    }

    private function _deleteBerkas($id)
    {
        $berkas = $this->getById($id);
        $filename = explode(".", $berkas['berkas'])[0];
        return array_map('unlink', glob(FCPATH . "upload_file/document/$filename.*"));
    }
    /*
	 * End backend 
	 */

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }
}
