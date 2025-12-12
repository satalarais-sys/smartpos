<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['base_url'] = 'http://localhost/smartpos_ci3/';
$config['index_page'] = '';
$config['encryption_key'] = 'smartpos_ci3_key_123';

$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'smartpos_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = sys_get_temp_dir();
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

$config['csrf_protection'] = FALSE; // bisa diaktifkan jika mau
$config['global_xss_filtering'] = FALSE;
