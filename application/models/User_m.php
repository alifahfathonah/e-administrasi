<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    private $table = 'pengguna';

    private $id = 'idpengguna';

    public function getAll(){ 
        return $this->db->order_by($this->id,'DESC')
                        ->get($this->table)->result_array();
    }
    
    public function getById($id){
        return $this->db->get_where($this->table,[$this->id=>$id])->row_array();
    }
    
    public function tambahBaru($data){
        $this->db->insert($this->table,$data);
    }

    public function editData($data,$id){
        $this->db->update($this->table,$data,[$this->id=>$id]);
    }

    public function hapus($id){
        $this->db->delete($this->table,[$this->id=>$id]);
    }

    public function check_username($username)
    {
        return $this->db->get_where($this->table, ['username'=>$username])->row_array();

    }
    public function check_pegawai($username)
    {
        return $this->db->get_where('pegawai', ['nip'=>$username])->row_array();

    }

}

/* End of file User_m.php */