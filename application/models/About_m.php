<?php defined('BASEPATH') or exit('No direct script access allowed');

class About_m extends CI_Model
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
    public function fetc_all_data_limit($table, $limit, $order, $by)
    {
        $this->db->limit($limit);
        $this->db->order_by($order, $by);
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


    public function get_dataLimit($table, $limit, $start)
    {
        // $this->db->where('status', 1);
        $this->db->order_by('id', 'DESC');
        return $this->db->get($table, $limit, $start)->result();
    }
    public function get_CountLimit($table)
    {
        return $this->db->get($table)->num_rows();
    }

    public function PostData($table, $data)
    {
        $r = $this->db->insert($table, $data);
        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Success Input Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Error Input Data, please try again...';
        }
        return $res;
    }
}
