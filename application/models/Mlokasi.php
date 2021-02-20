<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mlokasi extends CI_Model{
     
    function get_category(){
        $query = $this->db->get('master_lokasi');
        return $query;  
    }

    function get_all_subcategory(){
      return  $this->db->select('*,t1.id AS id,t2.id AS id_id')
     ->from('master_lokasi as t1')
     ->join('master_kota as t2', 't1.id = t2.id_lokasi', 'INNER')
     ->get();
    }

    function get_sub_category($category_id){
        $query = $this->db->get_where('master_kota', array('id_lokasi' => $category_id));
        return $query;
    }

    function get_sub_category_a($category_id){
        $query = $this->db->get_where('master_kawasan', array('id_kota' => $category_id));
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