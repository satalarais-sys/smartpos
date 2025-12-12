<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Units extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_login();
        $this->load->model('Unit_model');
    }

    public function index() {
        $data['title'] = "Units";
        $data['units'] = $this->Unit_model->get_all();
        $data['content'] = 'units/index';
        $this->load->view('template',$data);
    }

    public function add() {
        $data['title'] = "Add Unit";
        $data['content'] = 'units/form';
        $this->load->view('template',$data);
    }

    public function edit($id) {
        $data['title'] = "Edit Unit";
        $data['unit'] = $this->Unit_model->get($id);
        $data['content'] = 'units/form';
        $this->load->view('template',$data);
    }

    public function save() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');

        $data = ['name'=>$name];

        if ($id)
            $this->Unit_model->update($id,$data);
        else
            $this->Unit_model->insert($data);

        redirect('units');
    }

    public function delete($id) {
        $this->Unit_model->delete($id);
        redirect('units');
    }
}
