<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kelas_m');
        $this->load->model('member_m');
        $this->load->model('mengikuti_m');
        $this->load->model('user_m');
    }

    public function index()
    {
        $data['mHome'] = true;
        $data['member'] = $this->member_m->getAllLimit(6);
        $data['kelas'] = $this->kelas_m->getAll();
        $data['content'] = 'website/v_home';
        $this->load->view('website/index',$data);
    }

    public function all_member()
    {
        $data['mAllMember'] = true;
        $data['member'] = $this->member_m->getAllLimit(0);
        $data['content'] = 'website/v_all_member';
        $this->load->view('website/index',$data);
    }

    public function detail_kelas($id)
    {
        $data['mDetailKelas'] = true;
        $data['kelas'] = $this->kelas_m->getById($id);
        $data['all_kelas'] = $this->kelas_m->getAllLimit(3);
        $data['member_kelas'] = $this->mengikuti_m->getMemberKelas($id);
        $data['content'] = 'website/v_detail_kelas';
        $this->load->view('website/index',$data);
    }

}

/* End of file Website.php */