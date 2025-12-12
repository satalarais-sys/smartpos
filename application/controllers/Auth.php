<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login() {
        if ($this->session->userdata('user_id')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);

            $user = $this->User_model->getByUsername($username);

            if ($user && password_verify($password, $user->password)) {

                $this->session->set_userdata([
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'name' => $user->name,
                    'logged_in' => TRUE
                ]);

                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error','Username atau password salah!');
                redirect('auth/login');
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
