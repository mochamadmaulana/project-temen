<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Blog TI | Login';
			$this->load->view('templates/auth/header', $data);
			$this->load->view('v_login');
			$this->load->view('templates/auth/footer');
		} else {
			$email = $this->input->post('email', TRUE);
			$password = sha1($this->input->post('password', TRUE));

			$user = $this->m_blog->login($email);

			if ($user) {
				// jika user ditemukkan kemudian dicek passwordnya
				if ($user['password'] == $password) {
					$data = [
						'email' => $user['email'],
						'id' => $user['id']
					];
					$this->session->set_userdata($data);
					redirect('dashboard');
				} else {
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-danger alert-dismissible fade show" role="alert">Password wrong !
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
					);
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">Email is not registered !
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
				);
				redirect('auth');
			}
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|max_length[8]|matches[password2]', [
			'matches' => '%s not matches !',
			'min_length' => '%s min length 4 !',
			'max_length' => '%s max length 8 !'
		]);
		$this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Blog TI | Register';
			$this->load->view('templates/auth/header', $data);
			$this->load->view('v_register');
			$this->load->view('templates/auth/footer');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('fullname', TRUE)),
				'email' => htmlspecialchars($this->input->post('email', TRUE)),
				'password' => sha1($this->input->post('password1', TRUE)),
				'image' => 'default.jpg',
				'created_account' => time()
			];
			$this->m_blog->regiter($data);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">Registration successfully, please login !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
			);
			redirect('auth');
		}
	}
}
