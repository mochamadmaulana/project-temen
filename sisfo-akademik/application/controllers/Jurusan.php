<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{

	public function index()
	{
		$data['get_jurusan'] = $this->jurusan_model->get_data()->result();
		$data['title'] = 'Jurusan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('jurusan/view_jurusan', $data);
		$this->load->view('templates/footer');
	}

	public function form()
	{
		$this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required', [
			'required' => '%s Tidak boleh Kosong !'
		]);
		$this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required', [
			'required' => '%s Tidak boleh Kosong !'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Tambah Jurusan';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('jurusan/view_form_jurusan');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'kode_jurusan' => $this->input->post('kode_jurusan'),
				'nama_jurusan' => $this->input->post('nama_jurusan')
			];
			$this->jurusan_model->insert_data($data);
			$this->session->set_flashdata(
				'message',
				'<div class="alert  alert-success alert-dismissible fade show" role="alert">Created Jurusan Success !
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
						</button>
				</div>'
			);
			redirect('jurusan');
		}
	}

	public function delete($id = null)
	{
		if ($this->jurusan_model->delete($id)) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert  alert-success alert-dismissible fade show" role="alert">Deleted Success !
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
						</button>
				</div>'
			);
			redirect('jurusan');
		}
	}

	public function edit($id)
	{
		$data['user'] = $this->jurusan_model->edit('jurusan', ['id_jurusan' => $id])->result();
		$data['title'] = 'Edit Jurusan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('jurusan/view_form_edit', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required', [
			'required' => '%s Tidak boleh Kosong !'
		]);
		$this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required', [
			'required' => '%s Tidak boleh Kosong !'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->edit($id);
		} else {
			$data = [
				'kode_jurusan' => $this->input->post('kode_jurusan'),
				'nama_jurusan' => $this->input->post('nama_jurusan')
			];
			$this->jurusan_model->update(['id_jurusan' => $id], $data, 'jurusan');
			$this->session->set_flashdata(
				'message',
				'<div class="alert  alert-success alert-dismissible fade show" role="alert">Updated Success !
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					</button>
			</div>'
			);
			redirect('jurusan');
		}
	}
}
