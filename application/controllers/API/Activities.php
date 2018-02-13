<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Activities extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('api/m_api');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function task()
    {
        $task = $this->input->post('task');
        $status = $this->input->post('status');
        $datetime = date('Y-m-d H:i:s');
        $id_user = 'fe39f4fa359d9d6f0cf096c16efd9efc';

        $data = array(
            'task' => $task,
            'datetime' => $datetime,
            'progress' => $status,
            'id_user' => $id_user
        );

        $query = $this->m_api->post('task', $data);
        if ($query) {
            $response[] = array(
                'id' => $id_user,
                'progress' => $status,
                'task' => $task,
                'datetime' => $datetime,
            );
            $this->m_api->post('dashboard', array('do' => $task), array('id_user'))
        } else {
            $response[] = array(
                'status' => false,
            );
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
