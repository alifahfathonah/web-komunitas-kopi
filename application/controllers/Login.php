<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('username')){
        //     redirect('welcome');
        // }
        $this->load->model('user_m');
    }
    
    public function index()
    {
        $this->load->view('v_login');
    }

    public function cek_login(){
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $cek = $this->user_m->cekUsername($username);
        if($cek){
            if(password_verify($password,$cek['password'])){
                $sessionData = [
                    'id'=>$cek['idpengguna'],
                    'fullname'=>$cek['nama_lengkap'],
                    'username'=>$cek['username'],
                    'level'=>$cek['level']
                ];
                $this->session->set_userdata($sessionData);
                if($this->session->userdata('level')=='Admin'){
                    redirect('menu');
                }else{
                    redirect('welcome');
                }
            }else{
                $this->session->set_flashdata('error','Password yang anda masukkan salah !');
            }
        }else{
            $this->session->set_flashdata('error','Username yang anda masukkan salah !');
        }
        redirect('login');
    }
}

/* End of file Login.php */