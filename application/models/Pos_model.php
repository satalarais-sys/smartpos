<?php
class Pos_model extends CI_Model {

    public function find_barcode($barcode)
    {
        return $this->db->get_where("products", ["barcode" => $barcode])->row();
    }

    public function get_cart()
    {
        return $this->db->select("temporary_cart.*, products.name")
                        ->join("products","products.id = temporary_cart.product_id")
                        ->get("temporary_cart")->result();
    }

    public function check_cart_item($product_id)
    {
        return $this->db->get_where("temporary_cart", ["product_id" => $product_id])->row();
    }

    public function add_cart($data)
    {
        return $this->db->insert("temporary_cart", $data);
    }

    public function update_cart($id, $data)
    {
        return $this->db->where("id", $id)->update("temporary_cart", $data);
    }

    public function delete_item($id)
    {
        return $this->db->delete("temporary_cart", ["id" => $id]);
    }

    public function clear_cart()
    {
        return $this->db->empty_table("temporary_cart");
    }
}
