<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function update_stok($product_id, $qty_keluar)
{
    $ci = get_instance();
    $ci->db->set('stock', 'stock - ' . intval($qty_keluar), FALSE);
    $ci->db->where('id', $product_id);
    $ci->db->update('products');
}
