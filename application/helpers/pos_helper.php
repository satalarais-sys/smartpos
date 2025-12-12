<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function hitung_subtotal($qty, $harga)
{
    return $qty * $harga;
}

function hitung_diskon($total, $diskon)
{
    return $total - ($total * ($diskon / 100));
}

function generate_invoice()
{
    return 'INV-' . date('YmdHis');
}
