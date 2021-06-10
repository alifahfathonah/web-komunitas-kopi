<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_m extends CI_Model {

    private $table = 'kelas';

    private $id = 'idkelas';

    public function getAll(){ 
        return $this->db->order_by('idkelas','desc')
                        ->get($this->table)->result_array();
    }
    
    public function getAllLimit($limit){ 
        return $this->db->order_by('idkelas','desc')
                        ->get($this->table,$limit)->result_array();
    }

    public function getById($id){ 
        return $this->db->get_where($this->table,[$this->id=>$id])->row_array();
    }

    public function tambahBaru($data){
        $this->db->insert($this->table,$data);
    }

    public function editData($data,$id){
        $this->db->update($this->table,$data,[$this->id=>$id]);
    }

    public function hapus($id){
        $this->db->delete($this->table,[$this->id=>$id]);
    }

}

/* End of file Kelas_m.php */