<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
	public function index()
	{
		$data_session =  $this->session->userdata('email');
		$data['user'] = $this->m_blog->login($data_session);
		$data['get_posted'] = $this->m_blog->all_posted();
		$data['get_category'] = $this->m_blog->all_category();
		$data['title'] = 'Blog TI | Posted';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('v_post', $data);
		$this->load->view('templates/footer');
	}

	public function input()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('image', 'Image', 'trim');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data_session =  $this->session->userdata('email');
			$data['user'] = $this->m_blog->login($data_session);
			$data['get_category'] = $this->m_blog->all_category();
			$data['title'] = 'Blog TI | Form posted';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('v_post_form', $data);
			$this->load->view('templates/footer');
		} else {

			$config['upload_path']          = './assets/img/posted';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2048;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$img = $this->upload->data('file_name');
				$params = [
					'id_user' => $this->session->userdata('id'),
					'id_category' => $this->input->post('category', TRUE),
					'image' => $img,
					'title' => $this->input->post('title', TRUE),
					'description' => $this->input->post('description', TRUE),
					'created_post' => time()
				];
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success alert-dismissible fade show btn-sm" role="alert">Posting successfully !
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
				);
				$this->m_blog->posting($params);
				redirect('post');
			}
		}
	}
}
