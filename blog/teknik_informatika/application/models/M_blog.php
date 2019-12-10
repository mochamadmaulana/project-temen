<?php

class M_blog extends CI_Model
{
	public function login($email)
	{
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}

	public function regiter($data)
	{
		$this->db->insert('user', $data);
	}

	public function posting($data)
	{
		$this->db->insert('post', $data);
		// belum beres
	}

	public function all_category()
	{
		return $this->db->get('category')->result();
	}

	public function all_posted()
	{
		return $this->db->get('post')->result();
	}
}
