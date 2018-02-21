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
		$this->load->view('dashboard');
	}

	public function dashboard()
	{
		$data['count_client'] = $this->db->query('SELECT count(*) AS id FROM client')->result();
		$data['clients'] = $this->db->query('SELECT * FROM client')->result();
		$this->load->view('content/dashboard', $data);
	}
}
