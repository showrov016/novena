<?php 
include "templates/header.php";
echo phpinfo();
?>

  <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form method="post" action='<?= base_url();?>Users/create_user'>
    <input type="text" name="name" placeholder="Name" required="required" />
    <input type="text" name="email" placeholder="E-mail" required="required"/>
    <input type="password" name="password" placeholder="Password" required="required"/>
    <input type="password" name="password2" placeholder="Retype password" required="required"/>
    
    <input type="submit" name="signup_submit" value="Sign me up" />
    </form>
  </div>
  

  
</div>
  
  
<?php 
include "templates/footer.php";
?>
