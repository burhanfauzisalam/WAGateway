<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        redirect('dashboard');
    }
    
    public function login() {
        $this->load->view('login');
    }

    public function login_process() {
        $email = $this->input->post('email');
        $password = $this->input->post('password'); // Gunakan bcrypt di real project!

        $user = $this->User_model->get_user($email, $password);

        if ($user) {
            $this->session->set_userdata([
                'user_id'   => $user->id,
                'email'     => $user->email,
                'logged_in' => true
            ]);
            $data = [
                'email'      => $user->email,
                'ip_address' => $this->input->ip_address(),
                'user_agent' => $this->input->user_agent(),
                'status'     => 'login'
            ];
        
            $this->db->insert('logs', $data);

            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Email atau password salah!');
            redirect('login');
        }
    }

    public function logout() {
        $data = [
            'email'      => $this->session->userdata('email'),
            'ip_address' => $this->input->ip_address(),
            'user_agent' => $this->input->user_agent(),
            'status'     => 'logout'
        ];
    
        $this->db->insert('logs', $data);

        $this->session->sess_destroy();
        redirect('login');
    }
}
