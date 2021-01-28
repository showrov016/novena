<?php 
include "templates/header.php";
?>
	<div id="login-box">
  <div class="left">
    
	<form method="post" action="<?php echo base_url();?>Users/account">
     
     <label>Change Password</label>
     <input type="password" name="prevpass" class="form-control" placeholder="Your Previous Password">
     <input type="password" name="newpass" class="form-control" placeholder="Your New Password">   
     <input type="submit" name="submit" value="submit">
    </form>
  </div>

</div>
<?php 
include "templates/footer.php";
?>

