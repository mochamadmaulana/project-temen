<?php

class Jurusan_model extends CI_Model
{
	public function get_data()
	{
		return $this->db->get('jurusan');
	}

	public function insert_data($data)
	{
		$this->db->insert('jurusan', $data);
	}

	public function delete($id)
	{
		return $this->db->delete('jurusan', ['id_jurusan' => $id]);
	}

	public function edit($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
