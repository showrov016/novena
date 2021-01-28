<?php
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {}
else{header('Location:../Users/login');}
?>
<?php include 'templates/header.php'?>
<h2 class="text-center">Download previous Novena</h2>
<style type="text/css">
	body
	{
		text-align: center !important;
	}
</style>
<form class="form-group" id="formid" method="post" action="<?php echo base_url();?>Prevpdf/index">
<select class="text-center" style="min-height: 35px" id="fdrop" name="desname" required="required" onclick="change()"> 
  <option>Select</option>
	<option>Create Novena</option>
	<img src="">
	<?php 
    foreach ($novena as $trn){
    	
        echo'<option class="form-control">'; 
        echo $trn['name'];
		echo'</option>';
    }
?>
</select>
<select name="output" required="required" style="min-height: 35px">
	<option>Select Novena Type</option>
	<option>Two page</option>
	<option>Multi Page</option>
	<option style="display: none" id="edit">Edit Novena</option>
</select>
<br>
<input type="submit" data-toggle="modal" data-target="#myModal" name="novsubmit" class="btn btn-success" value="Submit">

</form>
<?php include 'templates/footer.php'?>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Generating your PDF...</h4>
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
    function change()
    {
      if (document.getElementById('fdrop').value!='Create Novena')
       {
        document.getElementById('edit').style.display="block";
       }
       else
       {
        document.getElementById('edit').style.display="none";
       }
      
    }
    $(window).bind("pageshow", function() {
      $('#formid').trigger("reset");
      
});
  </script>
  

