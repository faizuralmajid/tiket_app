<?php

class Mrequest extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_request');
    }

    public function tampil_data_ten_terbaru()
    {
        return $this->db
            ->select('*')
            ->from('tbl_request')
            ->where('status', 'open')
            ->order_by("start_date")
            ->limit(10)
            ->get();
    }

    public function tampil_data_ten_terlama()
    {
        return $this->db
            ->select('*')
            ->from('tbl_request')
            ->where('status', 'open')
            ->order_by("start_date", 'desc')
            ->limit(10)
            ->get();
    }

    public function tampil_data_detail($id_data)
    {
        $query = $this->db->get_where('tbl_request', array('id' => $id_data));
        return $query;
    }

    public function delete_request($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
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
