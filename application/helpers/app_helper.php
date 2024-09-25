<?php


function app($x)
{
    $ci = get_instance();
    $q = $ci->db->get_where('set_app', ['id' => 1])->row_array();
    if ($x == 'telpon') {
        $r = $q['telpon'];
    } elseif (($x == 'email')) {
        $r = $q['email'];
    } elseif (($x == 'app_name')) {
        $r = $q['app_name'];
    } elseif (($x == 'logo')) {
        $r = $q['logo'];
    } elseif (($x == 'addres')) {
        $r = $q['addres'];
    } elseif (($x == 'app_name')) {
        $r = $q['app_name'];
    } elseif (($x == 'deskripsi')) {
        $r = $q['deskripsi'];
    } elseif (($x == 'keyword')) {
        $r = $q['keyword'];
    }
    return $r;
}

function media($x)
{
    $ci = get_instance();
    $q = $ci->db->get_where('set_media', ['media' => $x])->row_array();
    return $q['link'];
}

function get_db($table)
{
    $ci = get_instance();
    $ci->db->limit(6);
    $ci->db->order_by('id', 'DESC');
    $q = $ci->db->get($table)->result();
    return $q;
}