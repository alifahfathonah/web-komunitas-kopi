<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('login');
        }else{
            if($this->session->userdata('level')!='Admin'){
                redirect('welcome');
            }
        }
        $this->load->model('profil_m');
    }
    

    public function update(){
        if($_FILES['logo']['name']==""){
            $data = [
                'nama'=>$this->input->post('nama',true),
                'slogan'=>$this->input->post('slogan',true),
                'alamat'=>$this->input->post('alamat',true),
                'nama_ketua'=>$this->input->post('nama_ketua',true),
                'email'=>$this->input->post('email',true),
                'no_telp'=>$this->input->post('no_telp',true),
                'facebook'=>$this->input->post('facebook',true),
                'instagram'=>$this->input->post('instagram',true),
                'youtube'=>$this->input->post('youtube',true),
                'deskripsi'=>$this->input->post('deskripsi',true),
                'logo'=>$this->input->post('logo_lama',true)
            ];
            $this->profil_m->updateData($data,$this->input->post('idprofil',true));
            $this->session->set_flashdata('success','Anda berhasil mengubah data Profil');
        }else{
            $config['upload_path']          = './uploads/image/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = true;
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('logo'))
            {
                $img = $this->upload->data();
                $data = [
                    'nama'=>$this->input->post('nama',true),
                    'slogan'=>$this->input->post('slogan',true),
                    'alamat'=>$this->input->post('alamat',true),
                    'nama_ketua'=>$this->input->post('nama_ketua',true),
                    'email'=>$this->input->post('email',true),
                    'no_telp'=>$this->input->post('no_telp',true),
                    'facebook'=>$this->input->post('facebook',true),
                    'instagram'=>$this->input->post('instagram',true),
                    'youtube'=>$this->input->post('youtube',true),
                    'deskripsi'=>$this->input->post('deskripsi',true),
                    'logo'=>$img['file_name'],
                ];
                $edit = $this->profil_m->updateData($data,$this->input->post('idprofil',true));
                unlink('./uploads/image/'.$this->input->post('logo_lama',true));
                $this->session->set_flashdata('success','Anda berhasil mengubah data Profil');
            }else{
                $this->session->set_flashdata('error',$this->upload->display_errors());
            }
        }
        redirect('menu/profil');
    }

}

/* End of file Profil.php */