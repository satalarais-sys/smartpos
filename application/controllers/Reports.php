<?php
class Reports extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_login();
        $this->load->model('Report_model');
    }

    public function daily()
    {
        $date = $this->input->get('date') ?: date('Y-m-d');

        $data['title'] = "Daily Report";
        $data['date'] = $date;
        $data['reports'] = $this->Report_model->daily($date);
        $data['content'] = 'reports/daily';
        $this->load->view('template', $data);
    }

    public function range()
    {
        $from = $this->input->get('from') ?: date('Y-m-01');
        $to   = $this->input->get('to') ?: date('Y-m-d');

        $data['title']   = "Range Report";
        $data['from']    = $from;
        $data['to']      = $to;
        $data['reports'] = $this->Report_model->range($from, $to);
        $data['content'] = 'reports/range';
        $this->load->view('template', $data);
    }

    public function detail($id)
    {
        $data['title']   = "Transaction Detail";
        $data['sales']   = $this->Report_model->get_sales($id);
        $data['details'] = $this->Report_model->detail($id);
        $data['content'] = 'reports/detail';
        $this->load->view('template', $data);
    }
}
