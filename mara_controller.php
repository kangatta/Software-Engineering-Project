<?php
 function login()
  {
  	//http://localhost/MaraBer/mara_controller/login_model
  	 $data['title'] = 'login with sessions';  	
       $this->load->view("login_view", $data);
  }
function login_validation()
{
	$this->load->library('form_validation');
	  $this->form_validation->set_rules('username', 'username', 'required');
	     $this->form_validation->set_rules('password', 'password', 'required');
	    if($this->form_validation->run())
	    {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //login function on model
            $this->load->model('login_view');
              if($this->main_model->can_login($username, $password))
                 {
                 	$session_data = array('username'=>$username);
                 	$this->session->set_userdata($session_data);
                 	redirect(base_url().'mara_controller/enter');
                    
                 }  
                 else
                 {
                 	$this->session->set_flashdata('error', 'invalid username and password');
                 	redirect(base_url().'mara_controller/login_view');
                 }
	    }
	    else
	    {
	    	$this->login_view();
	    }
}
function enter()
 {
 	if($this->session->userdata('username')!='')
 	{
 		echo '<h2>Welcome - '.$this->session->userdata('username').' </h2>';
 		echo '<label> <a href = "'.base_url().'mara_controller/logout">Logout</a></label>';
 	}
    else
    {
    	redirect(base_url().'mara_controller/login
    		-view');
    }
 }
 function logout()
 {
 	$this->session->unset_userdata('username');
 	redirect(base_url().'mara_controller/login_view');
 }
 ?>