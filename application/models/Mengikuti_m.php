<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mengikuti_m extends CI_Model {

    private $table = 'mengikuti';

    private $id = 'idmengikuti';

    public function cekKelas($idmember,$idkelas){ 
        return $this->db->get_where($this->table,['member_id'=>$idmember,'kelas_id'=>$idkelas])->num_rows();
    }

    // public function getAll(){ 
    //     return $this->db->order_by($this->id,'desc')
    //                     ->get($this->table)->result_array();
    // }
    
    public function getAllLimit($limit){ 
        return $this->db->order_by('idkelas','desc')
                        ->get($this->table,$limit)->result_array();
    }

    public function getDataById($id){ 
        return $this->db->get_where($this->table,[$this->id=>$id])->row_array();
    }

    public function getMemberKelas($id){ 
        return $this->db->select('x.*,x1.*')
                        ->join('member x1','x1.idmember=x.member_id')
                        ->where('x.kelas_id',$id)
                        ->where('x.status','Verified')
                        ->get($this->table.' x')->result_array();
    }

    public function getAll(){ 
        return $this->db->select('x.*,x1.*,x2.*')
                        ->join('member x1','x1.idmember=x.member_id')
                        ->join('kelas x2','x2.idkelas=x.kelas_id')
                        ->order_by($this->id,'DESC')
                        ->get($this->table.' x')->result_array();
    }

    public function getById($id){ 
        return $this->db->select('x.*,x1.*,x2.*')
                        ->join('member x1','x1.idmember=x.member_id')
                        ->join('kelas x2','x2.idkelas=x.kelas_id')
                        ->where($this->id,$id)
                        ->get($this->table.' x')->row_array();
    }

    public function getAllKelas($id){ 
        return $this->db->select('x.*,x1.*,x2.*')
                        ->join('member x1','x1.idmember=x.member_id')
                        ->join('kelas x2','x2.idkelas=x.kelas_id')
                        ->where('x1.pengguna_id',$id)
                        ->get($this->table.' x')->result_array();
    }

    public function tambahBaru($data){
        $this->db->insert($this->table,$data);
    }

    // public function editData($data,$id){
    //     $this->db->update($this->table,$data,[$this->id=>$id]);
    // }

    // public function hapus($id){
    //     $this->db->delete($this->table,[$this->id=>$id]);
    // }

}

/* End of file Mengikuti_m.php */