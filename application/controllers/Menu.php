<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('login');
        }
        $this->load->model('profil_m');
        $this->load->model('kelas_m');
        $this->load->model('member_m');
        $this->load->model('mengikuti_m');
        $this->load->model('user_m');
    }
    
    public function index()
    {
        $data['mDashboard'] = true;
        $data['dashboard'] = [
            't_member'=>$this->user_m->getCount('member'),
            't_kelas'=>$this->user_m->getCount('kelas'),
            't_pengguna'=>$this->user_m->getCount('pengguna')
        ];
        $data['content'] = 'dashboard';
        $this->load->view('index',$data);
    }
    
    public function profil()
    {
        $data['mProfil'] = true;
        $data['profil'] = $this->profil_m->getDataById(1);
        $data['content'] = 'profil';
        $this->load->view('index',$data);
    }

    public function kelas()
    {
        $data['mKelas'] = true;
        $data['kelas'] = $this->kelas_m->getAll();
        $data['content'] = 'v_kelas';
        $this->load->view('index',$data);
    }

    public function member()
    {
        $data['mMember'] = true;
        $data['member'] = $this->member_m->getAll();
        $data['content'] = 'v_member';
        $this->load->view('index',$data);
    }

    public function verifikasi()
    {
        $data['mVerifikasi'] = true;
        $data['verify'] = $this->mengikuti_m->getAll();
        $data['content'] = 'v_verifikasi';
        $this->load->view('index',$data);
    }

    public function kelas_saya()
    {
        $data['mKelasSaya'] = true;
        $data['list_kelas'] = $this->mengikuti_m->getAllKelas(_session('id'));
        $data['content'] = 'v_kelas_saya';
        $this->load->view('index',$data);
    }

    public function pengguna()
    {
        $data['mPengguna'] = true;
        $data['pengguna'] = $this->user_m->getAll();
        $data['content'] = 'v_pengguna';
        $this->load->view('index',$data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('website');
    }

}

/* End of file Menu.php */