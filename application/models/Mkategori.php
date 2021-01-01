<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mkategori extends CI_Model{
     
    function get_category(){
        $query = $this->db->get('master_kategori');
        return $query;  
    }
 
    function get_sub_category($category_id){
        $query = $this->db->get_where('master_subkategori', array('id_kategori' => $category_id));
        return $query;
    }
     
}