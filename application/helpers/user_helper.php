<?php


function is_logged_in()

{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect(base_url('administrasi/auth'));
    } else {
        $role_id = $ci->session->userdata('role');
        $menu = $ci->session->userdata('role');
    }
}
