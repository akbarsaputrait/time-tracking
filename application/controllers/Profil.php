<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function index()
    {
        $this->load->view('profil');
	}
	
    public function upload_file()
    {
		$this->load->model('m_data');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc';
        $config['max_size'] = 2000;
        $config['max_width'] = 1300;
        $config['max_height'] = 1024;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload', $error);
        } else {
            $upload_data = $this->upload->data();

            $this->m_data->insert_img($upload_data['file_name'], $upload_data['full_path']);

            $data = array('upload_data' => $this->upload->data());

            $this->load->view('profil', $data);
        }
    }
}
