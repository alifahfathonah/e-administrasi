<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jayapura");
        if(!$this->session->userdata('username')){
            redirect('login');
        }
        $this->load->model('user_m');
        $this->load->model('jabatan_m');
        $this->load->model('pegawai_m');
    }
    
    public function index()
    {
        $data['mDashboard'] = true;
        $data['content'] = 'dashboard';
        $this->load->view('index',$data);
    }

    public function jabatan()
    {
        $data['mDataPegawai'] = $data['mJabatan'] = true;
        $data['all_jabatan'] = $this->jabatan_m->getAll();
        $data['content'] = 'v_jabatan';
        $this->load->view('index',$data);
    }

    public function pns()
    {
        $data['mDataPegawai'] = $data['mPNS'] = true;
        $data['all_pns'] = $this->pegawai_m->getAllPNS();
        $data['content'] = 'v_pns';
        $this->load->view('index',$data);
    }

    public function honor()
    {
        $data['mDataPegawai'] = $data['mHonor'] = true;
        $data['all_honor'] = $this->pegawai_m->getAllHonor();
        $data['content'] = 'v_honor';
        $this->load->view('index',$data);
    }

    public function kenaikan_pangkat()
    {
        $data['mKenaikanPangkat'] = true;
        $select_year = $this->input->get('tahun_kenaikan');
        $jenis_jabatan = $this->input->get('jenis_jabatan');
        $data['list_pns']=$this->pegawai_m->getKenaikanPangkat($select_year,$jenis_jabatan);
        $data['content']='v_kenaikan_pangkat';
        $this->load->view('index',$data);
    }

    public function kenaikan_gajiberkala()
    {
        $data['mKenaikanGajiBerkala'] = true;
        $select_year = $this->input->get('tahun_kenaikan');
        $data['list_pns']=$this->pegawai_m->getKenaikanGajiBerkala($select_year);
        $data['content']='v_kenaikan_gajiberkala';
        $this->load->view('index',$data);
    }

    public function pengguna()
    {
        $data['mPengguna'] = true;
        $data['pengguna'] = $this->user_m->getAll();
        $data['content'] = 'v_pengguna';
        $this->load->view('index',$data);
    }

    public function ubah_password(){
        if($this->session->userdata('level')=='pegawai'){
            $table = 'pegawai';
            $id = 'id_pegawai';
        }else{
            $table = 'pengguna';
            $id = 'idpengguna';
        }
        $data = [ 
            'password'=>password_hash($this->input->post('password',true),PASSWORD_DEFAULT)
        ];
        $this->db->update($table,$data,[$id=>$this->input->post('id',true)]);
        $this->session->set_flashdata('success','Anda berhasil mengubah password');
        echo '<script>javascript:history.back()</script>';
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file Menu.php */