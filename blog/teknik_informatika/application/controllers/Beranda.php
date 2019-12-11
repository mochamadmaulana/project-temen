<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Blog TI | Beranda';
		$data['get_join'] = $this->m_blog->all_posted();
		$this->load->view('templates/beranda/header', $data);
		$this->load->view('v_beranda', $data);
		$this->load->view('templates/beranda/footer');
	}
}
