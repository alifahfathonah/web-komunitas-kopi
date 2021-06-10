<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    
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
        $this->load->model('kelas_m');
    }
    

    public function save()
    {
        $id = $this->input->post('idkelas',true);
        if($id==''){
            $config['upload_path']          = './uploads/image/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = true;
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('cover'))
            {
                $img = $this->upload->data();
                $data = [
                    'nama'=>$this->input->post('nama',true),
                    'deskripsi'=>$this->input->post('deskripsi',true),
                    'tgl_awal'=>$this->input->post('tgl_awal',true),
                    'tgl_akhir'=>$this->input->post('tgl_akhir',true),
                    'jam_awal'=>$this->input->post('jam_awal',true),
                    'jam_akhir'=>$this->input->post('jam_akhir',true),
                    'tempat'=>$this->input->post('tempat',true),
                    'jumlah'=>delMask($this->input->post('jumlah',true)),
                    'harga'=>delMask($this->input->post('harga',true)),
                    'instruktur'=>$this->input->post('instruktur',true),
                    'file'=>$img['file_name']
                ];
                $this->kelas_m->tambahBaru($data);
                $this->session->set_flashdata('success','Anda berhasil menambahkan data kelas');
            }else{
                $this->session->set_flashdata('error',$this->upload->display_errors());
            }
        }else{
            if($_FILES['cover']['name']==""){
                $data = [
                    'nama'=>$this->input->post('nama',true),
                    'deskripsi'=>$this->input->post('deskripsi',true),
                    'tgl_awal'=>$this->input->post('tgl_awal',true),
                    'tgl_akhir'=>$this->input->post('tgl_akhir',true),
                    'jam_awal'=>$this->input->post('jam_awal',true),
                    'jam_akhir'=>$this->input->post('jam_akhir',true),
                    'tempat'=>$this->input->post('tempat',true),
                    'jumlah'=>delMask($this->input->post('jumlah',true)),
                    'harga'=>delMask($this->input->post('harga',true)),
                    'instruktur'=>$this->input->post('instruktur',true),
                    'file'=>$this->input->post('cover_lama',true)
                ];
                $this->kelas_m->editData($data,$this->input->post('idkelas',true));
                $this->session->set_flashdata('success','Anda berhasil mengubah data kelas');
            }else{
                $config['upload_path']          = './uploads/image/';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 2048;
                $config['encrypt_name']         = true;
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('cover'))
                {
                    $img = $this->upload->data();
                    $data = [
                        'nama'=>$this->input->post('nama',true),
                        'deskripsi'=>$this->input->post('deskripsi',true),
                        'tgl_awal'=>$this->input->post('tgl_awal',true),
                        'tgl_akhir'=>$this->input->post('tgl_akhir',true),
                        'jam_awal'=>$this->input->post('jam_awal',true),
                        'jam_akhir'=>$this->input->post('jam_akhir',true),
                        'tempat'=>$this->input->post('tempat',true),
                        'jumlah'=>delMask($this->input->post('jumlah',true)),
                        'harga'=>delMask($this->input->post('harga',true)),
                        'instruktur'=>$this->input->post('instruktur',true),
                        'file'=>$img['file_name']
                    ];
                    $edit = $this->kelas_m->editData($data,$this->input->post('idkelas',true));
                    if($edit){
                        unlink('./uploads/image/'.$this->input->post('cover_lama',true));
                    }
                    $this->session->set_flashdata('success','Anda berhasil mengubah data kelas');
                }else{
                    $this->session->set_flashdata('error',$this->upload->display_errors());
                }
            }

        }
        redirect('menu/kelas');
    }

    public function view(){
        $id = $this->input->post('id',true);
        $data = $this->kelas_m->getById($id);
        echo json_encode($data);
    }

    public function hapus($id){
        $this->kelas_m->hapus($id);
        $this->session->set_flashdata('success','Anda berhasil menghapus data Kelas');
        redirect('menu/kelas');
    }
}

/* End of file Kelas.php */