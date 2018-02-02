<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function select($table, $where)
    {
        $this->db->where($where);
        return $this->db->get($table);
    }

    public function update($table, $data, $set)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert_img($name, $path)
    {
        $data = array(
            'name' => $name,
            'path' => $path,
        );

        $this->db->insert('image', $data);

        return $this->db->insert_id();
    }

}
