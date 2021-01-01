<?php

class Masset extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_asset');
    }

    public function delete_asset($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_asset($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function for_option()
    {
        $query = $this->db->query('SELECT * FROM tbl_asset');
        return $query->result();
    }
}
