<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data_session =  $this->session->userdata('email');
		$data['user'] = $this->m_blog->login($data_session);
		$data['title'] = 'Blog TI | Dashboard';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('v_dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id');
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">Logout successfully !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
		);
		redirect('auth');
	}
}
