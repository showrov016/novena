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
        
    </head>
    <body>
        <style type="text/css">
            body
            {
                text-align: center;
                color: blue;
            }
            .closingp>h3,.wpftd>h3,.cover>h3
            {
                font-family:sans-serif;
                font-style: italic;
            }
            .closingp, .wpftd, .cover {
                width: 305px;
                height: 1000px;
                border: 1px solid blue;
                float: left;
                margin-top: 2%;
                margin-left: 2%;
            }
            p
            {
                width: 95%;
                margin: 0 auto;
                font-size: 18px;
                line-height: 1.8;
            }

            img{
                max-width: 80%
            }
            .closingp img
            {
                height:350px
            }
           

        </style>
        <!--<div id="content">
        <h3>The quick brown fox jumps over the lazy dog</h3>
        <p>"The quick brown fox jumps over the lazy dog" is an English-language pangram—a phrase that contains all of the letters of the alphabet.</p>
        </div>-->


        <div style="width: 500px;height: 800px;margin: 0 auto;border:1px solid">
            <h1>Purgatory</h1>
            <h2>God's Gift of Merciful Love</h2>
            
            <img src="/opt/lampp/htdocs/purgatory/assets/img/god_last_page.jpg" style="height: 500px;width: 355px;"><br><br>
            <p> <?php echo $_SESSION['name'];?></p>
            <!-- <p>
            <?php
            //spliting text
            $text = $_POST[obituary];
            $splitat = strpos($text, " ", 257);
            $col1 = substr($text, 0, $splitat);
            $col2 = substr($text, $splitat);
            if ($_POST[gender] == "she") {
                $prep = her;
            } else {
                $prep = him;
            }
            ?> 
            </p> -->
        </div><br><br>

        <div style="width: 970px;height: 800px;margin: 0 auto;border:1px solid">
            <div style="width: 450px;float: left;height: 800px">
                <br><br><br><br>
                <div style="height: 500px;width: 400px"><img src="<?php echo $_SESSION['img'];?>"></div><br><br>
                
                <p><?php

			$source = $_SESSION['birth'];
			$source1 = $_SESSION['death'];
			$birth = new DateTime($source);
			$death = new DateTime($source1);
			echo $birth->format('d.m.Y - '); // 31.07.2012
			echo $death->format('d.m.Y');

			
			 ?></p>
            </div>
            <div style="width: 500px;float: left">
                <h2>Obituary</h2>
                <p style="font-family: arial;word-wrap: break-word;font-size: 13px">
                        <?php echo nl2br($_SESSION['obt']);?>
                    </p>
            </div>
        </div><br><br>

        <div style="width: 970px;height: 800px;margin: 0 auto;border:1px solid">
            <div style="width: 470px;height: 800px;float: left">
                <h1>Why Pray for the dead?</h1>
                <p class="uppertxt">“IT IS A HOLY AND WHOLESOME THOUGHT TO PRAY FOR THE DEAD, THAT THEY MAY BE LOOSED FROM SINS”
                    (2 MACC 12:46)</p><br>
                <p>But, you may ask, what are the benefits of praying for the dead?  How can I continue to concretely show my love for <br><br>
                    <b><?php echo $_SESSION['name'];?></b>
                </p><br>
                <p>We will receive great compensation for our brief, but powerful act of love.  The Holy Souls will be “eternally grateful” for our prayerful assistance in their delivery from purgatory.  They will intercede before the throne of God to obtain the many favors that we ask of them.  St. Teresa of Jesus states, “I always obtained the favors which I asked from God, through the intercession of the Poor Souls.”
                    Two modern day examples of holiness are Mother Teresa of Calcutta and Pope John Paul II.  Both of these holy people  requested prayers to be offered after their deaths (to relieve their souls from purgatory).  To concretely show our love for both of these holy souls, we did indeed pray for them daily until they were beatified.
                </p><br><br><br>

            </div>


            <div style="width: 470px;height: 800px;float: left">
                <h3>Introductory Prayer</h3>
                <div style="height: 400px;width: 460px"><img src="/opt/lampp/htdocs/purgatory/assets/img/home1.png"></div>
                <div style="height: 300px;width: 460px">
                    <p>Holy Spirit Help!!  <br>
                        May our Blessed Lord intercede with His Father to open my heart that I might receive all of the graces dispensed through His beloved Mother.  May I be filled with a holy love and zeal for the souls in purgatory in order that they may quickly enter into the beatific vision through this simple novena.  May the Mother of the Most Holy Eucharist, the Mother of the Suffering Souls,she who is full of Grace, intercede for <?php echo $_SESSION['name'];?>
                        Of whom this novena is offered.
                    </p>
                </div>


            </div>

        </div><br><br>


        <div style="width: 970px;height: 800px;margin: 0 auto;border:1px solid">
            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>Day One</h1>
                <p>
                    <b>Prayer to God the Father</b><br>

                    I come to you, Father, <br>
                    you who created<br>
                    <br>
                    <?php echo $_SESSION['name'];?><br><br>

                    and beg you through your <br>
                    incomprehensible love to bring her <br>
                    into your beatific vision where <?php echo $p;?> may adore you “face to face” for all eternity!<br><br><br>
                    OUR FATHER...<br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;HAIL MARY...<br></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLORY BE...</p>
                    


                </p><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
            </div>


            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>Day Two</h1>

                <p><b>Prayer to God the Son</b> <br>

                    I come to you Jesus, true God and true Man, and beg you to thoroughly transform<br>

                    <br>
                    <?php echo $_SESSION['name'];?><br><br>

                    through the outpouring of your Divine Mercy which is Love itself, your greatest attribute!<br><br><br><br><br>
                    OUR FATHER...<br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;HAIL MARY...<br></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLORY BE...</p>

                </p><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
            </div>

        </div><br><br>
        <div style="width: 970px;height: 800px;margin: 0 auto;border:1px solid">
            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>Day Three</h1>
                <p>
                    <b>Prayer to God the Holy Spirit</b><br>

                    I come to you Holy Spirit and beg you   <br>
                    to infuse<br>

                   <br>
                    <?php echo $_SESSION['name'];?><br><br>

                    with refreshing comfort and heavenly joy; that same incomprehensible joy which you share with the Father and <br>the Son and which we confidently hope awaits her for all eternity!<br><br><br>
                    OUR FATHER...<br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;HAIL MARY...<br></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLORY BE...</p>



                </p><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">

            </div>


            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>Day Four</h1>

                <p><b>Prayer to the Blessed Virgin Mary,Mother of God</b> <br>

                    I come to you,
                    Mother of God, Mary most Holy and beg you to hold your precious child<br>

                  <br>
                    <?php echo $_SESSION['name'];?><br><br>

                    and through the merits obtained by your Son on the cross obtain for <?php echo $phh;?>               
                    the graces needed to courageously endure any suffering that may accompany <?php echo $phh;?> transformation, in the hope of sharing in the rewards of heaven.<br><br><br>
                    OUR FATHER...<br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;HAIL MARY...<br></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLORY BE...</p>

                </p><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">

            </div>

        </div><br><br>

        <div style="width: 970px;height: 800px;margin: 0 auto;border:1px solid">
            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>Day Five</h1>
                <p>
                    <b>Prayer to God the Father</b><br>

                    I come to you, Father, <br>
                    you who created<br>

                    <br>
                    <?php echo $_SESSION['name'];?><br><br>

                    and beg you through your <br>
                    incomprehensible love to bring <?php echo $phh;?> <br>
                    into your beatific vision where <?php echo $p;?> may adore you “face to face” for all eternity!<br><br><br><br>
                    OUR FATHER...<br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;HAIL MARY...<br></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLORY BE...</p>



                </p><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">

            </div>


            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>Day Six</h1>

                <p><b>Prayer to the Guardian Angel of the deceased*</b> <br>

                    I come to you Guardian Angel of<br>

                   <br><br>
                    <?php echo $_SESSION['name'];?><br><br>

                    and beg you to bring <?php echo $phh;?> a word of solace and comfort during this time of purgation.

                    *Although your role to “light, to guard, to rule and to guide” is completed your role as a messenger of love will continue for all <br>
                    eternity!
                   <br><br><br>
                    OUR FATHER...<br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;HAIL MARY...<br></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLORY BE...</p>

                </p><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">

            </div>

        </div><br><br>

        <div style="width: 970px;height: 800px;margin: 0 auto;border:1px solid">
            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>Day Seven</h1>
                <p>
                    <b>Prayer to St. Joseph, husband of Mary, and foster father of Jesus. “Patron Saint of the Dying”</b><br>

                    I come to you St. Joseph and beg of you through your patriarchal privilege to plead to your foster Son and His most Holy Mother to obtain for<br>


                   <br>
                    <?php echo $_SESSION['name'];?><br><br>


                    that gentle support during the

                    thorough cleansing which <?php echo $p;?> may need and desire in order to behold God face to face.<br><br><br><br>
                    OUR FATHER...<br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;HAIL MARY...<br></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLORY BE...</p>


                </p><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">

            </div>


            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>Day Eight</h1>

                <p><b>Prayer to the
                        Patron Saint of the Deceased</b> <br>

                    I come to you St. Kathryn<br>
                    to beg your intercession, united by love,  for your namesake<br>

                    <br><br><br>
                    <?php echo $_SESSION['name'];?><br><br>

                    in hopes that <?php echo $p;?> may soon <br>
                    enter the eternal reward of heaven.<br>
                    <br><br><br>
                    OUR FATHER...<br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;HAIL MARY...<br></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLORY BE...</p>
                </p><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">

            </div>

        </div><br><br>

        <div style="width: 970px;height: 800px;margin: 0 auto;border:1px solid">
            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>Day Nine</h1>
                <p>
                    <b>Prayer to
                        All the Saints in Heaven, both known and unknown</b><br>

                    I come to you Saints who have fought the good fight and now experience great joy, and beg you to intercede for   

                  <br>
                    <?php echo $_SESSION['name'];?><br><br>

                    in hopes that <?php echo $p;?> may soon share in that indescribable bliss of heaven.
                    <br><br><br>
                    OUR FATHER...<br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;HAIL MARY...<br></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLORY BE...</p>



                </p><br><br><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">

            </div>


            <div style="width: 470px;height: 800px;float: left">
                <br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">
                <h1>CLOSING PRAYERTO THE TRINITY</h1>

                <p><b>Prayer to The Triune God
                    </b> <br>

                    I thank you Most Holy Trinity 
                    for Purgatory; after all, “if there was no purgatory, where would so many lazy, negligent and unpurified souls go?” Reverend J.F. Durin. <br>
                    “Blessed be the God and Father of our Lord Jesus Christ, the Father of <br>
                    mercies, and the God of all consolation, who comforts us in all our tribulation.”
                    (2 Cor 1:3,4).<br>
                    Let us offer the greatest of all prayers for the deceased, the Holy Sacrifice of the Mass, as we confidently hope that <br>
                    <?php echo $_SESSION['name'];?><br>


                    may quickly be purified and so enter into the happiness of heaven!


                </p><br><br><br>
                <img src="/opt/lampp/htdocs/purgatory/assets/img/bar.png">

            </div>

        </div><br><br>

        <div style="width: 500px;height: 800px;margin: 0 auto;border:1px solid">
            <h1>Purgatory</h1>
            <h2>God's Gift of Merciful Love</h2>
           <img src="/opt/lampp/htdocs/purgatory/assets/img/god_last_page.jpg" style="height: 450px;width: 320px;">
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
                                echo '<img style="height: 50px;width: 50px" src='.$_SESSION['fimg'].'>';                ;
                            }

                        ?>
                        
                        
                        
                    </p>
            <!-- <p>
            <?php
            //spliting text
            $text = $_POST[obituary];
            $splitat = strpos($text, " ", 257);
            $col1 = substr($text, 0, $splitat);
            $col2 = substr($text, $splitat);
            if ($_POST[gender] == "she") {
                $prep = her;
            } else {
                $prep = him;
            }
            ?> 
            </p> -->
        </div><br><br>


        <!-- 		<div style="width: 69%;height: 100%;float: left">
                                <div style="height: 15%;border-bottom: 1px solid">
                                        <h2 style="font-family: cursive">Introductory Prayer</h2>
                                        <p>Holy Spirit Help!! May our Blessed Lord intercede with His Father to open my heart that I might receive all of the graces dispensed through His beloved Mother. May I be filled with a holy love and zeal for the souls in purgatory in order that they may quickly enter into the beatific vision through this simple novena. May the Mother of the Most Holy Eucharist, the Mother of the Suffering Souls, she who is full 
                                        of Grace, intercede for '.$_POST[dec].' for whom this novena is offered.</p>
                                </div>
                                <div style="height: 84%;">
                                        <div style="height: 15%;">
                                                <h3 style="font-family: cursive;">Day 1</h3>
                                                <p><b>Prayer to God the Father</b><br>'I come to you, Father, you who created '.$_POST[dec].' and beg you through your incomprehensible love to bring her into your beatific vision where she may adore you “face to face” for all eternity! 
                                                Our Father... Hail Mary... Glory Be...'</p>
                                        </div>
                                        <div style="height: 84%;;float: left">
                                                <div style="width: 50%;;float: left;height: 100%">
                                                        <h3 style="font-family: cursive;">Day 2</h3>
                                                <p><b>Prayer to God the holy Spirit</b>I come to you Jesus, true God and true Man, and beg you to thoroughly transform  '.$_POST[dec].' the outpouring of your Divine Mercy which is Love itself, your greatest attribute!
                                                Our Father... Hail Mary... Glory Be...</p><br>
        
                                                <h3 style="font-family: cursive;">Day 3</h3>
                                                <p><b>Prayer to God the holy Spirit</b><br>'I come to you Holy Spirit and beg you to infuse '.$_POST[dec].' with refreshing comfort and heavenly joy; that same incomprehensible joy which you share with the Father and the Son and which we confidently hope awaits her for all eternity!
        Our Father... Hail Mary... Glory Be...'</p><br>
                                                <h3 style="font-family: cursive;">Day 4</h3>
                                                <p><b>Prayer to the Blessed Virgin Mary, Mother of God</b><br>''I come to you, Mother of God, Mary most Holy and beg you to hold your precious child, '.$name.', and through the merits obtained by your Son on the cross, obtain for '.$prep.' the graces needed to courageously endure any suffering that may accompany '.$prep2.' transformation, in the hope of sharing in the rewards of Heaven.
        Our Father... Hail Mary... Glory Be..'</p><br>
                                                <h3 style="font-family: cursive;">Day 5</h3>
                                                <p><b>Prayer to the Blessed Virgin Mary, Mother of God</b><br>'I come to you Guardian Angel of [NAME], and beg you to bring her a word of solace during this time of purgation. Although your role to "light, to guard , to rule and to guide" completed for her earthy life. Your role as a messenger of love will continue for all eternity <br>Our Father... Hail Mary... Glory Be..'</p><br>
                                                </div>
        
                                                <div style="width: 48%;;float: left;height: 100%">
                                                        <h3 style="font-family: cursive;">Day 6</h3>
                                                <p><b>Prayer to St. Joseph</b>I come to you St. Joseph and beg of you through your 
                                                        patriarchal privilege to plead to your foster Son and His most Holy Mother to obtain for '.$name.' that gentle 
                                                        support during the thorough cleansing which '.$_POST[gender].' may need 
                                                        and desire in order to behold God face to face. 
                                                        Our Father... Hail Mary... Glory Be...</p><br>
        
                                                <h3 style="font-family: cursive;">Day 7</h3>
                                                <p><b>Prayer to Patron Saint of Deceased</b><br>I come to you St. Kathryn to beg your intercession, united by love, for your namesake Kathryn Sue Ozog, in hopes that she
        may soon enter the eternal reward of Heaven.
        Our Father... Hail Mary... Glory Be...'</p><br>
                                                <h3 style="font-family: cursive;">Day 8</h3>
                                                <p><b>Prayer to All the saints of heaven,both known and unknown</b><br>'I come to you Saints who have fought the good fight and now experience great joy, and beg you to intercede for Kathryn Sue Ozog in hopes that she may soon share in that indescribable bliss of Heaven.
        Our Father... Hail Mary... Glory Be...'</p><br>
                                                <h3 style="font-family: cursive;">Day 9</h3>
                                                <p><b></b><br>'I come to you most Holy Trinity in profound gratitude for the gift of Purgatory and beg you to accept the humble prayers of the faithful for Kathryn Sue Ozog. May she achieve the holiness necessary to enter the joy of Heaven (CCC1030) where she may offer praise, honor and thanksgiving to the Most Holy Triune God in union with Mary, all the angels and saints, and the entire Church Triumphant!
        Our Father... Hail Mary... Glory Be...'</p><br>
                                                </div>
                                        </div>
                                </div>
                                
                        </div> -->

        <?php
        //header("refresh:0.5;url=funeral_Pdffull");
        ?>
        <!-- <a href="funeral_Pdffull" download target="_blank">download PDF file</a> -->
    </body>
</html>
