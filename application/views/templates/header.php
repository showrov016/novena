
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
   .navbar-brand
   {
    font-size: 35px !important;
   } 
   img
   {
    max-width: 100%
   }
  </style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/register_css.css">

</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Purgatory</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav pull-right">
        <li><a href="<?php echo base_url();?>home/index">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url();?>home/aboutus">About Us</a></li>
        <li><a href="<?php echo base_url();?>home/how">How</a></li>
        <li><a href="<?php echo base_url();?>home/why">Why</a></li>
        <li><a href="<?php echo base_url();?>home/index">Saints Perspective</a></li>
        <li><a href="<?php echo base_url();?>home/products">Products</a></li>
        <li><a href="<?php echo base_url();?>home/contact">Contact Us</a></li>
        <li style="display:<?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])){echo "none";}else{echo "block";}?>"><a href="<?php echo base_url();?>Users/login">Login</a></li>
        <li style="display:<?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])){echo "none";}else{echo "block";}?>"><a href="<?php echo base_url();?>Users/register">Register</a></li>
        <li style="display:<?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])){echo "block";}else{echo "none";}?>"><a href="<?php echo base_url();?>Users/dashboard">Dashboard</a></li>
        <li style="display:<?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])){echo "block";}else{echo "none";}?>"><a href="<?php echo base_url();?>Users/account">Change Password</a></li>
        <li style="display:<?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])){echo "block";}else{echo "none";}?>"><a href="<?php echo base_url();?>Users/logout">Logout</a></li>

        
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>