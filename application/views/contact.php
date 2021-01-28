<?php
include 'templates/header.php';
?>
<style type="text/css">
	.caption{
		min-height: 400px;
		background: url("<?php echo base_url();?>assets/img/c1.jpg");
		background-size: cover;
		max-width: 100%;

	}
	.caption h1
	{
		margin-top: 20%;
		font-size: 33px;
		color: white
	}
	.caption p{
		color: white;
		font-size: 28px
	}
	img{
		max-width: 100%
	}
</style>
<title>Purgatory Novena | Home</title>
<section class="container">
	<div class="col-md-12 col-sm-12 col-xs-12 caption pull-left">
		<h1>Purgatory Novena</h1>
		<p>Our Vision:<br>To Empty Purgatory,
		whether you believe it exists or not...</p>
	</div>
</section>
<br><br><br>
<section class="col-md-12 col-sm-12 col-xs-12">
	<h1 class="text-center">Contact Us</h1>
	<div class="col-md-3 col-sm-3 col-xs-3">
		<img src="<?php echo base_url();?>assets/img/contact.jpg">
	</div>
	<div class="col-md-9 col-sm-9 col-xs-9">
		<form class="form-group" style="border-left:1px solid black">
			<label class="col-md-12 col-xs-12">First Name<input type="text" name="fname" class="form-control"></label>
			<label class="col-md-12 col-xs-12"> Lastname<input type="text" name="lname" class="form-control"></label>
			<label class="col-md-12 col-xs-12"> Email<input type="text" name="email" class="form-control"></label>
			<label class="col-md-12 col-xs-12">Comment<textarea class="form-control"></textarea></label>
			<input type="submit" name="submit" class="btn btn-success" value="submit">
		</form>



	</div>
</section>            

<?php include 'templates/footer.php'?>