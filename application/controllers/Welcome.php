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
				$this->session->set_flashdata('success','Anda berhasil mendaftar pada kelas ini, silahkan tunggu email konfirmasi pembayaran anda melalui Email');
			}else{
				$this->session->set_flashdata('error',$this->upload->display_errors());
			}
		}else{
			$this->session->set_flashdata('error','Maaf anda telah mendaftar pada kelas ini');
		}
		redirect('website/detail_kelas/'.$idkelas);
	}

	public function view(){
		$id = $this->input->post('id',true);
		$data = $this->mengikuti_m->getDataById($id);
		echo json_encode($data);
	}

	public function verifikasi(){
		$id = $this->input->post('idmengikuti',true);
		$sts = [
			'status_bayar'=>'Sudah Bayar',
			'status'=>$this->input->post('status',true)
		];
		// var_dump($id);die;
		$upd = $this->mengikuti_m->editData($sts,$id);
		$data = $this->mengikuti_m->getById($id);
		$this->_email($data['email'],$data['nama_lengkap'],$data['nama'],'Dari '.$data['tgl_awal'].' sampai '.$data['tgl_akhir'].'/'.$data['jam_awal'].' - '.$data['jam_akhir'].' WIT',$data['tempat'],$data['instruktur']);
		// var_dump($this->_email());die;
		$this->session->set_flashdata('success','Anda telah berhasil memverifikasi data ini dan mengirimkan email notifikasi');
		redirect('menu/verifikasi');
	}

	private function _email($email,$nama,$nama_kelas,$jadwal,$tempat,$instruktur){
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

		$this->email->subject('Informasi Pendaftaran Kelas');
		$this->email->message('
					<h2>Hallo, '.$nama.'</h2>
					Selamat anda telah berhasil mendaftar pada kelas, karena kami telah memverifikasi pembayaran anda,<br>
					Berikut informasi kelas anda : <br>
					<table>
					<tr>
					<td>Nama Kelas</td>
					<td>: <b>'.$nama_kelas.'</b></td>
					</tr>
					<tr>
					<td>Tanggal dan Jam</td>
					<td>: <b>'.$jadwal.'</b></td>
					</tr>
					<tr>
					<td>Tempat</td>
					<td>: <b>'.$tempat.'</b></td>
					</tr>
					<tr>
					<td>Instruktur</td>
					<td>: <b>'.$instruktur.'</b></td>
					</tr>
					</table>
					<br>
					Untuk informasi lainnya dapat menghubungi kami :
					<table>
					<tr>
					<td>Email</td>
					<td>: <b>'._profil()->email.'</b></td>
					</tr>
					<tr>
					<td>Nomor Telepon</td>
					<td>: <b>'._profil()->no_telp.'</b></td>
					</tr>
					<tr>
					<td>Facebook</td>
					<td>: <b>'._profil()->facebook.'</b></td>
					</tr>
					<tr>
					<td>Instagram</td>
					<td>: <b>'._profil()->instagram.'</b></td>
					</tr>
					</table>
					<br>
					Sampai Jumpa dikelas
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