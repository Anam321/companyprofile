<?php


function app($x)

{
    $ci = get_instance();
    $q=$ci->db->get_where('set_app',['id'=>1])->row_array();
    if ($x=='telpon') {
       $r=$q['telpon'];
    } elseif(($x=='email')) {
        $r=$q['email'];
    }elseif(($x=='app_name')) {
        $r=$q['app_name'];
    }elseif(($x=='logo')) {
        $r=$q['logo'];
    }
    return $r;
}
