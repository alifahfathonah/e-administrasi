<?php 
function delMask( $str ) {
    return (int)implode('',explode('.',$str));
}

function list_jabatan(){
    
    $ci =& get_instance();
    return $ci->db->order_by('golongan','DESC')
                ->get('jabatan')->result_array();
    
}
function count_table($table){
    
    $ci =& get_instance();
    return $ci->db->get($table)->num_rows();
    
}