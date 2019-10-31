<?php
class usermodel extends CI_Model
{
	public function get_data($a)
	{
		$this->load->database('test');
		$r=$this->db->get($a);
        return $r->result();
	}
}
?>