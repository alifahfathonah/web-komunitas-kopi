<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_m extends CI_Model {

    private $table = 'profil';

    private $id = 'idprofil';

    public function getDataById($id){
        return $this->db->get_where($this->table,[$this->id=>$id])->row();
    }

    public function updateData($data,$id){
        $this->db->update($this->table,$data,[$this->id=>$id]);
    }

}

/* End of file Profil_m.php */