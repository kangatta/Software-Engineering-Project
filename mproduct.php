<?php
class MProduct extends CI_Model
{
	 function  __construct()
	{
		parent:: __construct();
	}
	function findAll()
	{
		return $this->db->get('stock')->result();
	}
	function find($id='')
	{
		$this->db->where('id', $id);
		return $this->db->get('stock')->row();
	}

}