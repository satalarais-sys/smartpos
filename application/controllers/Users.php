<?php
class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_login();
        check_admin();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = "User Management";
        $data['users'] = $this->User_model->get_all();
        $data['content'] = 'users/index';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['title'] = "Add User";
        $data['content'] = 'users/add';
        $this->load->view('template', $data);
    }

    public function add_action()
    {
        $insert = [
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'name'     => $this->input->post('name'),
            'role'     => $this->input->post('role')
        ];
        $this->User_model->insert($insert);

        redirect('users');
    }

    public function edit($id)
    {
        $data['title'] = "Edit User";
        $data['user']  = $this->User_model->get($id);
        $data['content'] = 'users/edit';
        $this->load->view('template', $data);
    }

    public function edit_action($id)
    {
        $update = [
            'username' => $this->input->post('username'),
            'name'     => $this->input->post('name'),
            'role'     => $this->input->post('role')
        ];

        $password = $this->input->post('password');
        if ($password) {
            $update['password'] = md5($password);
        }

        $this->User_model->update($id, $update);
        redirect('users');
    }

    public function delete($id)
    {
        $this->User_model->delete($id);
        redirect('users');
    }

}
