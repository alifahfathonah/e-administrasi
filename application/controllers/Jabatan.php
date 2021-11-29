<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('login');
        }
        $this->load->model('jabatan_m');
    }
    
    public function index()
    {
        
    }
    
    public function tambah()
    {
        $data = [
            'pangkat'=>$this->input->post('pangkat',true),
            'golongan'=>$this->input->post('golongan',true)
        ];
        $this->jabatan_m->tambahBaru($data);
        $this->session->set_flashdata('success','Anda berhasil menambahkan data Jabatan');
        redirect('menu/jabatan');
    }

    public function hapus($id){
        $del = $this->jabatan_m->hapus($id);
        if($del){
            $this->session->set_flashdata('success','Anda berhasil menghapus data Jabatan');
        }else{
            $this->session->set_flashdata('error','Maaf, data gagal dihapus, data terikat dengan data lainnya !');
        }
        redirect('menu/jabatan');
    }
}

/* End of file Jabatan.php */