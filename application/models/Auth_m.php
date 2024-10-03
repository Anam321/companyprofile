<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    public function data_user($username)
    {
        $sql = "SELECT * FROM users WHERE username = ?";
        $query = $this->db->query($sql, array($username));
        return $query->row_array();
    }
    public function record_login_attempt($username)
    {
        $data = array(
            'username' => $username,
            'ip_address' => $this->input->ip_address(),
            'attempt_time' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('login_attempts', $data);
    }
    public function get_login_attemptsl($ip_address, $limit_time)
    {
        $sql = "SELECT COUNT(*) AS attempts FROM login_attempts WHERE  ip_address = ?  AND attempt_time > ?";
        $query = $this->db->query($sql, array($ip_address, $limit_time));
        return $query->row()->attempts;
    }

    public function get_login_attempts($username, $limit_time)
    {
        $ip_address = $this->input->ip_address();
        $sql = "SELECT COUNT(*) AS attempts FROM login_attempts WHERE  ip_address = ? AND username = ? AND attempt_time > ?";
        $query = $this->db->query($sql, array($ip_address, $username, $limit_time));
        return $query->row()->attempts;
    }

    public function clear_login_attempts($username)
    {
        $this->db->delete('login_attempts', array('username' => $username));
    }
    public function get_app()
    {
        $q = $this->db->get_where('set_app', ['id' => 1])->row_array();
        return $q;
    }
}
