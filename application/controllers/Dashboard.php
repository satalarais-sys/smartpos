<?php
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_login();
        $this->load->model('Dashboard_model');
    }

    public function index()
    {
        $data = [
            'title'               => "Dashboard",
            'total_products'      => $this->Dashboard_model->total_products(),
            'total_sales_today'   => $this->Dashboard_model->total_sales_today(),
            'income_today'        => $this->Dashboard_model->total_income_today(),
            'last_transactions'   => $this->Dashboard_model->last_transactions(),
            'chart'               => $this->Dashboard_model->chart_sales_last7(),
            'content'             => "dashboard/index"
        ];

        $this->load->view('template', $data);
    }
}
