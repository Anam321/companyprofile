<?php defined('BASEPATH') or exit('No direct script access allowed');

class Main_m extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }
    public function fetc_all_data($table)
    {
        $query = $this->db->get($table)->result();
        return $query;
    }
    public function fetc_where_data($table, $where, $field)
    {
        $query = $this->db->get_where($table, [$where => $field])->row_array();
        return $query;
    }
    public function fetc_all_data_where($table, $where, $field)
    {
        $this->db->where($where, $field);
        $query = $this->db->get($table)->result();
        return $query;
    }
    public function fetc_where_data_Where_limit($table, $where, $field, $limit)
    {
        $this->db->where($where, $field);
        $this->db->limit($limit);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get($table)->result();
        return $query;
    }


    public function get_dataLimit($limit, $start)
    {
        // $this->db->where('status', 1);
        $this->db->order_by('id', 'DESC');
        return $this->db->get('pages_portfolio', $limit, $start)->result_array();
    }
    public function get_CountLimit()
    {
        return $this->db->get('pages_portfolio')->num_rows();
    }
}