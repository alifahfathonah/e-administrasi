<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_m extends CI_Model {
    
    private $table = 'jabatan';

    private $id = 'id_jabatan';

    public function getAll(){ 
        return $this->db->order_by($this->id,'DESC')
                        ->get($this->table)->result_array();
    }

    public function tambahBaru($data){
        $this->db->insert($this->table,$data);
    }

    public function hapus($id){
        return $this->db->delete($this->table,[$this->id=>$id]);
    }

}

/* End of file Jabatan_m.php */