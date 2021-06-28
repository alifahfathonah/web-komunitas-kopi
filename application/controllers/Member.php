<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    
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
        $this->load->model('member_m');
    }
    

    public function kirim_email()
    {
        $email = $this->input->post('email',true);
        $subject = $this->input->post('subject',true);
        $pesan = $this->input->post('pesan',true);
        $this->_email($email,$subject,$pesan);
        redirect('menu/member');
    }

    public function view(){
        $id = $this->input->post('id',true);
        $data = $this->member_m->getById($id);
        echo json_encode($data);
    }

    private function _email($email,$subject,$pesan){
        $config = [
            'protocol'  =>'smtp',
            'smtp_host' =>'ssl://smtp.gmail.com',
            // 'smtp_host' =>'ssl://smtp.googlemail.com',
            'smtp_port' =>465,
            'smtp_user' =>'ekza97@gmail.com',
            'smtp_pass' =>'linuxdebian7',
            'mailtype'  =>'html',
            'charset'   =>'iso-8859-1',
            'starttls'  =>true
        ];
        // $config = [
        //     'protocol'  =>'smtp',
        //     'smtp_host' =>'ssl://nokenstore.com',
        //     'smtp_port' =>465,
        //     'smtp_user' =>'admin@nokenstore.com',
        //     'smtp_pass' =>'Linuxdebian7',
        //     'mailtype'  =>'html',
        //     'charset'   =>'iso-8859-1'
        // ];

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from(_profil()->email, 'Admin Komunitas Kopi Manokwari');
        $this->email->to($email);
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $this->email->subject($subject);
        $this->email->message($pesan);

        if($this->email->send()){
            $this->session->set_flashdata('success','Email berhasil dikirim ke '.$email);
        }else{
            $this->session->set_flashdata('error','Email gagal dikirim ke '.$email);
        }
    }

}

/* End of file Member.php */