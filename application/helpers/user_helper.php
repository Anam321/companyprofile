<?php


function is_logged_in()

{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect(base_url('app-admin/login'));
    } else {
        $role = $ci->session->userdata('role');
        $menu = $ci->session->userdata('role');
    }
}

function users($x)
{
    $ci = get_instance();
    $q = $ci->db->get_where('users', ['username' => $ci->session->userdata('username')])->row_array();
    if ($x == 'name') {
        $v = $q['nama'];
    } elseif ($x == 'foto') {
        $v = $q['foto'];
    } elseif ($x == 'username') {
        $v = $q['username'];
    }
    return $v;
}
