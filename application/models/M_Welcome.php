<?php
class M_Welcome extends CI_Model{

    public function select(){
        return $this->db->get('files');
    }

    public function insert($judul){
        $data = [
            'nama' => $this->input->post('judul'),
            'files' => $judul
        ];

        return $this->db->insert('files', $data);
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete('files');   
    }

    public function getDataByID($id){
        return $this->db->get_where('files', ['id' => $id]);
    }

    public function updateFile($id, $data){
        return $this->db->where('id', $id)->update('files', $data);
    }
    
}
