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
    input[image]
    {
        max-width: 200px
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
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="col-md-6">

    <input type="hidden" name="cmd" value="_s-xclick">

    <input type="hidden" name="hosted_button_id" value="7PVADUAC2PQ3E">

    

    

    <input type="hidden" name="on0" value="Custom Novena">
    Custom Novena<select name="os0" class="col-md-12">

    	<option value="For 1 Copy">For 1 Copy $20.00 USD</option>

    	<option value="Up to 25 Copies">Up to 25 Copies $45.00 USD</option>

    	<option value="Up to 50 Copies">Up to 50 Copies $80.00 USD</option>

    	<option value="Up to 75 Copies">Up to 75 Copies $115.00 USD</option>

    	<option value="Up to 100 Copies">Up to 100 Copies $150.00 USD</option>

    	<option value="Unlimited Copies">Unlimited Copies $200.00 USD</option>

    </select>

 

    <input type="hidden" name="currency_code" value="USD">

    <input class="col-md-12" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="max-width: 200px">

    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

    </form>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="col-md-6">

    <input type="hidden" name="cmd" value="_s-xclick">

    <input type="hidden" name="hosted_button_id" value="TWX8DZG4FHS54">

    

    <input type="hidden" name="on0" value="Generic Novena">Generic Novena<select name="os0" class="col-md-12">

        <option value="For 1 Copy">For 1 Copy $15.00 USD</option>

        <option value="Up to 25 Copies">Up to 25 Copies $35.00 USD</option>

        <option value="Up to 50 Copies">Up to 50 Copies $65.00 USD</option>

        <option value="Up to 75 Copies">Up to 75 Copies $95.00 USD</option>

        <option value="Up to 100 Copies">Up to 100 Copies $125.00 USD</option>

        <option value="Unlimited Copies">Unlimited Copies $170.00 USD</option>

    </select>

   
   

    <input type="hidden" name="currency_code" value="USD">

    <input class="col-md-12" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="max-width: 200px">

    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

    </form>
    <br><br>
    <section class="col-md-12 text-center">
        <h2>Click on the Novena picture below
to see an example</h2>
<a href="http://www.purgatorynovena.com/kon.html" target="__blank"><img src="<?php echo base_url();?>assets/img/demo.png"></a>
    </section>
    <?php 
include "templates/footer.php";
?>
