<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_login();
        $this->load->model(['Product_model']);
        $this->load->library('cart');
    }

    public function index() {
        $data['title'] = "POS";
        $data['products'] = $this->Product_model->get_all();
        $data['content'] = "pos/index";
        $this->load->view('template', $data);
    }

    public function scan() {
        $barcode = $this->input->post('barcode');

        $product = $this->db->get_where('products', ['barcode' => $barcode])->row();

        if (!$product) {
            echo json_encode(['status' => false, 'msg' => 'Product not found']);
            return;
        }

        // Add to cart
        $cart_item = [
            'id' => $product->id,
            'qty' => 1,
            'price' => $product->price,
            'name' => $product->name
        ];
        $this->cart->insert($cart_item);

        echo json_encode(['status' => true]);
    }

    public function remove($rowid) {
        $this->cart->remove($rowid);
        redirect('pos');
    }

    public function reset() {
        $this->cart->destroy();
        redirect('pos');
    }

    public function checkout() {

        $invoice = "INV" . time();
        $total = $this->cart->total();
        $paid = $this->input->post('paid');
        $change = $paid - $total;

        // Insert sales
        $this->db->insert('sales', [
            'invoice' => $invoice,
            'total' => $total,
            'paid' => $paid,
            'change_amount' => $change
        ]);

        $sales_id = $this->db->insert_id();

        // Insert detail & reduce stock
        foreach ($this->cart->contents() as $c) {
            
            // Insert detail
            $this->db->insert('sales_detail', [
                'sales_id' => $sales_id,
                'product_id' => $c['id'],
                'price' => $c['price'],
                'qty' => $c['qty'],
                'total' => $c['subtotal']
            ]);

            // Reduce stock
            $this->db->set('stock', 'stock - ' . $c['qty'], FALSE);
            $this->db->where('id', $c['id']);
            $this->db->update('products');
        }

        $this->cart->destroy();

        $this->session->set_flashdata('msg', 'Transaction completed');
        redirect('pos');
    }
}
