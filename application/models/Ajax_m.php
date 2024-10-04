<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ajax_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query($table, $column_order, $column_search, $order)
    {

        $this->db->from($table);

        $i = 0;

        foreach ($column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables($table, $column_order, $column_search, $order)
    {
        $this->_get_datatables_query($table, $column_order, $column_search, $order);
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered($table, $column_order, $column_search, $order)
    {
        $this->_get_datatables_query($table, $column_order, $column_search, $order);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($table)
    {
        $this->db->from($table);
        return $this->db->count_all_results();
    }


    public function fetc_where_data($table, $where, $field)
    {
        $query = $this->db->get_where($table, [$where => $field])->row_array();
        return $query;
    }
    public function get_anggaran($id)
    {
        $uraian = $this->get_uraian($id);
        $sub_total = 0;
        foreach ($uraian as $field) {
            $total = 0;
            $this->db->where('id_uraian', $field->id);
            $query = $this->db->get('ref_projek_rab')->result();

            foreach ($query as $row) {
                $total += $row->tot_harga;
            }
            $sub_total += $total;
        }
        return $sub_total;
    }
    public function get_uraian($id)
    {
        $this->db->where('id_projek', $id);
        $q = $this->db->get('ref_projek_uraian')->result();
        return $q;
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
    public function update($id, $data, $table)
    {

        $r = $this->db->update($table, $data, $id);
        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Success Update Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Error Update Data, please try again...';
        }
        return $res;
    }
    public function delete($table, $where, $id)
    {
        $this->db->where($where, $id);
        $r = $this->db->delete($table);

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Succes Delete Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Error Delete Data';
        }
        return json_encode($res);
    }

















    public function get_fetch_data($table)
    {
        $query = $this->db->get($table)->result();
        return $query;
    }
    public function get_data_ByIdajx($table, $where, $id)
    {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where($where, $id);

        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function get_data_Byid($table, $where, $value)
    {
        $query = $this->db->get_where($table, [$where => $value])->row_array();
        return $query;
    }

    public function ajax_get_data_ById($table, $id)
    {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where('id', $id);

        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
}
