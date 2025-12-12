<?php
class Pos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_login();
        $this->load->model("Pos_model");
        $this->load->model("Product_model");
    }

    public function index()
    {
        $data['title'] = "POS";
        $data['cart'] = $this->Pos_model->get_cart();
        $data['content'] = "pos/index";
        $this->load->view("template", $data);
    }

    public function scan()
    {
        $barcode = $this->input->post("barcode");
        $product = $this->Pos_model->find_barcode($barcode);

        if (!$product) {
            $this->session->set_flashdata("error","Barcode tidak ditemukan");
            redirect("pos");
        }

        $check = $this->Pos_model->check_cart_item($product->id);

        if ($check) {
            $new_qty = $check->qty + 1;
            $new_total = $new_qty * $check->price;

            $this->Pos_model->update_cart($check->id, [
                "qty" => $new_qty,
                "total" => $new_total
            ]);
        } else {
            $insert = [
                "product_id" => $product->id,
                "price" => $product->price,
                "qty" => 1,
                "total" => $product->price
            ];
            $this->Pos_model->add_cart($insert);
        }

        redirect("pos");
    }

    public function delete_item($id)
    {
        $this->Pos_model->delete_item($id);
        redirect("pos");
    }

    public function process_payment()
    {
        $total = $this->input->post("total");
        $paid = $this->input->post("paid");
        $change = $paid - $total;

        // simpan header
        $invoice = "INV".time();

        $this->db->insert("sales", [
            "invoice" => $invoice,
            "total" => $total,
            "paid" => $paid,
            "change_money" => $change
        ]);

        $sale_id = $this->db->insert_id();

        // simpan detail
        $cart = $this->Pos_model->get_cart();
        foreach ($cart as $c) {
            $this->db->insert("sales_detail", [
                "sale_id" => $sale_id,
                "product_id" => $c->product_id,
                "price" => $c->price,
                "qty" => $c->qty,
                "total" => $c->total
            ]);

            // kurangi stok
            $product = $this->Product_model->get($c->product_id);
            $new_stock = $product->stock - $c->qty;

            $this->Product_model->update($product->id, ["stock" => $new_stock]);
        }

        // kosongkan keranjang
        $this->Pos_model->clear_cart();

        // redirect ke struk
        redirect("pos/receipt/".$sale_id);
    }

    public function receipt($sale_id)
    {
        $data['sale'] = $this->db->get_where("sales", ["id" => $sale_id])->row();
        $data['detail'] = $this->db->select("sales_detail.*, products.name")
                                   ->join("products","products.id = sales_detail.product_id")
                                   ->get_where("sales_detail", ["sale_id" => $sale_id])->result();

        $this->load->view("pos/receipt", $data);
    }
}
