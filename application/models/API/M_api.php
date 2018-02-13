<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_api extends CI_Model
{
    public function get($table, $where = NULL)
    {
        if(!$where = NULL){
            $res = $this->db->get($table); 
        }else{
            $res = $this->db->get_where($table, $where); 
        }
        return $res->result(); 
    }

    public function post($table, $data, $where = NULL)
    {
        if(!$where = NULL){
            $res = $this->db->insert($table, $data); 
        }else{
            $res = $this->db->update($table, $data, $where); 
        }   
        return $res; 
    }
    public function Delete($table, $where)
    {
        $res = $this->db->delete($table, $where); 
        return $res;
    }
}
