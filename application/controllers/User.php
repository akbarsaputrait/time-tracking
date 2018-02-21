<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function index()
    {
        $data['clients'] = $this->db->query('SELECT * FROM client');
        $data['tasks'] = $this->db->query('SELECT * FROM task');
        $this->load->view('user', $data);
    }

    public function activities()
    {
        $this->load->view('activities');
		}
		
		public function get($id)
		{
			$data['clients'] = $this->db->query('SELECT * FROM client WHERE id = '.$id);
			$data['activities'] = $this->db->query('SELECT * FROM activities JOIN client ON activities.userid = client.id WHERE activities.userid = '.$id.'');
			$data['tasks'] = $this->db->query('SELECT * FROM task JOIN client ON task.userid = client.id WHERE task.userid = '.$id.'');
			$data['status'] = $this->db->query('SELECT COUNT(*) as status FROM task WHERE status = "Waiting" AND userid = "'.$id.'"');
			$this->load->view('content/activities', $data);
		}
}
