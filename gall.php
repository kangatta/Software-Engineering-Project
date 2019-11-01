<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gall extends CI_Controller {

    
    
	public function index()
	{
		$this->load->view('gallery');
	
	}
    public function wooden(){
		$this->load->view('woodenearrings');
	}
	public function brass(){
		$this->load->view('brassearrings');
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

    function imageResize(){
	$config['image_library'] = 'gd2';
	$config['source_image'] = 'assets/images/lineA1.png';
	$config['create_thumb']= TRUE;
	$config['maintain_ratio']= TRUE;
	$config['width']= 25;
	$config['height']=20;

	$this->load->library('image_lib',$config);
	$this->image_lib->resize();
	}	
}
