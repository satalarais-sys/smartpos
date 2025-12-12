<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('Category_model');
    }

    public function index()
    {
        $data['title'] = "Categories";
        $data['categories'] = $this->Category_model->get_all();
        $data['content'] = 'categories/index';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['title'] = "Add Category";
        $data['content'] = 'categories/form';
        $this->load->view('template', $data);
    }

    public function edit($id)
    {
        $data['title'] = "Edit Category";
        $data['category'] = $this->Category_model->get($id);
        $data['content'] = 'categories/form';
        $this->load->view('template', $data);
    }

    public function save()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');

        $data = ['name' => $name];

        if ($id) {
            $this->Category_model->update($id, $data);
        } else {
            $this->Category_model->insert($data);
        }

        redirect('categories');
    }

    public function delete($id)
    {
        $this->Category_model->delete($id);
        redirect('categories');
    }
}
