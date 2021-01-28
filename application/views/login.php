<?php 
include "templates/header.php";
?>
	<div id="login-box">
  <div class="left">
	<form method="post" action='<?= base_url();?>Users/login'>
    
    <input type="text" name="email" placeholder="E-mail" required="required"/>
    <input type="password" name="password" placeholder="Password" required="required"/>
    
    
    <input type="submit" name="submit" value="Sign in" />
    </form>
    <br>
    <button class="btn btn-success" id="forgot-pass" onclick="show()">Forgot Password</button>
    <form id="fusername" style="display: none" method="post" action='<?= base_url();?>Users/forgotpass'>
    	
    	<input type="text" id="fusername" name="username" placeholder="Please enter you username" class="form-control">
    	<input type="submit" id="fsubmit" name="subpass">	
    </form>
</div>
<script type="text/javascript">
	function show()
	{
		document.getElementById('fusername').style.display='block';
		
	}
</script>
</div>
<?php 
include "templates/footer.php";
?>

