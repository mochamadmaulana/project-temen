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
	}

	public function all_category()
	{
		return $this->db->get('category')->result();
	}

	public function all_posted()
	{
		$this->db->select('post.*, category.name as name_category, user.name as name_user');
		$this->db->from('post');
		$this->db->join('category', 'category.id = post.id_category');
		$this->db->join('user', 'user.id = post.id_user');
		return $this->db->get()->result();
	}
}
