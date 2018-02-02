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
		$data['user'] = $this->db->query('SELECT * FROM user WHERE id_user = '.$id);
		$data['activities'] = $this->db->query('SELECT * FROM activities JOIN user ON activities.id_user = user.id_user WHERE activities.id_activities = '.$id.' ORDER BY time DESC	');
		$data['task'] = $this->db->query('SELECT * FROM task JOIN user ON task.id_user = user.id_user WHERE task.id_user = '.$id.' ORDER BY date DESC ');
        $this->load->view('activities', $data);
    }
}
