<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('username')){
        //     redirect('welcome');
        // }
        $this->load->model('member_m');
        $this->load->model('user_m');
    }
    
    public function index()
    {
        $this->load->view('v_register');
    }

    public function save(){
        $password = $this->input->post('password',true);
        $pengguna = [
            'nama_lengkap'=>$this->input->post('nama_lengkap',true),
            'username'=>$this->input->post('email',true),
            'password'=>password_hash($password,PASSWORD_DEFAULT),
            'level'=>'Member'
        ];
        $idpengguna = $this->user_m->tambahData($pengguna);
        $member = [
            'nama_lengkap'=>$this->input->post('nama_lengkap',true),
            'no_hp'=>$this->input->post('no_hp',true),
            'email'=>$this->input->post('email',true),
            'alamat'=>$this->input->post('alamat',true),
            'pengguna_id'=>$idpengguna
        ];
        $this->member_m->tambahBaru($member);
        $this->_email($member['nama_lengkap'],$member['no_hp'],$member['email'],$member['alamat'],$pengguna['username'],$password);
        $this->session->set_flashdata('success','Anda telah berhasil mendaftar, Silahkan cek email anda untuk informasi pendaftaran akun anda');
        redirect('register');
    }
    
    private function _email($nama,$no_hp,$email,$alamat,$username,$password){
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

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('komunitaskopimkw@gmail.com', 'Admin Komunitas Kopi Manokwari');
        $this->email->to($email);
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $this->email->subject('Informasi Pendaftaran');
        $this->email->message('
                    <h2>Hallo, '.$nama.'</h2>
                    Selamat anda telah berhasil mendaftar pada Website Komunitas Kopi Manokwari,<br>
                    Berikut informasi yang anda daftarkan : <br>
                    <table>
                    <tr>
                    <td>Nama Lengkap</td>
                    <td>: <b>'.$nama.'</b></td>
                    </tr>
                    <tr>
                    <td>Nomor HP</td>
                    <td>: <b>'.$no_hp.'</b></td>
                    </tr>
                    <tr>
                    <td>Email</td>
                    <td>: <b>'.$email.'</b></td>
                    </tr>
                    <tr>
                    <td>Alamat</td>
                    <td>: <b>'.$alamat.'</b></td>
                    </tr>
                    </table>
                    <br>
                    Berikut informasi akun login anda : <br>
                    <table>
                    <tr>
                    <td>Nama Lengkap</td>
                    <td>: <b>'.$nama.'</b></td>
                    </tr>
                    <tr>
                    <td>Username</td>
                    <td>: <b>'.$username.'</b></td>
                    </tr>
                    <tr>
                    <td>Password</td>
                    <td>: <b>'.$password.'</b></td>
                    </tr>
                    </table>
                    <br>
                    Terima Kasih.<br>
                ');

        if($this->email->send()){
            $this->session->set_flashdata('success','Email berhasil dikirim ke '.$email);
        }else{
            $this->session->set_flashdata('error','Email gagal dikirim ke '.$email);
        }
    }
}

/* End of file Register.php */