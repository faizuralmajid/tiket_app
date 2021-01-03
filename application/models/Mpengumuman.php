<?php

class Mpengumuman extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_pengumuman');
    }

    public function tampil_data_detail($id_data)
    {
        $query = $this->db->get_where('tbl_pengumuman', array('id' => $id_data));
        return $query;
    }

    public function delete_request($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_request($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function for_option($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }
}
