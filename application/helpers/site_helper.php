<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function rupiah($angka)
{
    return number_format($angka, 0, ',', '.');
}

function tanggal_indo($tgl)
{
    return date('d/m/Y H:i', strtotime($tgl));
}

function active_menu($uri)
{
    $ci = get_instance();
    return ($ci->uri->segment(1) == $uri) ? 'active' : '';
}

function encode_id($id)
{
    return base64_encode($id);
}

function decode_id($id)
{
    return base64_decode($id);
}
