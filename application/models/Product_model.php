<?php
class Product_model extends CI_Model {

    public function get_all()
    {
        return $this->db->order_by("id","DESC")->get("products")->result();
    }

    public function insert($data)
    {
        return $this->db->insert("products", $data);
    }

    public function get($id)
    {
        return $this->db->get_where("products", ["id" => $id])->row();
    }

    public function update($id, $data)
    {
        return $this->db->where("id", $id)->update("products", $data);
    }

    public function delete($id)
    {
        return $this->db->delete("products", ["id" => $id]);
    }
}
