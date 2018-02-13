<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$where = array(
			'username' => 'admin'
		);
		$data['admin'] = $this->m_data->select('admin', $where);
		$this->load->view('user', $data);
    }
    
    public function activities($id)
    {
		$data['dashboard'] = $this->db->query('SELECT * FROM dashboard WHERE id_user = "'.$id.'"');
		$data['activities'] = $this->db->query('SELECT * FROM activities JOIN dashboard ON activities.id_user = dashboard.id_user WHERE activities.id_user = "'.$id.'" ORDER BY datetime DESC');
		$data['task'] = $this->db->query('SELECT * FROM task JOIN dashboard ON task.id_user = dashboard.id_user WHERE task.id_user = "'.$id.'" ORDER BY datetime DESC ');
		$data['status'] = $this->db->query('SELECT COUNT(*) as progress FROM task WHERE progress = "Waiting" AND id_user = "'.$id.'"');
        $this->load->view('activities', $data);
    }
}
