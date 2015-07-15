<?php
require_once('../../offer.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script>
    <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-PMMNV5"></script>
    <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-52J882"></script>
    <script type="text/javascript">
        function dtimes(d) {
//g is the number of the day [1..7]
            var g = 2
// Array of day names
            var dayNames = new Array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");

// Array of month Names
            var monthNames = new Array("Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "October", "November", "Dezember");

            if (g == 1 || g == 4 || g == 6) {

                var now = new Date();
                now.setDate(now.getDate() + d + 1);
                document.write(monthNames[now.getMonth()] + " " + (now.getDate()));
            }

            else if (g == 2 || g == 5 || g == 7) {
                var now = new Date();
                now.setDate(now.getDate() + d + 1 - 1);
                document.write(monthNames[now.getMonth()] + " " + (now.getDate()));
            }

            else if (g == 3) {
                var now = new Date();
                now.setDate(now.getDate() + d + 1 - 2);
                document.write(monthNames[now.getMonth()] + " " + (now.getDate()));
            }

        }


        function dtime(d) {
            var dayNames = new Array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
            var monthNames = new Array("Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "October", "November", "Dezember");
            var now = new Date();
            now.setDate(now.getDate() + d + 1);
            document.write(dayNames[now.getDay()] + " " + (now.getDate()) + ". " + monthNames[now.getMonth()] + " " + now.getFullYear());
        }
    </script>
    <link rel="stylesheet" type="text/css" href="css/fb_comments.css" media="all">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/mask.js" type="text/javascript"></script>

    <script type="text/javascript">
        //FOR LIKES
        $(document).ready(function () {
            $(".reply").click(function () {
                var id = $(this).attr("id");
                var dataString = 'id=' + id;

                $.ajax
                ({
                    type: "POST",
                    url: "facebook/rating.php",
                    data: dataString,
                    cache: false,
                    success: function (html) {
                        $("#" + id).fadeOut("slow");
                        $("#x" + id).fadeIn("slow");
                        $("#x" + id).html(html);
                    }
                });
            });
        });

        //FOR TEXTAREA MASK
        jQuery(function ($) {
            $("#fb_textarea").mask("IHR NAME:  *?******************************** | IHR KOMMENTAR: ************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************", {placeholder: " "});
        });

        //FOR TEXTAREA GRAY TEXTS
        $(document).ready(function () {

            $('form input.message_box, form textarea.message_box').formtips({
                tippedClass: 'tipped'
            });

        });
    </script>

    <title>Health Journal: Monica de Rossi's NEUE intensive 4 Wochen Anti-Falten Formel.</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description"
          content="Die ewig junge Monica de Rossi, die mit 72 noch aussieht wie 40 präsentierte vor Frauen aus Deutschland und Österreich ihre weltbekannte 4 Wochen Anti-Falten Formel. Die Methode des französischen Models fordert herkömmliche Anti-Falten Lösungen heraus.">
    <meta name="keywords"
          content="Hydroface Anti-Aging System, anti-aging, Verjüngung, Falten, Creme, Anti-Falten Creme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="no">

</head>
<body oncontextmenu="return false" ondragstart="return false;" ondrop="return false;">

<!-- Google Tag Manager -->
<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-52J882"
    height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-52J882');</script>
<!-- End Google Tag Manager -->


<img
    src="http://www.track306.info/cdir.php?referrer=&amp;a=&amp;c=&amp;l=1&amp;b=&amp;placement_id=&amp;flight_id=&amp;banner_id=&amp;hcountry_id=&amp;hcity_id=&amp;additional_params=&amp;network=&amp;keyword=&amp;ad=&amp;sitetarget="
    width="1" height="1" alt="" class="trackPixel" style="display: none;">

<div class="wrapper">
    <div id="topsection">

        <div class="fl"><a href="product.php" target="_blank"><img src="img/logo.jpg" width="351" alt=""
                                                                   height="100"></a></div>
        <div class="published_date">
            <strong>Letzte Änderung :&nbsp;
                <script type="text/javascript">dtime(-3);</script>
                Sonntag 12. Juli 2015 &nbsp;&nbsp;&nbsp;</strong><br>
            <a href="product.php" class="fb_right">
                <span class="fb_count_11">People like this: 828.296.</span>
                <span class="fb_like_btn_11"><span id="ll"></span><span id="lm">Like!</span><span id="lr"></span></span>
            </a>
        </div>

        <div class="clear">
            <p align="center">&nbsp;</p>
        </div>

        <div id="mainnav">
            <span>Fitness</span>
            <span>Liebe&amp;Sex</span>
            <span>Essen</span>
            <span>Sexy Strand-Körper </span>
            <span>Diäten</span>
            <span>Gesundheit</span>
            <span>Yoga</span>
            <span>Beauty&amp;Style</span>
        </div>

    </div>
</div>
<div class="wrapper">
    <div id="maincontent">
        <div id="breadcrumbnav">
            <a href="product.php" target="_blank">Home</a> &gt; <a href="product.php" target="_blank">Gesundheit</a>
            &gt; <a href="product.php" target="_blank">Beauty&amp;Style</a><br><br>
        </div>
        <h1><span class="headlinered"><strong><u>SONDERBERICHT:</u></strong></span><strong> Monica de Rossi's NEUE
                intensive 4 Wochen Anti-Falten Formel..</strong></h1>

        <div id="mainsubhead"><br>
            <img src="img/logos2.jpg" alt="" width="800" height="37"><br>
            <strong>Dieser Bericht des Health Journal Magazins wurde verfasst um die wahren Hintergründe zu zeigen, die
                sich hinter einer außergewöhnlichen Verjüngungs-Therapie verbergen.</strong>
        </div>
        <div id="maintext">
            <div class="note">
                <span><strong><span>Wichtige Information:</span></strong> <a href="product.php" target="_blank">Hydroface </a> ist in den meisten Läden bereits ausverkauft. Aber bis  <script
                        type="text/javascript">dtime(-1);</script>Dienstag 14. Juli 2015 ist es online noch verfügbar.<a
                        href="product.php" target="_blank"> </a>.</span>
            </div>

            <div class="mainnewsimg"><br>
                <img alt="" src="img/newnews.jpg" width="154" height="152"><br>
                <strong>Unsere Reporterin Annette Hartmann </strong><br>widmete sich einer neuen Anti-Falten Formel, die
                schnell an Popularität auf der ganzen Welt gewonnen hatte. <br>
            </div>
            <p class="f16">(<strong>Health Journal</strong>) - Die ewig junge Monica de Rossi, die mit 72 noch aussieht
                wie 40 präsentierte vor Frauen aus Deutschland und Österreich ihre weltbekannte 4 Wochen Anti-Falten
                Formel. Die Methode des französischen Models fordert herkömmliche Anti-Falten Lösungen heraus.</p>

            <p><strong>Über 10.000 deutsche Frauen über 35 </strong>haben hierzulande bereits den herkömmlichen –
                ineffektiven – Lösungen der Kosmetikindustrie den Rücken gekehrt und sich an Monica gewandt. Egal wie
                Sie im Moment aussehen – nach nur einem Monat können auch Sie sich an den überraschten Gesichtern
                erfreuen, wenn man Sie 10 Jahre jünger einschätzt.</p>

            <p>Es ist nie zu spät um jung und attraktiv zu sein. Erleben Sie es selbst in nur einem Monat – Ihr Spiegel
                wird Ihnen die Wahrheit zeigen. Achten Sie auf Ihre Stirn, die Augen und Lippen. Falten werden nahezu
                verschwunden sein und Ihre Haut wird weich, straff und geschmeidig sein. Wie ist das möglich? </p>

            <div class="cf"></div>
            <div class="video">
                <h2 class="video__header">[VIDEO] Die Mikropartikel der de Rossi's Formel werden von der Haut
                    aufgenommen <br>wie Wasser von einem Schwamm </h2>

                <div class="video__film-wrapper">
                    <br>

                    <div class="video__">

                    </div>
                    <p class="video__caption"><span>Video</span>: Die Mikropartikel der de Rossi's Formel werden von der
                        Haut aufgenommen wie Wasser von einem Schwamm:</p>
                    <br>
                </div>
            </div>

            <p><strong>de Rossi's Mikropartikel Anti-Falten Behandlung </strong></p>

            <p><em>Hydroface Anti-Aging System</em> ist eine 4 wöchige Kur von Monica de Rossi – eine einzigartige
                Behandlung.</p>

            <p><em>Herkömmliche Cremen </em> werden von der Haut nur schwer aufgenommen. zu groß, um in die Poren
                einzudringen. <em>Hydroface Anti-Aging System</em> hat Mikropartikel, <strong>200 kleiner als die Poren
                    der Haut, </strong>sind und die tief in die Haut eindringen, um sie zu hydrieren. Dieser Prozess
                <strong> strafft die Haut und vermindert Ihre Falten.</strong>.<br>Hydroface Anti-Aging System besteht
                aus zwei Cremen: Hydroface AM / PM Anti-Wrinkle Complex (für alle Hautpartien) und Hydroface Advanced
                Under Eye Formula (speziell für die Augenpartien). </p>

            <p class="text_center">
            <span class="Apple-style-span">
                <span><strong>Garantierte Resultate</strong></span>
            </span>
            </p>

            <ul class="model-face2">
                <li class="i1">Alternative zu Botox</li>
                <li class="i2">Die Antwort auf Ihre Falten</li>
                <li class="i3">Gegen dunkle Augenringe</li>
                <li class="i4">Strafft und kräftigt die Haut</li>
                <li class="i5">Gegen Schwellungen</li>
                <li class="i6">Glättet Falten</li>
                <li class="i7">24 Stunden Feuchtigkeit</li>
            </ul>

            <p><em>Herkömmliche Cremen </em> stimulieren die Produktion von Kollagen meistens nicht ausreichend. Zwar
                straffen sie die Haut – aber nicht durch den natürlichen Mechanismus des Körpers. Die 4-Wochen-Formel
                mit Mikropartikel <em>Hydroface Anti-Aging System</em> <strong>zieht tief ein und stimuliert den
                    Körper </strong> zur Produktion eigenen Kollagens; sodass Ihre Haut selbständig Falten mindert und
                auf natürliche Weise an Elastizität gewinnt.</p>

            <ul class="model-face">
                <li class="i1">Alternative zu Botox</li>
                <li class="i2">Die Antwort auf Ihre Falten</li>
                <li class="i3">Gegen dunkle Augenringe</li>
                <li class="i4">Strafft und kräftigt die Haut</li>
                <li class="i5">Gegen Schwellungen</li>
                <li class="i6">Glättet Falten</li>
                <li class="i7">24 Stunden Feuchtigkeit</li>
            </ul>

            <p><strong>Die 4-Wochen-Formel wirkt progressiv</strong></p>

            <div class="what_nurses_say">
                <p><strong>Was deutsche Frauen über das Hydroface Anti-Aging System sagen::</strong></p>

                <p><em>"Ich wurde gerade 40 . Mein Leben wird besser und immer besser – genau wie meine Haut! Dank
                        Hydroface Anti-Aging System! "</em> - Teresa Weishaupt </p>
            </div>

            <p>Schon nach dem ersten Tag der Anwendung werden Sie fühlen, wie Ihre Haut straffer und frischer ist. Nach
                einer Woche werden Sie auch im Spiegel eine deutliche Veränderung feststellen. Die kleinen Fältchen
                werden nahezu verschwunden sein. Nach einem Monat wird Ihre Haut noch frischer und elastischer sein.
                Fältchen werden buchstäblich <strong>unsichtbar</strong> sein. Und tiefe Falten um ein Vielfaches
                vermindert. Nach einen Monat werden Sie Jahre jünger aussehen. Wenn nicht können (und sollten!) Sie
                Monica de Rossi's <strong>spezielle Garantie</strong> in Anspruch nehmen – Sie erhalten Ihr Geld zurück.
                Diskret und ohne lästige Fragen.</p>

            <p>Health Journal bietet seinen Leserinnen eine einmalige Gelegenheit. Mit dem unten stehen Link können Sie
                das Hydroface Anti-Aging System zu einem noch günstigeren Preis bestellen. Dieses Angebot ist verfügbar
                bis
                <script type="text/javascript">dtime(-1);</script>
                Dienstag 14. Juli 2015
            </p>

            <p><strong>Die Autorin:</strong> Annette Hartmann, Health Journal</p>

            <p>&nbsp;</p>

            <div class="belcherwt">
                <p><strong>BITTE BEACHTEN:</strong> Dies ist ein zeitlich begrenztes Angebot. Die Hersteller von de
                    Rossi's Anti-Falten Formel unseren Lesern eine besondere Gelegenheit: 100 % Geld-Zurück-Garantie
                    wenn Sie keinen Erfolg im Kampf gegen Ihre Falten haben sollten. </p>

                <p>
                    <a href="product.php" target="_blank" style="text-decoration:underline;">
                        <strong> Klicken Sie hier um die 4 Wochen Anti-Falten Formel Hydroface Anti-Aging System zum
                            Sonderpreis zu bestellen. &gt;&gt;</strong></a><br>
                    <span class="yellow_under_text">Mit diesem Link erhalten sie die Lieferung VERSANDKOSTENFREI </span>
                </p>

                <p>
                    <strong><span class="last_chance">DIESES ANGEBOT IST BEGRENZT:</span>
                        <script type="text/javascript">dtime(-1);</script>
                        Dienstag 14. Juli 2015</strong><br>Aufgrund der großen Nachfrage und begrenzten Vorräten.
                </p>
            </div>
        </div>
        <div id="rightcontent">
            <div class="righttxt">
                <center>
                    <img src="img/newwomens.jpg" height="294" width="216" alt="">
                </center>
                <p><strong>Unsere Reporterin für Gesundheit &amp; Ernährung Annette Hartmann</strong> hat für Sie Monica
                    de Rossi's Anti-Aging Therapie getestet. Die Ergebnisse waren überzeugend:</p>

                <p><strong>Nach 4 Wochen regelmäßiger Anwendung sind Falten kaum noch sichtbar und die Haut sieht gesund
                        und jugendlich aus.</strong></p>

                <p>Die Ergebnisse der Anti-Aging Formel von Monica de Rossi konnten unsere anfänglichen Zweifel voll und
                    ganz ausräumen. Wir haben hier eine Therapie gefunden, die nicht nur erfolgreich gegen Falten wirkt,
                    sondern die Haut auch anhaltend mit Feuchtigkeit versorgt und unangenehme Hautunregelmäßigkeiten
                    verschwinden lässt.</p>

                <p>
                    <strong>Ihr erster Schritt :</strong><br>
                    <a href="product.php" target="_blank">de Rossi</a> Bestellen <br>
                    Sie erhalten die Lieferung VERSANDKOSTENFREI <a href="product.php" target="_blank">Klicken Sie
                        hier</a> <strong>
                    <span class="Apple-style-span" style="font-size: 13px;"><br>
                        <span class="yellow_under_text"><script type="text/javascript">dtime(-1);</script>Dienstag 14. Juli 2015</span>
                    </span>
                    </strong>
                </p>
            </div>
            <div class="whitespacer"></div>
            <div class="righttxt">
                <div class="maria">
                    <img src="img/lagrend.jpg" class="maria__photo" alt="" width="100" height="125">

                    <div class="maria__text">
                        <strong>Wussten Sie, dass ... !</strong><br>
                        Monica de Rossi, mit 72 noch schön und jugendlich, schuldet ihr unglaubliches Aussehen einer
                        Formel, die sie selbst entwickelt hat.
                    </div>
                    <div class="more">
                        <a href="product.php" target="_blank" class="more__link">Lesen Sie mehr &gt;&gt;</a>
                    </div>
                </div>
            </div>
            <div class="whitespacer"></div>
            <div class="righttxt"><strong>Die Reaktion</strong><br>

                <div class="watotherssay">
                    <div class="fl"></div>
                    <div class="user"><img src="img/zmarszczki2.jpg" alt="" width="233" height="157"></div>
                    <div>
                        <br>
                        Olivia S. – Leserin des Health Journal Resultate nach Anwendung der 4-Wochen-Formel von Monica
                        de Rossi. Das Nachher-Bild zeigt deutlich: Falten sind sichtbar vermindert und die Haut ist
                        straffer. Ein unglaublicher Effekt! <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <br>
        <br>

        <div class="comments_section_wrap">

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/1.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Angi Rostwurm
 </span>

                        <div class="date">
                            Hat das schon jemand ausprobiert?

                        </div>
                        <form name="hidden_form1" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="1">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form1'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z1">gefällt mir </span>
                        <span class="reply2" id="xz1"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  7:45 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/2.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Teresa Millnar
 </span>

                        <div class="date">
                            Ich habe Hydroface jetzt 3 Wochen lang genommen und sehe tatsächlich 5 Jahre jünger aus.
                            Jeder sagt mir das. Sogar mein eigener Mann! Bei anderen wirkt das vielleicht sogar noch
                            besser – aber ich bin von meinen Ergebnissen schon sehr beeindruckt. Meine Lachfalten sind
                            weg – unglaublich! Danke für diesen Artikel.

                        </div>
                        <form name="hidden_form2" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="2">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form2'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z2">gefällt mir </span>
                        <span class="reply2" id="xz2"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  7:49 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/3.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Julia Sturrid
 </span>

                        <div class="date">
                            Das ist die erste Anti-Falten-Creme die bei mir wirklich was bring. Ich seh’ jünger aus –
                            fühle mich jünger und bin voller Selbstvertrauen.

                        </div>
                        <form name="hidden_form3" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="3">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form3'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z3">gefällt mir </span>
                        <span class="reply2" id="xz3"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  7:55 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box_reply
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/4.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Anna Popalus
 </span>

                        <div class="date">
                            wer hat damit erfahrungen? Wirkt vielversprechend...

                        </div>
                        <form name="hidden_form4" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="4">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form4'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z4">gefällt mir </span>
                        <span class="reply2" id="xz4"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  7:58 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/5.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Nikki Manus
 </span>

                        <div class="date">
                            Seit Jahren versuche ich, etwas gegen meine Falten zu finden. Aber nichts hat mir bis jetzt
                            geholfen. Ich habe schon ein Vermögen für Masken, Cremes und Wunderkuren ausgegeben. Man
                            kennt das. Jetzt hab ich eine Idee wie ich besser aussehen kann und dafür sogar noch weniger
                            bezahle als im Schönheitssalon oder gar in der Klinik. Ich habe einen wichtigen Tag vor mir:
                            Meine Tochter wird heiraten. Und bis dort hin möchte ich richtig gut aussehen. Deshalb habe
                            ich gerade dieses Hydroface bestellt und hoffe es hält was es verspricht. Ich hoffe auf das
                            Beste!

                        </div>
                        <form name="hidden_form5" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="5">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form5'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z5">gefällt mir </span>
                        <span class="reply2" id="xz5"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  8:18 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/6.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Anni Georg
 </span>

                        <div class="date">
                            Ich bin zufällig auf dieser Seite gelandet und habe den Artikel gelesen. Ich kenne diese
                            Creme aus meinem Salon. Dort zahle ich 70€ dafür. Deshalb habe ich gleich zwei Sets
                            bestellt. Der Preis hier ist unschlagbar. Ich wusste gar nicht, dass es diese Creme auch im
                            Einzelhandel gibt.

                        </div>
                        <form name="hidden_form6" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="6">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form6'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z6">gefällt mir </span>
                        <span class="reply2" id="xz6"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  8:38 pm



 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/7.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Donia Lie
 </span>

                        <div class="date">
                            Unglaublich! Ich möchte auch so aussehen. Kann es nicht erwarten, dass meine Bestellung
                            ankommt...

                        </div>
                        <form name="hidden_form7" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="7">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form7'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z7">gefällt mir </span>
                        <span class="reply2" id="xz7"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  8:39 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/8.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name"> Robert Villeuch
 </span>

                        <div class="date">
                            also wenn das wirklich funktioniert, kauf ich meiner frau so ein set zum geburtstag nächste
                            woche. Hoffe nur, sie wirft mich nicht raus

                        </div>
                        <form name="hidden_form8" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="8">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form8'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z8">gefällt mir </span>
                        <span class="reply2" id="xz8"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  8:39 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/9.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Katja Botic
 </span>

                        <div class="date">
                            Ich nehme die Cremes seit einer Woche und fühle mich so viel besser. Und ich seh’ auch
                            besser aus. Meine Falten werden immer weniger. Und dabei ist es noch nicht einmal teuer.
                            Wenn ich dasselbe im Salon bezahlen müsste, wäre mein Monatsgehalt schon beim Fenster raus.
                            So habe ich auch keine Probleme mit meinem Mann

                        </div>
                        <form name="hidden_form9" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="9">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form9'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z9">gefällt mir </span>
                        <span class="reply2" id="xz9"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  8:59 pm

 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/10.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Nina Kobel
 </span>

                        <div class="date">
                            Ich war die letzten Jahre so beschäftigt mit den Kindern und der Arbeit, dass ich mich gar
                            nicht mehr um mich selbst gekümmert habe. Dank dieses Systems mag ich mich selbst jetzt
                            wieder. Und scheinbar gefalle ich auch den Männern wieder ....

                        </div>
                        <form name="hidden_form10" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="10">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form10'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z10">gefällt mir </span>
                        <span class="reply2" id="xz10"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  9:29 pm

 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/11.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Vanessa Trische
 </span>

                        <div class="date">
                            Habe das für meine Mutter gekauft. Und sie ist richtig glücklich damit. Und sie sieht
                            wirklich jünger aus! Großartiges Produkt zu einem guten Preis!

                        </div>
                        <form name="hidden_form11" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="11">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form11'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z11">gefällt mir </span>
                        <span class="reply2" id="xz11"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  9:38 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/12.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Paula Morritz
 </span>

                        <div class="date">
                            Unsinn. Natürlich werden wir alle älter. Aber wir können es verlangsamen und auf unser
                            Aussehen achten. Für mich ist diese Maske super!

                        </div>
                        <form name="hidden_form12" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="12">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form12'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z12">gefällt mir </span>
                        <span class="reply2" id="xz12"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  9:44 pm

 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/13.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Mike Schadel
 </span>

                        <div class="date">
                            das nächste wunder ... vielleicht sollte man einfach akzeptieren dass man älter wird und gut
                            ist’s

                        </div>
                        <form name="hidden_form13" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="13">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form13'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z13">gefällt mir </span>
                        <span class="reply2" id="xz13"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-3
                                ); </script>Juli 11 um  9:49 pm

 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/14.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Stefan Lauch
 </span>

                        <div class="date">
                            Meine Frau und ich haben beschlossen, das einfach auszuprobieren. Wir gehen beide auf die 50
                            zu und es wird Zeit, dass wir uns mehr um uns kümmern. Wenn das wirklich ein professionelles
                            Produkt ist, dann ist es genau das wonach wir suchen.

                        </div>
                        <form name="hidden_form14" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="14">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form14'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z14">gefällt mir </span>
                        <span class="reply2" id="xz14"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-2
                                ); </script>Juli 12 um  11:22 am

 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/15.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Julia Wasserle
 </span>

                        <div class="date">
                            Das ist lustig! Erst gestern habe ich mit einer Freundin über genau diese Creme geredet –
                            und heute finde ich einen Artikel dazu ...

                        </div>
                        <form name="hidden_form15" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="15">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form15'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z15">gefällt mir </span>
                        <span class="reply2" id="xz15"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-2
                                ); </script>Juli 12 um  11:43 am


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/16.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Lily Jane
 </span>

                        <div class="date">
                            hab es gerade zum ersten mal aufgetragen. Sehr entspannend. Riecht auch gut. Vielleicht
                            bilde ich es mir ein .... aber irgendwie fühle ich schon einen Unterschied.

                        </div>
                        <form name="hidden_form16" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="16">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form16'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z16">gefällt mir </span>
                        <span class="reply2" id="xz16"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-2
                                ); </script>Juli 12 um  11:51 am


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/17.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Katrin Ritter
 </span>

                        <div class="date">
                            Ich nehm’ die Cremes jeden zweiten Tag und hab jetzt fast alles aufgebraucht. Ganz ehrlich:
                            der Effekt ist unglaublich. Meine Falten sind viiiiel weniger und meine Haut fühlt sich gut
                            an. Ich werde also nachbestellen.

                        </div>
                        <form name="hidden_form17" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="17">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form17'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z17">gefällt mir </span>
                        <span class="reply2" id="xz17"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-2
                                ); </script>Juli 12 um  1:15 pm

 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/18.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Silvia Wolf
 </span>

                        <div class="date">
                            ich habe jetzt meine Lieferung bekommen. Sieht super aus. Jeden Euro wert. Das ist Qualität
                            aus dem Schönheitssalon!

                        </div>
                        <form name="hidden_form18" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="18">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form18'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z18">gefällt mir </span>
                        <span class="reply2" id="xz18"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-2
                                ); </script>Juli 12 um  1:45 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/19.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Maria Slaat
 </span>

                        <div class="date">
                            Meine Schwester und ich haben das beide vor 3 Wochen bestellt. Ich muss sagen: ja, es
                            funktioniert tatsächlich! Wir sehen beide jünger aus und meine Haut fühlt sich frisch an.
                            Ich persönliche habe noch nie etwas besseres gehabt.

                        </div>
                        <form name="hidden_form19" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="19">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form19'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z19">gefällt mir </span>
                        <span class="reply2" id="xz19"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-2
                                ); </script>Juli 12 um  2:21 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/20.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Sandra Donbucht
 </span>

                        <div class="date">
                            Die Wirkung dieser Creme ist nicht von dieser Welt!

                        </div>
                        <form name="hidden_form20" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="20">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form20'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z20">gefällt mir </span>
                        <span class="reply2" id="xz20"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-2
                                ); </script>Juli 12 um  2:42 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/21.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Diana Gunhand
 </span>

                        <div class="date">
                            Ich habe schon von diesen Cremes gehört. Die werden sonst in Salons verwendet. Ich war zwar
                            noch nie in so einem Salon – aber meine Freundin hat mir davon erzählt. Jetzt weiß ich, wo
                            ich diese Cremes selbst kaufen kann. Aber viel günstiger ....

                        </div>
                        <form name="hidden_form21" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="21">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form21'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z21">gefällt mir </span>
                        <span class="reply2" id="xz21"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-1
                                ); </script>Juli 13 um  3:22 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/22.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Laura Braun
 </span>

                        <div class="date">
                            Ich bin früher regelmäßig zur Schönheitspflege gegangen. Aber leider kann ich mir das nicht
                            mehr leisten. Da kommt diese Maske wie gerufen! Ich werde gleich ein Set bestellen und euch
                            gerne auf dem Laufenden halten.

                        </div>
                        <form name="hidden_form22" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="22">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form22'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z22">gefällt mir </span>
                        <span class="reply2" id="xz22"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-1
                                ); </script>Juli 13 um  3:34 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/23.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Viktoria Oliv
 </span>

                        <div class="date">
                            liefert die Firma auch in abgelegene Städte? Und die Geld-Zurück-Garantie ist keine Falle?

                        </div>
                        <form name="hidden_form23" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="23">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form23'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z23">gefällt mir </span>
                        <span class="reply2" id="xz23"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-1
                                ); </script>Juli 13 um  3:46 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/24.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Birgit  Deichmann
 </span>

                        <div class="date">
                            Einfach auf bestellen klicken – da steht dann alles genau beschrieben. 100 %
                            Geld-Zurück-Garantie. Wie könnte das eine Falle sein? Geliefert wird überall hin. Wie
                            gesagt, steht alles auf der Seite...

                        </div>
                        <form name="hidden_form24" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="24">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form24'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z24">gefällt mir </span>
                        <span class="reply2" id="xz24"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-1
                                ); </script>Juli 13 um  3:53 pm


 </span>
                    </div>
                </div>
            </div>

            <!-- SINGLE COMMENT -->

            <div class="fb_box
">
                <div class="comment_top_box">
                    <div class="comment_img"><img alt="" src="img/25.jpg" width="50" height="50"></div>
                    <div class="comment_detail"><span class="name">Roberta  Mariner
 </span>

                        <div class="date">
                            OK, bestellt! Ich werde meine Erfahrungen dann posten.

                        </div>
                        <form name="hidden_form25" method="post" action="index.php#comment_here">
                            <input type="hidden" name="hidden" value="25">
                        </form>
                        <a href="index.php#comment_here"
                           onclick="document.forms['hidden_form25'].submit(); return false;">
                            <span class="reply3"> Antworten     </span></a> · <span class="reply"
                                                                                    id="z25">gefällt mir </span>
                        <span class="reply2" id="xz25"></span>
                        · <span class="reply" style="color: gray;"><script type="text/javascript">dtimes(-1
                                ); </script>Juli 13 um  4:21 pm
 </span>
                    </div>
                </div>
            </div>
            <!-- //SINGLE COMMENT -->


            <!-- FACEBOOK SHOW USERS COMMENTS -->
            <!-- //FACEBOOK SHOW USERS COMMENTS -->


            <!-- FACEBOOK COMMENT FORM -->

            <div class="fb_box_com" id="add_comment">
                <div class="comment_img"><img src="img/fb_face.gif" alt="" align="left" width="50" height="50">

                    <form action="index.php?hidden=0" method="post">
                        <textarea name="author" class="message_box tipped" id="fb_textarea" rows="4"
                                  cols="40"> </textarea>
                    </form>
                </div>
                <input value="Kommentar" type="submit" class="submit_box">

                <div id="comment_here"></div>
            </div>
            <!-- //FACEBOOK COMMENT FORM -->        <!--FB comments -->
        </div>
        <center>
            <img alt="" src="img/logosmall.jpg" width="188" height="53"><br>

            <p>
                <a href=""
                   onclick="window.open('terms.php', '_blank', 'height=500,width=700,left=280,top=150,scrollbars=yes');"
                   class="p_d">AGB </a> |
                <a href=""
                   onclick="window.open('policy.php', '_blank', 'height=500,width=700,left=280,top=150,scrollbars=yes');"
                   class="p_d">Datenschutz</a> |
                <a href=""
                   onclick="window.open('contacts.php', '_blank', 'height=500,width=700,left=280,top=150,scrollbars=yes');"
                   class="p_d">Impressum</a>
            </p>
        </center>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () //loading_video
    {
        $(".video__").click(function () {
            $('.video__').load('video.html');
        });
        $('.p_d').click(function (event) {
            event.preventDefault();
        });
    });
</script>


<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-PMMNV5" height="0" width="0"
    style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
<script type="text/javascript" id="">(function (a, b, d, c, e) {
        a[c] = a[c] || [];
        a[c].push({"gtm.start": (new Date).getTime(), event: "gtm.js"});
        a = b.getElementsByTagName(d)[0];
        b = b.createElement(d);
        b.async = !0;
        b.src = "//www.googletagmanager.com/gtm.js?id\x3d" + e + ("dataLayer" != c ? "\x26l\x3d" + c : "");
        a.parentNode.insertBefore(b, a)
    })(window, document, "script", "dataLayer", "GTM-PMMNV5");</script>
</body>
</html>