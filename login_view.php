<! DOCTYPE html>
   <html>
   	  <head>
   	  	  <title>MaraBer Login Module</title>
   	  </head>
   	  <body>
   	  	  <div class = "logincontainer" >
   	  	  	  <form method = "POST" action = "<?php echo base_url()?>mara_controller/login_view_validation">
   	  	  	  	  <div class = "logincredentials">
   	  	  	  	  	  <label>USERNAME</label>
   	  	  	  	  	     <input type = "text" name = "usermame" class = "logincredentials"/>
   	  	  	  	  	       <span class = "incorrect"><?php echo form_error('username'); ?></span>
   	  	  	  	  </div>
   	  	  	  	  <div class = "logincredentials">
   	  	  	  	  	  <label>PASSWORD</label>
   	  	  	  	  	     <input type = "pasword" name = "password" class = "logincredentials"/>
   	  	  	  	  	       <span class = "incorrect"><?php echo form_error('password'); ?></span>
   	  	  	  	  </div>
   	  	  	  	  <div class = "logincredentials">
   	  	  	  	  	  <input type = "submit" name = "login" value = "login"/>
   	  	  	  	  	    <?php 
                      echo $this->session->flashdata("error");
                      ?>
   	  	  	  	  </div>
   	  	  	  </form>
   	  	  </div>
   	  </body>
   </html> 