<?php
class Dashboard_model extends CI_Model {

    public function total_products() {
        return $this->db->count_all('products');
    }

    public function total_sales_today() {
        $today = date('Y-m-d');
        return $this->db->where("DATE(created_at)", $today)
                        ->count_all_results('sales');
    }

    public function total_income_today() {
        $today = date('Y-m-d');
        $this->db->select_sum('total');
        $this->db->where("DATE(created_at)", $today);
        $q = $this->db->get('sales')->row();
        return $q->total ? $q->total : 0;
    }

    public function last_transactions() {
        return $this->db->order_by('id','DESC')->limit(5)->get('sales')->result();
    }

    public function chart_sales_last7() {
        $sql = "
            SELECT DATE(created_at) as date, SUM(total) as total
            FROM sales
            WHERE created_at >= DATE(NOW()) - INTERVAL 7 DAY
            GROUP BY DATE(created_at)
            ORDER BY DATE(created_at)
        ";
        return $this->db->query($sql)->result();
    }
}
