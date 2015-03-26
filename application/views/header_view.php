
<!DOCTYPE html>
<html>
 <head>
   
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

</head>
 <body>
 
    <div class="container">
      <nav class="navbar-wrapper navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
          <span class="glyphicon glyphicon-th-list"></span></button> <a class="navbar-brand" href="#"></a>

                </div><!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="nav-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(""); ?>"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
                                                
                    </ul>

                    <div class="form-inline pull-right" style="padding: 10px;">
						 <?php echo form_open("user/login"); ?>
						 	<div class="form-group">
							  <label for="email" style="color: white";>Email:</label>
							  <input type="text" id="email" name="email" value="" />
							
							  <label for="password" style="color: white";>Password:</label>
							  <input type="password" id="pass" name="pass" value="" />
							
						  <button type="submit" class="btn btn-primary">Sign in</button>
						  </div>
						 <?php echo form_close(); ?>
						</div>
               		</div>

           
                
			
			
      </nav>
      </div>
      <br>
      <br>