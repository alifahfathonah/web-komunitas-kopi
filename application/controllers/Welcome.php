<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect('login');
		}
		$this->load->model('user_m');
		$this->load->model('member_m');
		$this->load->model('kelas_m');
		$this->load->model('mengikuti_m');
	}
	
	public function index()
	{
		$data['mHome'] = true;
		$data['member'] = $this->member_m->getAllLimit(6);
		$data['kelas'] = $this->kelas_m->getAll();
		$data['content'] = 'website/v_home';
		$this->load->view('website/index',$data);
		
	}

	public function ubah_password(){
		// if($this->session->userdata('level')=='user'){
		// 	$table = 'tb_pemilih';
		// 	$id = 'id_pemilih';
		// }else{
		// 	$table = 'tb_admin';
		// 	$id = 'id_admin';
		// }
		$table = 'pengguna';
		$id = 'idpengguna';
		$data = [ 
			'password'=>password_hash($this->input->post('password',true),PASSWORD_DEFAULT)
		];
		$this->db->update($table,$data,[$id=>$this->input->post('id',true)]);
		$this->session->set_flashdata('success','Anda berhasil mengubah password');
		echo '<script>javascript:history.back()</script>';
	}
	
	public function daftar_kelas(){
		$idmember = $this->input->post('member_id',true);
		$idkelas = $this->input->post('kelas_id',true);
		$cek = $this->mengikuti_m->cekKelas($idmember,$idkelas);
		if($cek==0){
			$config['upload_path']          = './uploads/bukti_bayar/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 2048;
			$config['encrypt_name']         = true;
		
			$this->load->library('upload', $config);
		
			if ($this->upload->do_upload('bukti_bayar'))
			{
				$bukti = $this->upload->data();
				$data = [
					'member_id'=>$idmember,
					'kelas_id'=>$idkelas,
					'status_bayar'=>'Belum Bayar',
					'status'=>'Pending',
					'bukti_bayar'=>$bukti['file_name'],
				];
				$this->mengikuti_m->tambahBaru($data);
				$this->session->set_flashdata('success','Anda berhasil mendaftar pada kelas ini');
			}else{
				$this->session->set_flashdata('error',$this->upload->display_errors());
			}
		}else{
			$this->session->set_flashdata('error','Maaf anda telah mendaftar pada kelas ini');
		}
		redirect('website/detail_kelas/'.$idkelas);
	}

	
}