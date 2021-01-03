<?php

class Mlogin extends CI_Model
{
	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	function cek_login_2($table, $user)
	{

		$this->db->where('username', $user);
		$query = $this->db->get($table);

		return $query;
	}

	
}
