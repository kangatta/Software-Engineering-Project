<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller
{
     
  public function login()
  {
    $this->form_validation->set_rules('username', 'username', 'required');
       $this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
       if($this->form_validation->run() == TRUE)
      {
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        //check users
        $this->db->select('*');
         $this->db->from('details');
          $this->db->where(array('username'=>$username, 'password'=>$password));
          $query= $this->db->get();

          $user=$query->row();
                   //user existence.... 
          if($user->usertype == 'admin'){
              if($user->email)
              {
                //pop up
                $this->session->set_flashdata("success", "you're logged in");

                    //session variable
                    $_SESSION['user_logged']= TRUE;
                    $_SESSION['username'] = $user->username;

                    //redirect to gallery
                    redirect("auth/savedata", "refresh");
                  }
              else
                      {
                        $this->session->set_flashdata("error", "invalid credentials");
                        redirect("auth/login", "refresh");
                      }
              }
          else{
            if($user->email)
              {
                //pop up
                $this->session->set_flashdata("success", "you're logged in");

                    //session variable
                    $_SESSION['user_logged']= TRUE;
                    $_SESSION['username'] = $user->username;

                    //redirect to gallery
                    redirect("auth/home", "refresh");
                  }
              else
                      {
                        $this->session->set_flashdata("error", "invalid credentials");
                        redirect("auth/login", "refresh");
                      }
          }


      }


    $this->load->view('login'); 
  }
  public function register()
  {   
    //form validation
    if(isset ($_POST['register']))
    {
      $this->form_validation->set_rules('name', 'name', 'required');
      $this->form_validation->set_rules('username', 'username', 'required');
      $this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
      $this->form_validation->set_rules('password', 'confirmation password', 'required|min_length[8]|matches[password]');
      $this->form_validation->set_rules('phone', 'phone', 'required|min_length[10]');
      if($this->form_validation->run() == TRUE)
      {
               echo "Form Validated";

              $data= array 
              (
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'username' => $_POST['username'],
                'password' => md5($_POST['password']),
                'usertype' => $_POST['usertype'],
                'phone' => $_POST['phone']

              );

               $this->db->insert('details', $data);

               $this->session->set_flashdata("success", "you may now login");
               redirect("auth/login","refresh");
      }
    }
    //load the page 
     $this->load->view('register');
  }

  public function landing()
  {
    $this->load->view('landing');
    
  }
    public function gallery()
  {
    $this->load->view('gallery');
    
  }
   public function logout()
    {
      unset($_SESSION);
      session_destroy();
      redirect("auth/login", "refresh");
    }
     public  function __construct() 
     {
      parent::__construct();
             // Load url helper
           $this->load->helper('url');
           $this->load->database();
           $this->load->model('stock_model');
          // $this->load->view('nav');
           
     }
     function navi()
     {
      $this->load->view('navigation');
     }
     public function savedata()
    {
        $this->load->view('insert');
    
        if ($this->input->post('save')) {
            $item_img= $this->input->post('Item_img');
            $item_name=$this->input->post('Item_name');
            $description=$this->input->post('Description');
            $stock=$this->input->post('Stock');
            $price=$this->input->post('Price');
            $category=$this->input->post('Category');
            $this->stock_model->saverecords($item_img, $item_name, $description, $stock, $price, $category);
            echo "Records Saved Successfully";
            redirect("auth/displaydata","refresh");

        }
    }
    public function displaydata()
    {
        $result['data']=$this->stock_model->display_records();
        $this->load->view('display_records', $result);
    }
    public function updatedata()
    {
        $result['data']=$this->stock_model->display_records();
        $this->load->view('update_records', $result);
    
        if ($this->input->post('update')) {
            $id=$this->input->post('Item_id');
            $item_img= $this->input->post('Item_img');
            $item_name=$this->input->post('Item_name');
            $description=$this->input->post('Description');
            $stock=$this->input->post('Stock');
            $price=$this->input->post('Price');
            $category=$this->input->post('Category');
            $this->stock_model->update_records($item_img, $item_name, $description, $stock, $price, $category, $id);

            echo "Records updated successfully !";
        }
        // echo "Records updated successfully !";
    }
    public function deletedata()
  {
        $result['data']=$this->stock_model->display_records();
        $this->load->view('delete_records', $result);
        if($this->input->post('delete')){
            $id=$this->input->post('Item_id');
            $this->stock_model->deleterecords($id);
            // echo "Date deleted successfully !";
        }
  }
    public function index()
  {
    $this->load->view('gallery');
  }
  function shopping()
  {
    $this->load->view('shop-single.html');
  }
      public function shop()
  {
     $this->load->view('shop');
  }
    function home()
    {
      $this->load->view('home');
    }
    public function wooden(){
    $this->load->view('woodenearrings');
  }
  public function brass(){
    $this->load->view('brassearrings');
  }
    function imageResize(){
  $config['image_library'] = 'gd2';
  $config['source_image'] = '/image/lineA1.png';
  $config['create_thumb']= TRUE;
  $config['maintain_ratio']= TRUE;
  $config['width']= 25;
  $config['height']=20;

  $this->load->library('image_lib',$config);
  $this->image_lib->resize();
  }
  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function cart()
  {
    $this->load->view('cart.php');
  }
  function ind()
  {
    $this->load->view('ind.php');
  }
  function check()
  {
    $this->load->view('checkout.php');
  }

}