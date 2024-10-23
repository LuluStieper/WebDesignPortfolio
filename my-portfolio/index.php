<?php
    mb_internal_encoding('UTF-8');
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];
            $header = "Content-type: text/plain; charset=UTF-8\r\n";

            $to = "kontakt@lulu-design.de";
            $body = "";

            $body .= "Absender: ".$userName. "\r\n";
            $body .= "Antworten an: ".$userEmail. "\r\n". "\r\n";
            $body .= "Nachricht: ". "\r\n". "\r\n".$message;

            mail($to, $messageSubject, $body, $header);

            $message_sent = true;
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lulu Design - Webdesign, Webentwicklung, Grafikdesign</title>
    <meta name="description" content="Webdesign, Webentwicklung und Grafikdesign - professionell und kreativ auf Dich und Dein Unternehmen abgestimmt.">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/fonts.css">

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
</head>
<body>
   <nav>
    <a href="index.php"><img src="img/logo_white.png" alt="" id="logo"></a>
    <ul id="menulist">
        <li><div class="los-gehts"><a href="#so-funktionierts" onclick="closeMenu()">Los geht's!</a></div></li>
        <li><a href="#angebot" onclick="closeMenu()" id="a1">Angebot</a></li>
        <li><a href="#rezension" onclick="closeMenu()" id="a2">Referenzen</a></li>
        <li><a href="#kontakt" onclick="closeMenu()" id="a3">Kontakt</a></li>
    </ul>
    <img src="img/menu_white.png" onclick="openMenu()" alt="" id="menu">
   </nav>

   <div class="start">
    <div class="start-text">
       <h2 id=container>
            Deine Werbung <br>sollte 
            <div id=flip>
                <div id="f"><div id="word1">beeindrucken.</div></div>
                <div id="f"><div id="word2">überzeugen.</div></div>
                <div id="f"><div id="word3">inspirieren.</div></div>
            </div>
        </h2>

        <p>
            Investiere deshalb in Dich und Deine Vision.<br><br>
            Webdesign, Webentwicklung und Grafikdesign - professionell und kreativ<br> 
            auf Dich und Dein Unternehmen abgestimmt.
        </p>
    </div>
    <img src="img/startLaptop.png" alt="">
   </div>
   <div class="line2"></div>
   <div class="werbung">
    <h1>Gute Werbung</h1>
    <h3>ist das Erste, was Deine Kunden sehen.</h3>
   </div>

   <div class="angebot" id="angebot">
        <div class="angebot-background">
            <div class="angebot-border">
                <h4>Mein Angebot</h4>
                <div class="field-wrap">
                    <div class="field">
                        <h5>Webdesign & Webentwicklung</h5>
            
                        <p>vollständig responsives & modernes Webdesign </p>
                        <div class="line"></div>
                        <p>kreativ und individuell auf Dich und Deine Zielgruppe abgestimmt</p>   
                        <div class="line"></div>
                        <p> spannende Animationen und Microinteractions</p>   
                        <div class="line"></div>
                        <p>inklusive Einrichtung von Webmail und Email-Adresse</p> 

                    </div>
                    <div class="field">
                        <h5>Grafikdesign</h5>

                        <p>Logo-Design</p>   
                        <div class="line"></div>
                        <p>Gestaltung von Werbeartikeln</p>    
                        <div class="line"></div>
                        <p>Gestaltung von Autowerbung</p>
                        <div class="line"></div>
                        <p>Erstellen eines Designkonzepts<br> für Dein Unternehmen</p>
                        <img src="img/grafikdesign3.png" alt="" id="img1">
                    </div>
                </div> 
            </div>
        </div>
   </div>

   <div class="design" id="design">
        <h6>Interesse geweckt?<br> Lass Dich von meinen <span>Designvorlagen</span> überzeugen!</h6>
        <div class="design-wrap">
            <a href="ballett.html"><img src="img/design1.png" alt=""></a>
            <a href="dinner.html"><img src="img/design2.png" alt=""></a>
       </div>
       <div class="design-wrap">
            <a href="ski.html" id="singleIMG"><img src="img/design3.png" alt="" ></a>
            <p>
                Hinweis:<br>
                Diese Designvorlagen sind frei erfunden und haben keinen Bezug zur Realität.
                Sie dienen ausschließlich zur Inspiration und zeigen neben verschiedenen Designs auch besondere Animationen und Effekte.
            </p>
        </div>
   </div>

   <div class="line2"></div>

   <div class="angebot" id="rezension">
        <div class="angebot-border">
            <h4>Referenzen</h4>
            <div class="field-wrap">
                <div class="field">
                    <b>"Yogafreude Lindenberg" Webdesign</b>
        
                    <a href="https://www.yogafreude-lindenberg.de">www.yogafreude-lindenberg.de</a>
                    <a href="https://www.yogafreude-lindenberg.de"><img src="img/yoga.png" alt=""></a>
                    
                </div>

                <div class="field">
                    <b>"Das Schüli" Web- & Grafikdesign</b>
                    <a href="https://www.das-schueli.de">www.das-schueli.de</a>
                    <a href="https://www.das-schueli.de"> <img src="img/das_schueli.png" alt=""></a>
                    
                </div>
            </div> 
            <div class="field-wrap">
                <div class="field">
                    <b>"Hofladen Zum Ursprung" Web- & Grafikdesign</b>
                    <a href="https://www.hofladen-ursprung.de">www.hofladen-ursprung.de</a>
                    <a href="https://www.hofladen-ursprung.de"><img src="img/hofladen.png" alt=""></a> 
                </div>

                <div class="field">
                    <b>Qigong Grafikdesign</b>
                    <img src="img/qigong.png" alt="">
                </div>
            </div> 
        </div>
   </div>

   <div class="line2"></div>

   <div class="ablauf" id="so-funktionierts">
    <h4>So funktioniert´s!</h4>
        <div class="wrap">
            <div class="ueber-mich">
                <div class="ueber-mich-border">
                    <p>
                        Hey, ich bin Lulu und studiere Medieninformatik in Berlin.<br>
                        Ich liebe es einfach kreativ zu sein und habe während des Studiums Web- und Grafikdesign für mich entdeckt.<br>
                        Melde Dich bei mir und lass uns zusammen Werbung erschaffen, die wirklich zu Dir passt - individuell und modern!
                    </p>
                    <img src="img/portrait3.png" alt="">
                </div>
            </div>
            <div class="ablauf-wrap">
                <div class="ablauf-point">
                    <div class="number">1.</div>
                    <p>
                        Du meldest Dich bei mir und erzählst mir von Deinen Vorstellungen, Wünschen und Plänen. 
                        Wir besprechen erstmal ganz unverbindlich, ob unsere Erwartungen übereinstimmen und entscheiden, 
                        ob und wie wir zusammenarbeiten werden. Dann geht es los ;)
                    </p>
                </div>
                <div class="ablauf-point">
                    <div class="number">2.</div>
                    <p>
                        Nun mache ich mich an die Arbeit. 
                        Dabei halte ich Dich ständig auf dem Laufenden und bespreche die nächsten Schritte mit Dir. <br>
                        Während des Designprozesses werden wir uns solange austauschen, bis die Gestaltung vollständig Deinen Wünschen entspricht.
                        Passt alles, mache ich mich an die Programmierung Deiner Webseite. Dabei programmiere ich alles mit HTML und CSS, vereinzelt kommt
                        auch PHP und JavaScript zum Einsatz.<br>
                        Die Grafik-Designs, die ich für Dich entworfen habe, lasse ich Dir zukommen oder unterstütze
                        Dich gleich bei der Bestellung der Werbeartikel in externen Druckereien.
                    </p>
                </div>
                <div class="ablauf-point">
                    <div class="number">3.</div>
                    <p>
                       Jetzt ist das Größte geschafft und ich überlasse Dir alle wichtigen Zugangsdaten zum Webhosting, sowie eine Anleitung per PDF,
                       sodass Du in Zukunft auch selbst kleine Änderung, wie z.B. Bilder oder Texte, an deiner Webseite vornehmen kannst.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="line2"></div>
    <div class="kontakt" id="kontakt">
        <h4>Kontakt</h4>
        <div class="kontakt-color">
            <div class="kontakt-border">
                <div class="kontakt-wrap">
                    <div class="kontakt-text">
                        <h5 class="textColor">Ich freue mich auf dich!</h5>
                        <p>
                            Lulu Design<br><br>
                            Lulu Stieper <br><br>
                            015253930169<br><br>
                            <a href="mailto:kontakt@lulu-design.de">kontakt@lulu-design.de</a>
                        </p>
                    </div>

                    <form action="index.php" method="POST" accept-charset="UTF-8">
                        <input type="text" id="name" name="name" placeholder="Name" required>

                        <input type="email" id="email" name="email" placeholder="Email" required>

                        <input type="text" id="subject" name="subject" placeholder="Betreff" required>

                        <textarea name="message" id="message" cols="30" rows="12" placeholder="Nachricht" required></textarea>

                        <button type="submit" id="bttn3">Senden</button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
    <footer>
        <img src="img/logo_white.png" alt="">
        <a href="impressum.html">Impressum</a>
        <a href="datenschutz.html">Datenschutz</a>
    </footer>
</body>

<script>
    var menuList = document.getElementById("menulist");

    menuList.style.height = "0px";

    function openMenu(){
        if (menuList.style.height == "0px"){
            menuList.style.height = "500px";
        } else {
            menuList.style.height = "0px";
        }
    }

    function closeMenu(){
        var menuList = document.getElementById("menulist");
        menuList.style.height = "0px";
    }
</script>
</html>
