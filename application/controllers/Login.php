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
            $where = array(
                'username' => $user,
                'password' => $pass
            );
            $cek = $this->m_data->select('admin', $where);
            if($cek->num_rows() > 0)
            {
                foreach ($cek->result() as $data)
                {
                    $sess_data['id_admin'] = $data->id_admin;
                    $sess_data['username'] = $data->username;
                    $this->session->set_userdata($sess_data);
                }
                redirect(base_url('dashboard'));
            }else{
                $this->load->view('login');
            }
        } else {
            $this->load->view('login');
        }
    }
}
