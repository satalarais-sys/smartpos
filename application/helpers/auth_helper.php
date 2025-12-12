<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('user_id')) {
        redirect('auth/login');
    }
}

function is_admin()
{
    $ci = get_instance();
    return ($ci->session->userdata('role') == 'admin');
}
