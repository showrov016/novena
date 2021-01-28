<?php
$sex=$_SESSION['sex'];
$p="";
if ($sex=="Male") {
    $p="He";
    $phh="him";
}
else
{
    $p="She";
    $phh="her";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
        </script>
        <script type="text/javascript" src="https://cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js">
        </script>
        <script type="text/javascript" src="https://cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.js">
        </script>
       <!-- <script src="GeneratedPdf/html2canvas.js"></script>-->
        <script src="GeneratedPdf/PDF_Genrator.js"></script>
    </head>
    <body>
        <style type="text/css">

            body
            {
                text-align: center
            }
            h3
            {
                font-family: tangerine;
                font-size: 30px;
                color: blue;
            }

            .closingp, .wpftd, .cover {
                width: 380px;
                height: 770px;
                border: 4px solid blue;
                float: left;
                margin-left: 2%;
            }
            p
            {
                width: 95%;
                margin: 0 auto;
                font-size: 16px
            }
            .wpftd .uppertxt
            {
                font-size: 13px;
                font-style: italic;
            }
            img{
                max-width: 100%
            }
            
        </style>
        <!--<div id="content">
        <h3>The quick brown fox jumps over the lazy dog</h3>
        <p>"The quick brown fox jumps over the lazy dog" is an English-language pangram—a phrase that contains all of the letters of the alphabet.</p>
        </div>-->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author" content="Sharma" />
        <div id="content">
            <div>
                <div class="closingp">
                    <h3>
                        Closing Prayer
                    </h3>
                    <p>Listen kindly to our prayers, 0 Lord, and as our faith in your Son, raised from the dead, is deepened, so may our hope of resurrection for your departed servants also find new strength. Through our Lord Jesus Christ, your Son, who lives and reigns with you in the unity of the Holy Spirit, one God, forever and ever.<br> (Roman Missal, Collect - All Souls Day) <br><br>
                        Let us offer the greatest of all prayers for the deceased, the Holy Sacrifice of the Mass, as we confidently hope that</p> <br>
                    <h4><?php echo $_SESSION['name']; ?></h4>
                    <p>may quickly be purified and so enter into the happiness of Heaven!</p>

                    <img src="/opt/lampp/htdocs/purgatory/assets/img/god_last_page.jpg" style="width: 200px">
                </div>
                <div class="wpftd">
                    <h3>Why Pray for the dead?</h3>
                    <p class="uppertxt">Therefore (Judas Maccabeus) made atonement for the dead, that they might be delivered from their sin. (2 Macc 12:46)</p><br>
                    <p>From the beginning the Church has honored the memory of the dead and offered prayers in suffrage for them, above all the Eucharistic sacrifice, so that, thus purified, they may attain the beatific vision of God. (CCC, 1032) The Church also commends us to perform works of penance, almsgiving and prayer.</p><br>
                    <p>The time spent in praying for the Holy Souls in purgatory is an act of love and those delivered through our intercession will be ‘eternally grateful’. They will intercede before the throne of God to obtain the many favors that we ask of them. St. Teresa of Jesus states, “I always obtained the favors which I asked from God, through the intercession of the Poor Souls.</p><p><br>
                    <p>It is in this spirit that we continue to pray for the repose of the soul of <?php echo $_SESSION['name']; ?></p>
                    <br><br>
                    <p style="font-size: 12px">
                        <?php
                        echo $_SESSION['funame'];
                        echo "<br>";
                        echo $_SESSION['webname'];
                        echo "<br>";
                        echo $_SESSION['addname'];
                        echo "<br>";
                        echo $_SESSION['email'];
                        echo "<br>";
                        if($_SESSION['fimg']!='/opt/lampp/htdocs/purgatory/assets/img/')
                        	{
                        		echo "<img style='height: 50px;width: 50px' src='".$_SESSION['fimg']."'>";                ;
                        	}

                        ?>

                        
                    </p><br><br>
                    <p><br><br><br>
                        Purgatory: God's Gift Of Merciful Love<br>
                        
                        <span style="font-size: 10px">www.purgatorynovena.com</span>
                    </p>

                </div>
                <div class="cover" style="font-style: italic;">
                    <br><br><br><br>
                    <h3>Purgatory</h3>
                    <h3>God's Gift Of Merciful Love</h3>
                    <img src="/opt/lampp/htdocs/purgatory/assets/img/jessus.png" style="height: 380px"><br><br>
                    <h4 style="font-family: 'tangerine';color: blue;font-size: 21px;"><?php echo $_SESSION['name']; ?></h4>
                    <p>
                        <?php
                        $source = $_SESSION['birth'];
                        $source1 = $_SESSION['death'];
                        $birth = new DateTime($source);
                        $death = new DateTime($source1);
                        echo $birth->format('M d,Y - '); // 31.07.2012
                        echo $death->format('M d,Y');
                        ?>

                    </p>
                </div>
            </div>

        </div>


        <br><br>


        <div id="content">
            <div style="width: 1200px;height: 830px;margin: 0 auto;border:1px solid black">
            	<!--Left Part-->
                <div style="width: 350px;float: left;">
                    <h3><?php echo $_SESSION['name']; ?></h3>
                    <p style="font-style: italic;margin: 0;padding: 0">
                        <?php
                        $source = $_SESSION['birth'];
                        $source1 = $_SESSION['death'];
                        $birth = new DateTime($source);
                        $death = new DateTime($source1);
                        echo $birth->format('M d,Y - '); // 31.07.2012
                        echo $death->format('M d,Y');
                        ?>
                    </p><br>
                    <div style="width: 200px;margin: 0 auto;padding: 0"><img src="<?php echo $_SESSION['img']; ?>"></div>
                    <br>
                    <p style="font-family: arial;word-wrap: break-word;font-size: 14px">
                        <?php echo nl2br($_SESSION['obt']);?>
                    </p>

                </div>
                <!--Left Part-->



                <!--Right Part-->
                <div style="width: 845px;float: left;text-align: center">
                    
                	<div style="height: 90px;border-bottom: 1px solid black"><h3 style="font-size: 20px">Introductory Prayer</h3><p style="font-size: 11px">Holy Spirit Help!! May our Blessed Lord intercede with His Father to open my heart that I might receive
					all of the graces dispensed through His beloved Mother. May I be filled with a holy love and zeal for
					the souls in purgatory in order that they may quickly enter into the beatific vision through this simple
					novena. May the Mother of the Most Holy Eucharist, the Mother of the Suffering Souls, she who is full
					of Grace, intercede for <b><?php echo $_SESSION['name'];?></b>  for whom this novena is offered.</p>
				    </div>

					<div style="height: 40px;">
						<h3 style="font-size: 21px">Day 1</h3>
						<p style="font-size: 11px"><b>Prayer to God the Father</b> I come to you, Father, you who created <?php echo $_SESSION['name'];?> and beg you through your incomprehensible love to bring <?php echo $phh;?> into your beatific vision where <?php echo $p;?> may adore you “face to face” for all eternity!<br>
						Our Father... Hail Mary... Glory Be...</p>
					</div><br>
					<div style="float: left;width: 410px">
						<div style="width: 400px;">
						<h3 style="font-size: 21px">Day 2</h3>
						<p style="font-size: 11px"><b>Prayer to God the Son</b><br>I come to you Jesus, true God and true Man, and beg you to thoroughly transform <?php echo $_SESSION['name'];?> through the outpouring of your Divine Mercy which is Love itself, your greatest attribute!<br>
						Our Father... Hail Mary... Glory Be...</p>
					</div>
					<div style="width: 400px;">
						<h3 style="font-size: 21px">Day 3</h3>
						<p style="font-size: 11px"><b>Prayer to God the Holy Spirit</b><br> I come to you Holy Spirit and beg you to infuse <?php echo $_SESSION['name'];?> with refreshing comfort and heavenly joy; that same incomprehensible joy which you share with the Father and the Son and which we confidently hope awaits <?php echo $phh;?> for all eternity!<br>
						Our Father... Hail Mary... Glory Be...</p>
					</div>
					<div style="width: 400px;">
						<h3 style="font-size: 21px">Day 4</h3>
						<p style="font-size: 11px"><b>Prayer to the Blessed Virgin Mary, Mother of God</b><br>. I come to you, Mother of God, Mary most Holy and beg you to hold your precious child, <?php echo $_SESSION['name'];?>, and throughthe merits obtained by your Son on the cross, obtain for <?php echo $phh;?> the graces needed to courageously endure any suffering that may accompany <?php echo $phh;?> transformation, in the hope of sharing in the rewards of Heaven.<br>
						Our Father... Hail Mary... Glory Be...</p>
					</div>
					<div style="width: 400px;">
						<h3 style="font-size: 21px">Day 5</h3>
						<p style="font-size: 11px"><b>Prayer to the Guardian Angel of the deceased</b><br>. I come to you, Guardian Angel of  <?php echo $_SESSION['name'];?> and beg you to bring  <?php echo $phh;?> a word of solace and comfort during this time of Purgation.Although your role to “light, to guard, to rule and to guide” is completed for  <?php echo $phh;?> earthly life, your role as a messenger of love will continue for all eternity!<br>
						Our Father... Hail Mary... Glory Be...</p>
					</div>

					
					</div>

					<div style="float: right;width: 410px">
						<div style="width: 400px;">
						<h3 style="font-size: 21px">Day 6</h3>
						<p style="font-size: 11px"><b>Prayer to St. Joseph, husband of Mary, and foster<br>father of Jesus, “Patron Saint of the Dying”</b><br>. I come to you St. Joseph and beg of you through your patriarchal privilege to plead to your foster Son and His most Holy Mother to obtain for <?php echo $_SESSION['name'];?> that gentle support during the thorough cleansing which <?php echo $p;?> may need and desire in order to behold God face to face.<br>
						Our Father... Hail Mary... Glory Be...</p>
					</div>
					<div style="width: 400px;">
						<h3 style="font-size: 21px">Day 7</h3>
						<p style="font-size: 11px"><b>Prayer to the Patron Saint of the Deceased</b><br>. I come to you St. Kathryn to beg your intercession, united by love, for your namesake  <?php echo $_SESSION['name'];?>, in hopes that  <?php echo $p;?> may soon enter the eternal reward of Heaven.<br>
						Our Father... Hail Mary... Glory Be...</p>
					</div>
					<div style="width: 400px;">
						<h3 style="font-size: 21px">Day 8</h3>
						<p style="font-size: 11px"><b>Prayer to All the Saints in Heaven, both known and unknown</b><br>I come to you Saints who have fought the good fight and now experience great joy, and beg you to intercede for <?php echo $_SESSION['name'];?> in hopes that <?php echo $p;?> may soon share in that indescribable bliss of Heaven.<br>
						Our Father... Hail Mary... Glory Be...</p>
					</div>
					<div style="width: 400px;">
						<h3 style="font-size: 21px">Day 9</h3>
						<p style="font-size: 11px"><b>Prayer to The Triune God</b><br> I come to you most Holy Trinity in profound gratitude for the gift of Purgatory and beg you to accept the humble prayers of the faithful for <?php echo $_SESSION['name'];?>. May <?php echo $p;?> achieve the holiness necessary to enter the joy of Heaven (CCC1030) where <?php echo $p;?> may offer praise, honor and thanksgiving to the Most Holy Triune God in union with Mary, all the angels and saints, and the entire Church Triumphant!<br>
						Our Father... Hail Mary... Glory Be...</p>
					</div>

					
					</div>
					
					
					

                </div>

                <!-- 	<div class="cover" style="font-style: italic;">
                                <br><br><br><br>
                                <h3>Purgatory</h3>
                                <h3>God's Gift Of Merciful Love</h3>
                                <img src="C:\xampp\htdocs\purgatory\assets\img\jessus.png" style="height: 380px"><br><br>
                                <h4><?php echo $_SESSION['name']; ?></h4>
                                <p>
                <?php
                $source = $_SESSION['birth'];
                $source1 = $_SESSION['death'];
                $birth = new DateTime($source);
                $death = new DateTime($source1);
                echo $birth->format('d.m.Y - '); // 31.07.2012
                echo $death->format('d.m.Y');
                ?>
                                                
                                        </p>
                        </div> -->
            </div>

        </div>
        <?php
//header( "refresh:0.5;url=funeral_Pdf" );
        ?>
    </body>
</html>
