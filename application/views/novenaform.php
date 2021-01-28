<?php
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {}
else{header('Location:../Users/login');}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Novena Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<style type="text/css">
    textarea
    {
        min-height: 100px;
        min-width: 500px
    }
    .container
    {
        border:1px solid black;

    }
    label{
        padding: 10px
    }
    .btn{
        margin-bottom: 15px
    }
    .container
    {
        max-width: 900px
    }
    input[type=file]
     {
    display: inline;
    }
</style>
<body>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
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
        <li style="display:<?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])){echo "block";}else{echo "none";}?>"><a href="<?php echo base_url();?>Users/logout">Logout</a></li>

        
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   
<section class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Instructions</h1>
            <h3>Follow these Instructions In order to properly use the application</h3>
            <p>1. Use an active email address.</p>
                <p>2. Use proper Address.</p>
                <p>3. Keep the size of the Image under 3 MB.</p>
                <p>4. Use Proper capitalization on the relevant instances in the scentences .</p>
                <p>5. Try to keep the size of image exactly "250 X 350 px", for best results.</p>
        </div>
        <div class="col-md-12 text-center">
            <fieldset>
                <legend class="col-md-12">Details of deceased</legend>
            <form class="form-group text-center" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>Pdfconv/loadform">
                <label class="col-md-12">Name<input  class="form-control" type="text" name="dname" required="required"></label>
                
                <label class="col-md-6">Birthdate<input class="form-control" type="date" name="birthdate" required="required"></label>
                <label class="col-md-6">DeathDate<input class="form-control" type="date" name="deathdate" required="required"></label>
                <label class="col-md-6">Sex<select class="form-control" name="sex" required="required">
                    <option>Select Sex</option>
                    <option>Male</option>
                    <option>Female</option>
                </select></label>
                
                


                <label class="col-md-12">
                    Obituary: (Max 1253 characters)<br><textarea id="textarea" value="" placeholder="Enter Text" name="obt" maxlength="1253"></textarea><p id="textarea_feedback"></p>
                </label>
                <label class="col-md-12">Image of the deceased(400X300px and 'jpg' or 'png' preferred)<br><input class="text-center" type="file" name="image" required="required">
                </label>
                
                
                <legend class="col-md-12">Funeral Home Info</legend>
                <label class="col-md-12">Name <input type="text" name="funame"></label>
                <label class="col-md-12">Website <input type="text" name="webname"></label>
                <label class="col-md-12">Address <input type="text" name="addname"></label>
                <label class="col-md-12">E-mail <input type="text" name="email"></label>
                <label class="col-md-12">Image for funeral home(100X10px and 'jpg' or 'png' preferred)<br><input class="text-center" type="file" name="fimage"></label><br><br>

                <input type="submit" data-toggle="modal" data-target="#myModal" name="submit" value="Submit" class="btn btn-success col-md-12">
            </form> 
            </fieldset>
        </div>


    </div>
</section>
<?php include "templates/footer.php"?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center" style="font-weight: bold;">Generating your PDF...</h4>
        </div>
        <div class="modal-body">
          <p>It might take upto one minute to generate your desired PDF. Please wait and do NOT refresh the page.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <script type="text/javascript">
      $(document).ready(function() {
    var text_max = 1253;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});
  </script>
