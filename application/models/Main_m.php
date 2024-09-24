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
}
