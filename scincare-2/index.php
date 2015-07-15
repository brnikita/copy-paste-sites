<?php
require_once('../../offer.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-gb" slick-uniqueid="3" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta charset="utf-8">

    <title>Beauty Product Testing (Question 1 of 6)</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Feeling Beautiful: Skin Care application">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

    <!--[if lt IE 9]>

    <script src="img///html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

    <!-- Google Code for Remarketing Tag -->
    <!--------------------------------------------------
    Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
    --------------------------------------------------->


    <link rel="stylesheet" type="text/css" href="css/index.css" media="all">
</head>
<body id="application">
<iframe name="google_conversion_frame" title="Google conversion frame" src="img/index_1.html" marginwidth="0"
        marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" frameborder="0" height="13"
        width="300">&lt;img height="1" width="1" border="0" alt=""
    src="img/http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1062009215/?frame=0&amp;random=1424925974920&amp;cv=7&amp;fst=1424925974920&amp;num=1&amp;fmt=1&amp;guid=ON&amp;u_h=900&amp;u_w=1600&amp;u_ah=860&amp;u_aw=1600&amp;u_cd=24&amp;u_his=2&amp;u_tz=480&amp;u_java=false&amp;u_nplug=0&amp;u_nmime=0&amp;frm=0&amp;url=http%3A//beautytesters.co.uk/&amp;vis=1"
    /&gt;</iframe>


<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">

            <div class="reservation-timer">

			<span class="envoke-popdown" data-original-title="Position Temporarily Reserved"
                  data-content="Due to demand, your position has been temporarily reserved for the next 15 minutes only. If you fail to complete your application within this time we cannot guarantee your acceptance.">Your place has been temporarily reserved. Time remaining: <span
                    id="nav-timeremaining" class="label label-important hasCountdown">14:58</span>

			</span>

            </div>

            <div class="places-available">

			<span class="envoke-popdown" data-original-title="Limited Availability!"
                  data-content="We have a limited number of applications we accept - hurry now before they are all taken!">

			<img class="places-flag" src="img/us.gif">

			Places remaining in United Kingdom:

			 <span id="nav-placesremaining" class="label label-important">12</span>

			</span>

            </div>

        </div>

    </div>

</div>

<div id="content-wrapper">


    <div class="container content corners">


        <div class="row heading">

            <div class="span12">


                <div class="instructionContainer">
                    <p class="instructionUpper">Companies Need You to Try Top Skin Creams!</p>

                    <p>
                    </p>

                    <p class="instructionLower">Answer 6 questions to see if you qualify for a risk free trial.</p>
                </div>
                <!--instructionContainer-->


            </div>

        </div>


        <div class="row sell">

            <div class="span4" id="productLeft">

                <img id="hero-shot" src="img/cream_prod.jpg">
                <br>
                <ul class="features">

                    <li>Companies want you to try their products.</li>

                    <li>All products are free sample trials to try.</li>

                    <li>Risk free - all products are safe.</li>

                    <li>Some products include a small postage charge.</li>

                </ul>

            </div>
            <!-- HIDE BOX START -->
            <div class="span7" id="idone">

                <div id="quiz-wrapper" class="corners mod-box">

                    <form action="http://beautytesters.co.uk/" id="quiz-form" class="quiz">

                        <h3 class="title-font question-title">Question 1 of 6:</h3>

                        <div class="quizQuestion">

                            <label class="quizLabel">Select your gender:</label>


                            <div class="quizInput">

                                <label class="radio"><input name="gender" value="male" type="radio">Male</label>

                                <label class="radio"><input name="gender" value="female" type="radio">Female</label>

                                <input name="hidden" value="hidden" type="hidden">

                            </div>

                        </div>


                        <div class="buttons">
                            <a id="question-submit2" class="cta cta-submit corners"
                               href="javascript:HideAllShowOne('idtwo')">
                                <span>Question 2 »</span>
                            </a>


                        </div>

                    </form>


                    <div class="erroralert" style="display: none;">Please select an answer in order to proceed</div>
                </div>

                <div class="corners mod-box further-info">

                    <h4 class="title-font">Why is knowing your gender important?</h4>


                    <p>Asking your gender is important because there are structural differences between men and womens
                        skins. After puberty,

                        <span class="envoke-tooltip" data-placement="bottom"
                              data-original-title="Androgen is a hormone in testosterone">Androgen</span>

                        stimulation causes men's skin to have a tougher texture and be about 25% thicker than a womans.
                        Many companies design their products

                        specifically for men or women so using the wrong product may not give the best results.</p>


                </div>

            </div>
            <!-- HIDE BOX END -->
            <!-- HIDE BOX START -->

            <div class="span7" id="idtwo" style="display: none;">

                <div id="quiz-wrapper" class="corners mod-box">

                    <form action="http://beautytesters.co.uk/" id="quiz-form" class="quiz">

                        <h3 class="title-font question-title">Question 2 of 6:</h3>

                        <div class="quizQuestion">

                            <label class="quizLabel">How old are you?</label>


                            <div class="quizInput">

                                <label class="radio"><input name="age" value="under20" type="radio">20 and under</label>

                                <label class="radio"><input name="age" value="21-30" type="radio">21 to 30</label>
                                <label class="radio"><input name="age" value="31-40" type="radio">31 to 40</label>
                                <label class="radio"><input name="age" value="41-50" type="radio">41 to 50</label>
                                <label class="radio"><input name="age" value="+51" type="radio">51 and above</label>

                                <input name="hidden" value="hidden" type="hidden">

                            </div>

                        </div>


                        <div class="buttons">
                            <a id="question-submit2" class="cta cta-submit corners"
                               href="javascript:HideAllShowOne('idthree')">
                                <span>Question 3 »</span>
                            </a>

                        </div>

                    </form>


                    <div class="erroralert" style="display: none;">Please select an answer in order to proceed</div>
                </div>

                <div class="corners mod-box further-info">

                    <h4 class="title-font">Why is your age important?</h4>


                    <p>With age, the <span class="envoke-tooltip" data-placement="bottom"
                                           data-original-title="Known as your Epidermis">outer skin layer</span> thins.
                        <span class="envoke-tooltip" data-placement="bottom"
                              data-original-title="Known as your Melanocytes">Pigment-containing cells</span> decrease
                        in number making aging skin appear thinner, pale, and most translucent. Skin can also lose its
                        elasticity as it ages which cause wrinkles to appear.</p>

                    <p>Knowing your age allows the best products to be selected. Products designed to match the age of
                        your skin.</p>


                </div>
            </div>
            <!-- HIDE BOX END -->
            <!-- HIDE BOX START -->

            <div class="span7" id="idthree" style="display: none;">

                <div id="quiz-wrapper" class="corners mod-box">

                    <form action="http://beautytesters.co.uk/" id="quiz-form" class="quiz">

                        <h3 class="title-font question-title">Question 3 of 6:</h3>

                        <div class="quizQuestion">

                            <label class="quizLabel">What is your primary skin concern?</label>


                            <div class="quizInput">

                                <label class="radio"><input name="skin_concern" value="Wrinkles"
                                                            type="radio">Wrinkles</label>

                                <label class="radio"><input name="skin_concern" value="Dryness"
                                                            type="radio">Dryness</label>
                                <label class="radio"><input name="skin_concern" value="Stretch-Marks" type="radio">Stretch
                                    Marks</label>
                                <label class="radio"><input name="skin_concern" value="Lighten Skin" type="radio">Lighten
                                    Skin</label>

                                <input name="hidden" value="hidden" type="hidden">

                            </div>

                        </div>


                        <div class="buttons">
                            <a id="question-submit2" class="cta cta-submit corners"
                               href="javascript:HideAllShowOne('idfour')">

                                <span>Question 4 »</span>
                            </a>


                        </div>

                    </form>


                    <div class="erroralert" style="display: none;">Please select an answer in order to proceed</div>
                </div>

            </div>
            <!-- HIDE BOX END -->
            <!-- HIDE BOX START -->

            <div class="span7" id="idfour" style="display: none;">

                <div id="quiz-wrapper" class="corners mod-box">

                    <form action="http://beautytesters.co.uk/" id="quiz-form" class="quiz">

                        <h3 class="title-font question-title">Question 4 of 6:</h3>

                        <div class="quizQuestion">

                            <label class="quizLabel">Where would you like to target wrinkles?</label>


                            <div class="quizInput">

                                <label class="radio"><input name="target" value="Eyes" type="radio">Eyes</label>

                                <label class="radio"><input name="target" value="Cheeks" type="radio">Cheeks</label>
                                <label class="radio"><input name="target" value="Forehead" type="radio">Forehead</label>
                                <label class="radio"><input name="target" value="Chest" type="radio">Chest</label>
                                <label class="radio"><input name="target" value="Eyebrows" type="radio">Eyebrows</label>
                                <label class="radio"><input name="target" value="AllOver" type="radio">All Over</label>

                                <input name="hidden" value="hidden" type="hidden">

                            </div>

                        </div>


                        <div class="buttons">
                            <a id="question-submit2" class="cta cta-submit corners"
                               href="javascript:HideAllShowOne('idfive')">
                                <span>Question 5 »</span>
                            </a>


                        </div>

                    </form>


                    <div class="erroralert" style="display: none;">Please select an answer in order to proceed</div>
                </div>

            </div>
            <!-- HIDE BOX END -->
            <!-- HIDE BOX START -->

            <div class="span7" id="idfive" style="display: none;">

                <div id="quiz-wrapper" class="corners mod-box">

                    <form action="http://beautytesters.co.uk/" id="quiz-form" class="quiz">

                        <h3 class="title-font question-title">Question 5 of 6:</h3>

                        <div class="quizQuestion">

                            <label class="quizLabel">What best describes your skin type?</label>


                            <div class="quizInput">

                                <label class="radio"><input name="skin_type" value="Sensitive"
                                                            type="radio">Sensitive</label>

                                <label class="radio"><input name="skin_type" value="Dry" type="radio">Dry</label>
                                <label class="radio"><input name="skin_type" value="Oily" type="radio">Oily</label>
                                <label class="radio"><input name="skin_type" value="Normal" type="radio">Normal</label>

                                <input name="hidden" value="hidden" type="hidden">

                            </div>

                        </div>


                        <div class="buttons">
                            <a id="question-submit2" class="cta cta-submit corners"
                               href="javascript:HideAllShowOne('idsix')">
                                <span>Question 6 »</span>
                            </a>

                            <!--
                                            <button id="question-submit2" class="cta cta-submit corners" type="submit">

                                                <span>Question 6 &raquo;</span></button>
                            -->

                        </div>

                    </form>


                    <div class="erroralert" style="display: none;">Please select an answer in order to proceed</div>
                </div>

            </div>
            <!-- HIDE BOX END -->
            <!-- HIDE BOX START -->

            <div class="span7" id="idsix" style="display: none;">

                <div id="quiz-wrapper" class="corners mod-box">
                    <br>
                    <b>Notice</b>: Undefined index: sub in <b>/www/beautytesters.co.uk/index.php</b> on line
                    <b>538</b><br>

                    <form id="quiz-form-final" class="quiz" method="post"
                          action="http://beautytesters.co.uk/result.php?sid=">
                        <input name="c1" value="livingsocial.com" type="hidden">
                        <input name="c2" value="58562802808" type="hidden">
                        <input name="c3" value="" type="hidden">


                        <h3 class="title-font question-title">Question 6 of 6:</h3>

                        <div class="quizQuestion">

                            <label class="quizLabel">Do you Smoke?</label>


                            <div class="quizInput">

                                <label class="radio"><input name="smoke" value="yes" type="radio">Yes</label>

                                <label class="radio"><input name="smoke" value="no" type="radio">No</label>
                                <label class="radio"><input name="smoke" value="occasionally" type="radio">Occasionally/Socially</label>
                                <label class="radio"><input name="smoke" value="prefer_not" type="radio">Prefer not to
                                    say</label>

                                <input name="hidden" value="hidden" type="hidden">

                            </div>

                        </div>


                        <div class="buttons">


                            <input style="padding: 0px 15px;" id="question-submit" class="cta cta-submit corners final"
                                   value="View Results »" type="submit">

                        </div>

                    </form>


                    <div class="erroralert" style="display: none;">Please select an answer in order to proceed</div>
                </div>

            </div>
            <!-- HIDE BOX END -->


        </div>


    </div>
    <!-- /container content -->

</div>

<div id="footer-wrapper">

    <div class="container">


        <div class="row brands">

            <img src="img/brand-eli.jpg">

            <img src="img/brand-est.jpg">

            <img src="img/brand-lor.jpg">

            <img src="img/brand-ola.jpg">

            <img src="img/brand-clarins.jpg">

            <img src="img/brand-benefit.jpg">

        </div>


        <div class="row customers">

            <div class="span6">

                <div class="corners mod-box mod-2">

                    <img src="img/pic-jo2.jpg" class="corners">

                    <blockquote>

                        <p>"I can't believe it! I applied to 2 trials and got £180 of skin cream!"</p>

                        <small>Jo, Wales UK</small>

                    </blockquote>

                </div>

            </div>

            <div class="span6">

                <div class="corners mod-box mod-2">

                    <img src="img/pic-becka2.jpg" class="corners">

                    <blockquote>

                        <p>"Two Top Brands creams! Thank you very much Beautytesters.co.uk!"</p>

                        <small>Becka, Hampshire UK</small>

                    </blockquote>

                </div>

            </div>

        </div>


        <!----


            <div id="how-does-it-work" class="row">

            <div class="span12"><h1>How does it work?</h1></div>

            </div>



            <div class="row">

            <div class="span12">

            <div class="accordion" id="questions">

              <div class="accordion-group">

                <div class="accordion-heading">

                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#questions" href="#qOne">How do I get FREE Skin Creams?</a>

                </div>

                <div id="qOne" class="accordion-body">

                  <div class="accordion-inner">

                    <p>Did you know that many companies give away <strong>free samples</strong> of their products for people to try? How many you times have seen a

                    beauty product, perfume, or aftershave in Boots, Superdrug,  or any other highstreet store that is <strong>free for you to try</strong>?

                    Have you ever seen a cosmetics or beauty product stand set-up in your local shopping centre offering <strong>Free</strong> trials?

                    Companies <strong>want</strong> as many people to <strong>try their products</strong> as possible to show how good they are.</p>

                    <p>We have access to a wide range of companies and sends you the product which is best for you to

                    <strong>try for free</strong>!</p>

                  </div>

                </div>

              </div>

              <div class="accordion-group">

                <div class="accordion-heading">

                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#questions" href="#qTwo">Is it really free?</a>

                </div>

                <div id="qTwo" class="accordion-body collapse">

                  <div class="accordion-inner">

                    <strong>Yes</strong>, you will really receive products <strong>free of charge</strong> to try.

                    Some companies require you to pay a shipping/postage cost, this will be clearly displayed

                     before you accept and is usually only a small amount (eg. UK price of up to four pounds (GBP), US price of up to six dollars (USD)).

                  </div>

                </div>

              </div>

              <div class="accordion-group">

                <div class="accordion-heading">

                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#questions" href="#qThree">I'm not sure, whats the catch?</a>

                </div>

                <div id="qThree" class="accordion-body collapse">

                  <div class="accordion-inner">

                    There is no catch; these are full beauty products available to you to try for <strong>free</strong>. Often these products are only available

                    in <strong>limited quantities</strong> and we can only reserve your application for a short time so <a href="#quiz" title="Apply now">apply now</a>!

                  </div>

                </div>

              </div>

              <div class="accordion-group">

                <div class="accordion-heading">

                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#questions" href="#qFour">Is it safe?</a>

                </div>

                <div id="qFour" class="accordion-body collapse">

                  <div class="accordion-inner">

                    <strong>Yes</strong>, totally. All the products you receive are already for sale in many highstreet shops. Testing a product only means that you

                    have received a free sample.

                  </div>

                </div>

              </div>

            </div>

            </div>

            </div>

        ---->

        <div class="row" width="100%" align="center">
            <div class="span12">

                <a href="#application" class="quizreturn-link cta corners"
                   title="Apply Now!"><span>Apply now!</span></a>

            </div>
        </div>


        <footer><p>© Copyright 2014. - beautytesters.co.uk - All Rights Reserved</p>

            <p>All trademarks on this web site whether registered or not, are the property of their respective owners.
                The authors of this web site are not sponsored by or affiliated with any of the third-party trade mark
                or third-party registered trade mark owners, and make no representations about them, their owners, their
                products or services.</p>
        </footer>


    </div>

</div>


<div id="user-process" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="userProcess"
     aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h4 class="title-font">Submitting your answers... please wait...</h4>
    </div>
    <div class="modal-body">

        <div class="carousel">
            <div class="dealSearch">
                <!-- Add your loading message -->
                <h1 style="" id="loadMessage">Finding available trials</h1>

                <h1 style="display: none;" id="finishedMessage">
                    Success! Found trials available in your area!<br>

                    <p>
                        <img src="img/success.gif"></p>
                </h1>

                <!-- START: Rotating Images-->
                <div id="rotating-item-wrapper">
                    <img class="rotating-item" alt="" src="img/skin1.gif">
                    <img class="rotating-item" alt="" src="img/skin2.gif">
                    <img class="rotating-item" alt="" src="img/skin3.gif">
                    <img class="rotating-item" alt="" src="img/skin4.gif">
                    <img class="rotating-item" alt="" src="img/skin5.gif">
                    <img class="rotating-item" alt="" src="img/skin6.gif">
                    <img class="rotating-item" alt="" src="img/skin7.gif">
                    <img class="rotating-item" alt="" src="img/skin8.gif">
                    <img class="rotating-item" alt="" src="img/skin9.gif">
                    <img class="rotating-item" alt="" src="img/skin10.gif">
                    <img class="rotating-item" alt="" src="img/skin11.gif">
                    <img class="rotating-item" alt="" src="img/skin12.gif">
                    <img class="rotating-item" alt="" src="img/skin13.gif">
                </div>

                <div id="pb"></div>
                <div id="percentage"></div>

                <div id="progression">
                    <div id="step1"><p>Submitting Answers</p></div>
                    <div id="step2"><p>Matching you to available Trials.</p></div>
                    <div id="step3"><p>Complete!</p></div>
                </div>
                <!-- END: Rotating images images -->
            </div>
        </div>


        <div id="user-process-prgress-bar" class="progress progress-success progress-striped">
            <div class="bar"></div>
        </div>

    </div>
</div>


</body>
</html>