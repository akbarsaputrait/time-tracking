<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function dashboard()
    {
        $this->load->view('dashboard');
    }

    public function admin()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run()) {
            if($user = 'admin' && $pass = 'admin')
            {
                redirect(base_url('dashboard'));
            }else{
                $this->load->view('login');
            }
        } else {
            $this->load->view('login');
        }
    }
}
