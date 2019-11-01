<?php
class Hello extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('Hello_Model');
	}

	public function savedata()
	{
		//load registration view form
		// $this->load->view('payment');
	
		// //Check submit button 
		// if($this->input->post('confirm'))
		// {
		//get form's data and store in local varable
		$e=$this->input->post('email');
		$p=$this->input->post('phone');
		$c=$this->input->post('code');

		$data=array(
			'email'=> $e,
			'phone'=> $p,
			'code'=> $c
		);
		
		
//call saverecords method of Hello_Model and pass variables as parameter
		$query = $this->Hello_Model->saverecords($data);
		if($query){
			$this->session->set_flashdata('feedback','Records Saved Successfully');
			redirect(base_url('index.php/pay/pay2'));
			echo "Records Saved Successfully";
		}else{
			$this->session->set_flashdata('feedback','Records Not Saved Successfully');
			echo "Records Not Saved Successfully";
		}		
		
		
	}
}
?>