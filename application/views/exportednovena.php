<!DOCTYPE html>
<html>
<head>
	<title>Novena-Two Page Tri Fold</title>
</head>
<style type="text/css">



</style>
<body style="text-align: center">
<div style="width: 650px;height: 450px;border:1px solid black;margin: 0 auto" id="HTMLtoPDF">
	<div class="closingp" style=" width: 30%;
    height: 95%;
    border: 1px solid blue;
    float: left;
    margin-top: 2%;
    margin-left: 2%;">
		<h3 style="font-family:sans-serif;
		font-style: italic;">
			Closing Prayer
		</h3>
		<p style="width: 95%;
    margin: 0 auto;
    font-size: 10px">Listen kindly to our prayers, 0 Lord, and as our faith in your Son, raised from the dead, is deepened, so may our hope of resurrection for your departed servants also find new strength. Through our Lord Jesus Christ, your Son, who lives and reigns with you in the unity of the Holy Spirit, one God, forever and ever.<br> (Roman Missal, Collect - All Souls Day) <br><br>
		Let us offer the greatest of all prayers for the deceased, the Holy Sacrifice of the Mass, as we confidently hope that <br></p>
		<h4><?php echo $name;?></h4>
		<p style="width: 95%;
    margin: 0 auto;
    font-size: 10px">
		may quickly be purified and so enter into the happiness of Heaven! 
		</p>
		<img src="<?php echo base_url();?>assets/img/god_last_page.jpg" style="max-width: 45%">
	</div>
	<div class="wpftd" style=" width: 30%;
    height: 95%;
    border: 1px solid blue;
    float: left;
    margin-top: 2%;
    margin-left: 2%;">
		<h3 style="font-family:sans-serif;
		font-style: italic;">Why Pray for the dead?</h3>
		<p class="uppertxt" style="width: 95%;
    margin: 0 auto;
    font-size: 10px;">Therefore (Judas Maccabeus) made atonement for the dead, that they might be delivered from their sin. (2 Macc 12:46)</p><br>
		<p style="width: 95%;
    margin: 0 auto;
    font-size: 10px">From the beginning the Church has honored the memory of the dead and offered prayers in suffrage for them, above all the Eucharistic sacrifice, so that, thus purified, they may attain the beatific vision of God. (CCC, 1032) The Church also commends us to perform works of penance, almsgiving and prayer.</p><br>
		<p style="width: 95%;
    margin: 0 auto;
    font-size: 10px">The time spent in praying for the Holy Souls in purgatory is an act of love and those delivered through our intercession will be ‘eternally grateful’. They will intercede before the throne of God to obtain the many favors that we ask of them. St. Teresa of Jesus states, “I always obtained the favors which I asked from God, through the intercession of the Poor Souls.</p><p><br>
		<p style="
    width: 95%;
    margin: 0 auto;
    font-size: 10px;
">It is in this spirit that we continue to pray for the repose of the soul of <?php echo $name;?></p><br><br><br><br>
		<p style="width: 95%;
    margin: 0 auto;
    font-size: 10px">
		Purgatory: God's Gift Of Merciful Love<br>
		Gail Ferguson and Kathy Ozog,2012<br>
		<span style="font-size: 14px">www.purgatorynovena.com</span>
		</p>
		
	</div>
	<div class="cover" style="font-style: italic; width: 30%;
    height: 95%;
    border: 1px solid blue;
    float: left;
    margin-top: 2%;
    margin-left: 2%;">
		<br><br><br><br>
		<h3 style="font-family:sans-serif;
		font-style: italic;">Purgatory</h3>
		<h3 style="font-family:sans-serif;
		font-style: italic;">God's Gift Of Merciful Love</h3>
		<img src="<?php echo base_url();?>assets/img/jessus.png" style="width: 80px;"><br><br>
		<h4><?php echo $name;?></h4>
		<?php 
		$birthd = new DateTime($birth);
		$deathd = new DateTime($death);
		?>
		<p><?php echo ($birthd->format('d/m/Y')." - ".$deathd->format('d/m/Y'));?></p>
	</div>
</div>
<a href="#" onclick="HTMLtoPDF()" class="btn btn-success">Download PDF</a>
</body>
	<script src="<?php echo base_url();?>assets/js/jspdf.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.js"></script>
	<script src="<?php echo base_url();?>assets/js/pdfFromHTML.js"></script>
</html>