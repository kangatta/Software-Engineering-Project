<?php
class Hello_Model extends CI_Model 
{
	function saverecords($data)
	{
	// $query="insert into users values('','"$email"','$phone','$code')";
		if($this->db->insert('payment',$data)){
			return true;
		}
	return false;
	}
}