<?php 
function delMask( $str ) {
    return (int)implode('',explode('.',$str));
}

function _session($key){
    
    $ci =& get_instance();
    return $ci->session->userdata($key);
    
}
function _sessMember(){
    
    $ci =& get_instance();
    return $ci->db->select('x.*,x1.*')
                ->join('member x1','x1.pengguna_id=x.idpengguna')
                ->where('x.idpengguna',$ci->session->userdata('id'))
                ->get('pengguna x')->row();
    
}
function _profil(){
    
    $ci =& get_instance();
    return $ci->db->get_where('profil',['idprofil'=>1])->row();
    
}
function hidePhoneNumber($str){
    $number = $str;
    $middle_string ="";
    $length = strlen($number);

    if( $length < 4 ){

        echo $length == 1 ? "*" : "*". substr($number,  - 1);

    }
    else{
        $part_size = floor( $length / 4 ) ; 
        $middle_part_size = $length - ( $part_size * 2 );
        for( $i=0; $i < $middle_part_size ; $i ++ ){
            $middle_string .= "*";
        }

        echo  substr($number, 0, $part_size ) . $middle_string  . substr($number,  - $part_size );
    }
}
function totalPendaftar($idkelas){
    
    $ci =& get_instance();
    return $ci->db->get_where('mengikuti',['kelas_id'=>$idkelas,'status'=>'Verified'])->num_rows();
    
}
function listKelasByMember($idmember){
    
    $ci =& get_instance();
    return $ci->db->select('x.*,x1.*')
                    ->join('kelas x1','x1.idkelas=x.kelas_id')
                    ->where('x.member_id',$idmember)
                    ->where('x.status','Verified')
                    ->get('mengikuti x')->result_array();
    
}