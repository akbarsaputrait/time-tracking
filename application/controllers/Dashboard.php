<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->view('dashboard', $data);
	}
}
