<?php
function check_login() {
    $CI =& get_instance();
    if (!$CI->session->userdata('user_id')) {
        redirect('auth/login');
    }
}

function check_admin() {
    $CI =& get_instance();
    if ($CI->session->userdata('role') != 'admin') {
        show_error("Access Denied.", 403);
    }
}
