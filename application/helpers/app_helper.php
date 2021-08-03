<?php 
function delMask( $str ) {
    return (int)implode('',explode('.',$str));
}

function count_table($table){
    
    $ci =& get_instance();
    return $ci->db->get($table)->num_rows();
    
}