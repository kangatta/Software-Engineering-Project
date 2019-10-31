<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userhist extends CI_Controller {

	public function history()
	{
		$this->load->model('usermodel');
		$a['data']=$this->usermodel->get_data('orders');
		

		$this->load->view('user_history',$a);
	}
}
?>