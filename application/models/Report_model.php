<?php
class Report_model extends CI_Model {

    public function daily($date)
    {
        $this->db->select('sales.*, users.name as cashier');
        $this->db->from('sales');
        $this->db->join('users', 'users.id = sales.user_id', 'left');
        $this->db->where('DATE(sales.created_at)', $date);
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

    public function range($from, $to)
    {
        $this->db->select('sales.*, users.name as cashier');
        $this->db->from('sales');
        $this->db->join('users', 'users.id = sales.user_id', 'left');
        $this->db->where('DATE(sales.created_at) >=', $from);
        $this->db->where('DATE(sales.created_at) <=', $to);
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($sales_id)
    {
        $this->db->select('sales_detail.*, products.name');
        $this->db->from('sales_detail');
        $this->db->join('products', 'products.id = sales_detail.product_id');
        $this->db->where('sales_id', $sales_id);
        return $this->db->get()->result();
    }

    public function get_sales($id)
    {
        return $this->db->get_where('sales', ['id' => $id])->row();
    }

}
