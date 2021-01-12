<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mkategori extends CI_Model{
     
    function get_category(){
        $query = $this->db->get('master_kategori');
        return $query;  
    }
 

    function get_all_subcategory(){
      return  $this->db->select('*,t1.id AS id_sub')
     ->from('master_subkategori as t1')
     ->join('master_kategori as t2', 't1.id_kategori = t2.id', 'INNER')
     ->get();
    }

    function get_sub_category($category_id){
        $query = $this->db->get_where('master_subkategori', array('id_kategori' => $category_id));
        return $query;
    }

    function get_group(){
        $query = $this->db->get('tbl_group');
        return $query;
    }

    function get_teknisi(){
        $query = $this->db->get_where('users', array('level_akses' => '1'));
        return $query;
    }

    function cek($table, $cari,$colom)
	{
		$this->db->where("`$colom` LIKE '%$cari%'");
		$query = $this->db->get($table);

		return $query;
	}
     
}