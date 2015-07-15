<?php
require_once('../offer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/><![endif]-->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"
          name="viewport">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/media-queries.css" rel="stylesheet" type="text/css">
    <title>Her Life &amp; Health</title>
    <!-- html5.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- jq mobile & slider css -->
    <!-- Google Fonts css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Lora:400,400italic,700italic,700" rel="stylesheet"
          type="text/css">
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic,300"
        rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet" type="text/css">
    <style>#content {
            background-color: #fff;
        }

        .specialBox {
            background-color: #fff;
        }

        section.widget {
            background-color: #fff;
        }

        a {
            font-weight: bold;
            text-decoration: underline;
        }

        span.clickTxt {
            font-family: 'Open Sans', sans-serif;
        }

        span.claim {
            margin-left: 10px;
        }

        span.package {
            margin-left: 15px;
        }
    </style>
</head>
<body>
<!-- header  -  Here goes the Mobile Menu button-->
<div data-role="page" class="jqm-demos">
    <div data-role="header" class="jqm-header">
        <a href="<?php echo $OFFER1; ?>" class="jqm-navmenu-link" data-icon="bars"
           data-iconpos="notext" target="_blank"></a>
    </div>
    <div id="topQuote">
        <div style="text-align:center;font-size: 16px;" class="pagewrap">Sponsored</div>
    </div>
    <!-- /header -->
    <!-- content -->
    <header id="header" style="height:180px;">
        <div class="pagewrap main-head">
            <div class="spaceHeader"></div>
            <h1 id="site-logo"><a href="">Life<span class="spaceTitle"> </span>Health</a></h1>

            <h2 id="vertical-text" style="color:#f01ca3;left:10px;">her</h2>
            <nav>
                <ul id="main-nav" class="clearfix" style="display:none;">
                    <li><a href="<?php echo $OFFER1; ?>" class="selectedLink" target="_blank">Weight
                            Loss</a></li>
                    <li><a href="<?php echo $OFFER1; ?>" target="_blank">Fitness</a></li>
                    <li><a href="<?php echo $OFFER1; ?>" target="_blank">Health &amp;
                            living</a></li>
                    <li><a href="<?php echo $OFFER1; ?>" target="_blank">Beauty &amp;
                            style</a></li>
                    <li><a href="<?php echo $OFFER1; ?>" target="_blank">Budget</a></li>
                </ul>
                <!-- /#main-nav -->
            </nav>
            <div class="socialMedia-fullwidth">
                <div class="socialMain">
                    <section class="suscribe"><span class="heavy">Subscribe!</span> to our email news</section>
                    <section class="socialIcons">
                        <div class="fb"></div>
                        <div class="pi"></div>
                        <div class="tw"></div>
                        <div class="go"></div>
                        <div class="clear"></div>
                    </section>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- /#header -->
    <div data-role="content" class="jqm-content">
        <div data-role="page" class="jqm-demos">
            <div id="topQuote">
                <div class="pagewrap">The #1 online magazine for trend women topics, tips and concerns.</div>
            </div>
            <section id="shadowWrap">
                <div class="pagewrap">
                    <div class="socialMedia-mobile">
                        <div class="socialMain">
                            <section class="suscribe"><span class="heavy">Subscribe!</span> to our email news</section>
                            <section class="socialIcons">
                                <div class="fb"></div>
                                <div class="pi"></div>
                                <div class="tw"></div>
                                <div class="go"></div>
                                <div class="clear"></div>
                            </section>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div id="content">
                            <div class="content-inner">
                                <div id="breadcrumbs">
                                    <a href="<?php echo $OFFER1; ?>" class="bread1"
                                       target="_blank">Home &gt;</a> <a
                                        href="<?php echo $OFFER1; ?>" class="bread2"
                                        target="_blank">Weight loss</a>
                                </div>
                                <section class="SectionTitle"></section>
                                <div class="post clearfix">
                                    <header class="titlebg">
                                        <p class="post-meta">
                                            <time class="post-date" datetime="2011-05-08">
                                                <script>
                                                    var mydate = new Date()
                                                    var year = mydate.getYear()
                                                    if (year < 1000)
                                                        year += 1900
                                                    var day = mydate.getDay()
                                                    var month = mydate.getMonth()
                                                    var daym = mydate.getDate()
                                                    if (daym < 10)
                                                        daym = "0" + daym
                                                    var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
                                                    var montharray = new
                                                        Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
                                                    document.write("" + dayarray[day] + ", " + montharray[month] + " " + daym + ", " + year + "")

                                                </script>
                                                Tuesday, July 14, 2015
                                            </time>
                                            <em>in</em> <a href="<?php echo $OFFER1; ?>"
                                                           style="text-transform:uppercase; text-decoration:none;"
                                                           class="category" target="_blank">Weight Loss</a></p>
                                        <div>
                                            <div class="fb-like" data-href="#" data-width="450"
                                                 data-layout="button_count" data-show-faces="false"
                                                 data-send="false"></div>
                                        </div>
                                        <div class="clear"></div>
                                        <h1 class="section-title"><span class="higlight"><u>2015 Special
                                                    Report:</u></span> How to lose 27 lbs of belly fat in just 4 Weeks
                                            with these 2 diet tricks that celebrities use.</h1>

                                        <h3 class="section-sub">As part of a new series: "Diet Trends: A look at
                                            America's Top Diets" we examine consumer tips for dieting during a recession
                                            &gt;&gt;</h3>
                                    </header>
                                    <figure class="section-image section-imageHide" style="display:none;">
                                        <!-- Section Image **725px** x preferably 300px-->
                                        <img src="img/img_article_01_seen.jpg" alt="img"
                                             style="border:none !important;">
                                    </figure>
                                    <figure class="section-image2" style="display:none;">
                                        <!-- Section Image **725px** x preferably 300px-->
                                        <img src="img/img_article_01_seen480.jpg" alt="img"
                                             style="border:none !important;">
                                    </figure>
                                    <div class="clear"></div>
                                    <figure class="section-image secimgMobile left">
                                        <a href="<?php echo $OFFER1; ?>" target="_blank"><img
                                                src="img/circle.jpg" alt="img"
                                                style="margin:1%; margin-top:23px;"></a>
                                        <figcaption></figcaption>
                                    </figure>
                                    <p class="first-paragraf" style="font-weight:300 !important;"><b>Julia Miller</b>,
                                        Health and Diet columnist, investigates the <b><?php echo $SHORTNAME1; ?> diet</b> to
                                        find out for herself if this super diet works.</p>

                                    <div class="divider"></div>
                                    <p>
                                        <?php echo $SHORTNAME1; ?> is the latest weight loss fad. This so called "Superfood" that
                                        you take as a supplement to lose weight have been getting a lot of international
                                        attention.</p>

                                    <figure class="post-image right" style="max-width:140px;">
                                        <img src="img/img_article_01_julia.jpg" alt="img">
                                        <figcaption class="imgCaption"><b>Julia Miller</b>, Health and Diet columnist.
                                        </figcaption>
                                    </figure>
                                    <p>And like you have probably already seen; they are all over the internet in blogs
                                        and success stories of people who have apparently used the <?php echo $SHORTNAME1; ?>
                                        pills and lost a ton of weight. But we here at Her Life &amp; Health are a
                                        little skeptical and aren't sure that we've seen any real proof that Garcinia
                                        Cambogia works for weight loss. So we decided to put these products to the test.
                                        What better way to find out the truth than to conduct our own study?</p>
                                    <figure class="section-image">
                                        <a href="<?php echo $OFFER1; ?>" target="_blank"
                                           style="text-align:center;"><img src="img/img_article_01_pics.jpg"
                                                                           alt="img"
                                                                           style="border:none !important;"></a>
                                        <figcaption style="text-align:center; margin-bottom:15px;">One blogger lost 42
                                            lbs in 2 months with
                                            <a target="_blank" rel="nofollow"
                                               href="<?php echo $OFFER1; ?>"><?php echo $NAME1; ?></a> and <a target="_blank" rel="nofollow"
                                                                href="<?php echo $OFFER2; ?>"><?php echo $NAME2; ?></a>
                                        </figcaption>
                                    </figure>
                                    <br>
                                    <section class="widget clearfix" id="mobilePromo">
                                        <h4 class="widgettitle"
                                            style="letter-spacing:2px; margin-left:-28px; text-align:left;">Reviewed in
                                            this article</h4>
                                        <br>
                                        <span class="easier">The combo Diet products that is helping celebrities to lose weight fast. <em>Easier:</em></span>
                                        <ul class="reviews">
                                            <li>
                                                <figure class="product-review" style="margin-top:-5px;">
                                                    <div class="">
                                                        <div class="clickOffer">
                                                            <span class="clickTxt mobileLink"><a
                                                                    href="<?php echo $OFFER1; ?>">Get
                                                                    a FREE trial of <b><?php echo $NAME1; ?></b></a></span>
                                                        </div>
                                                        <div class="Alert3" style="line-height:1.1em;">Enter promo code
                                                            <strong>SHIPSAVE</strong> to reduce shipping to <strong><?php echo $PRICE1; ?></strong>!
                                                        </div>
                                                    </div>
                                                    <div class="sealStep" id="seal1"></div>
                                                    <div class="clear"></div>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="product-review" style="margin-top:-5px;">
                                                    <a href="<?php echo $OFFER2; ?>"
                                                       style="text-decoration:none;"><img
                                                            src="img/pure-colon-cleanser.png" alt="img"
                                                            style="border:none !important; height:200px !important;"></a>

                                                    <div class="">
                                                        <div class="clickOffer">
                                                            <span class="clickTxt mobileLink"><a
                                                                    href="<?php echo $OFFER2; ?>">Get
                                                                    a FREE trial of <b>Green Coffee Cleanse
                                                                        Ultra</b></a></span>
                                                        </div>
                                                        <div class="Alert3" style="line-height:1.1em;">Enter promo code
                                                            <strong>SHIPSAVE</strong> to reduce shipping to <strong><?php echo $PRICE2; ?></strong>!
                                                        </div>
                                                    </div>
                                                    <div class="sealStep" id="seal2"></div>
                                                    <div class="clear"></div>
                                                </figure>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </section>
                                    <section class="article-quote left">“<?php echo $NAME1; ?> is one of the most
                                        credible and trustworthy Garcinia suppliers on the market...and it didn't cost
                                        me anything to try!”
                                    </section>
                                    <p>To get started, I volunteered to be the guinea pig. I applied for a bottle of <a
                                            target="_blank" rel="nofollow"
                                            href="<?php echo $OFFER1; ?>"><?php echo $NAME1; ?></a>. While there are tons of <?php echo $SHORTNAME1; ?> ads online, <a
                                            target="_blank" rel="nofollow"
                                            href="<?php echo $OFFER1; ?>"><?php echo $NAME1; ?></a> is one of the most credible and trustworthy suppliers on the
                                        market. It included the free trial of the product and it did not try to fool me
                                        into agreeing to additional hidden offers. Another reason why I chose <a
                                            target="_blank" rel="nofollow"
                                            href="<?php echo $OFFER1; ?>"><?php echo $NAME1; ?></a> is because it is the most concentrated and purest <?php echo $SHORTNAME1; ?>
                                        product on the market. This would give me the most accurate results for my test.
                                    </p>

                                    <div class="claimList">
                                        <span class="claimTitle">Here is what <span style="color:#da128c"><a
                                                    target="_blank" rel="nofollow"
                                                    href="<?php echo $OFFER1; ?>"><?php echo $NAME1; ?></a></span> claimed on their website:</span>
                                        <ul>
                                            <li>4 Times More Weight Loss Than Diet And Exercise</li>
                                            <li>Prevents The Body From Producing And Storing Fat</li>
                                            <li>Reduces Cravings And Is A Strong Appetite Suppressant</li>
                                            <li>Increases Serotonin Levels To Reduce "Emotional Eating"</li>
                                            <li>Reduces Cortisol Levels To Burn Fat From The Belly</li>
                                        </ul>
                                    </div>
                                    <p>We were pretty skeptical, but wanted to find out for ourselves if this product
                                        could actually do everything that it claimed. Most of the success stories talk
                                        about combining <?php echo $SHORTNAME1; ?> with colon cleansing products to achieve
                                        maximum weight loss. I decided to do the same.</p>

                                    <p>The idea behind combining the products is that while the <?php echo $SHORTNAME1; ?>
                                        encourages weight loss and increases energy, the <a target="_blank"
                                                                                            rel="nofollow"
                                                                                            href="<?php echo $OFFER2; ?>"><?php echo $NAME2; ?></a> helps rid your body of toxins and allows your body
                                        to work and burn calories more efficiently. I chose <a target="_blank"
                                                                                               rel="nofollow"
                                                                                               href="<?php echo $OFFER2; ?>"><?php echo $NAME2; ?></a> to test.</p>

                                    <div class="claimList">
                                        <span class="claimTitle">Here is what <span style="color:#da128c"><a
                                                    target="_blank" rel="nofollow"
                                                    href="<?php echo $OFFER2; ?>"><?php echo $NAME2; ?></a></span> claimed on their website:</span>
                                        <ul>
                                            <li>Helps Eliminate Bad Toxins that have Built Up Over the Years</li>
                                            <li>Removes 'Sludge' from the Walls of the Colon</li>
                                            <li>Helps Get Rid of Gas and Bloating</li>
                                            <li>Helps to Regulate the Metabolism</li>
                                            <li>Greatly Increases Your Body's Ability To Burn Fat</li>
                                        </ul>
                                    </div>
                                    <p>And the <a target="_blank" rel="nofollow"
                                                  href="<?php echo $OFFER2; ?>"><?php echo $NAME2; ?></a>, like the <?php echo $SHORTNAME1; ?>, had a free trial with
                                        a 100% satisfaction guarantee and had no hidden offers.</p>

                                    <div class="subTitle"><b>Putting <?php echo $SHORTNAME1; ?> to the Test</b></div>
                                    <br>
                                    <section class="articleGraph right" style="display:none;">
                                        <span class="graphTitle">Im the title!</span>
                                        <figure class="graph-image">
                                            <img src="img/sample-image3.jpg" alt="img">
                                            <figcaption style="text-shadow:none"> This is a caption. Nunc ultrices sem
                                                mollis metus rutrum non malesuada metus fermentum. Vestibulum ant. Fusce
                                                ut sem est. In eu sagittis felis.
                                            </figcaption>
                                        </figure>
                                    </section>
                                    <p>Both the <a target="_blank" rel="nofollow"
                                                   href="<?php echo $OFFER1; ?>"><?php echo $NAME1; ?></a> and <a target="_blank" rel="nofollow"
                                                                     href="<?php echo $OFFER2; ?>"><?php echo $NAME2; ?></a> arrived within 3 days of having placed my order
                                        online for the free trials.<br><br>
                                        The bottles I received held a month's worth of intake which worked out perfect
                                        as I was to follow the supplement routine for 4 weeks time and document my
                                        progress throughout.
                                    </p>

                                    <div class="instructions">
                                        <b><span
                                                class="claimTitle">My 4-Week <?php echo $SHORTNAME1; ?> Diet Test :</span><br><br><img
                                                src="img/img_results.png" alt="img"
                                                style="border:none !important; width:4%; margin-top:-3px;"><?php echo $NAME1; ?> + <?php echo $NAME2; ?> </b><br>
                                        <ul>
                                            <li><b>1.</b> Take one <?php echo $NAME1; ?> pill per day (in the morning)
                                            </li>
                                            <li><b>2.</b> Take one <?php echo $NAME2; ?> pill per day (in the
                                                evening)
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <section id="results">
                                        <div class="resultsTitle"><img src="img/img_results.png"
                                                                       style="border:none !important; width:5%; margin-top:-4px;"
                                                                       alt="img">My Results:
                                            <div class="tab" style="position:relative;bottom:-14px;left:-18px;"></div>
                                        </div>
                                        <span class="resultsSub">Week One</span>

                                        <p>After one week on the diet using both products I was surprised at the
                                            dramatic results. My energy level was up, and I wasn't even hungry, an
                                            apparent effect of the <?php echo $SHORTNAME1; ?> which curbs the appetite.</p>

                                        <p>I honestly felt fantastic.</p>

                                        <p>And I didn't even change anything about my daily routine. On day 7 I got on
                                            the scale and couldn't believe my eyes. I had lost 8 lbs. But I still wasn't
                                            convinced as they say you lose a lot of water at the beginning of any diet.
                                            I wanted to wait and see the results in the upcoming weeks. But it sure was
                                            looking up! I now weighed under 170 lbs for the first time in years! </p>
                                        <span class="resultsSub">Week Two</span>

                                        <p>After two weeks of using both supplements, I started the week off with even
                                            more energy and was actually sleeping more soundly than before. I was no
                                            longer waking up during the night and tossing and turning because my body
                                            was actually able to relax (this is a result of getting rid of the toxins I
                                            think). Plus I still managed to lose another 7 lbs, putting me at an
                                            unbelievable 15 lbs of weight loss, in just 2 weeks.</p>

                                        <p>I must admit that I'm starting to believe that this diet is more than just a
                                            gimmick.</p>
                                        <span class="resultsSub">Week Three</span>

                                        <p>After 3 weeks all my doubts and skepticism had absolutely vanished! I am
                                            down, 2 full dress sizes, after losing another 6 lbs. And I still have a ton
                                            of energy. Quite often, around the third week of other diets, you tend to
                                            run out of steam. But with the <?php echo $SHORTNAME1; ?> and Green Coffee Cleanse
                                            Ultra diet my energy levels don't dip, but remain steady throughout the day.
                                            I no longer need that cat nap around 3pm in the afternoon! And I am even
                                            noticing that my stomach is digesting food so much better. No bloating or
                                            embarrassing gas after I eat!.</p>
                                        <span class="resultsSub">Week Four</span>

                                        <p>After the fourth week, my final results were shocking. I lost an unbelievable
                                            27 lbs since starting the <?php echo $SHORTNAME1; ?> and <?php echo $NAME2; ?>
                                            diet! Actually everyone at Her Life &amp; Health is kicking themselves for
                                            not having volunteered to be the guinea pig. Using the <?php echo $NAME1; ?> and <?php echo $NAME2; ?> in week 4 I lost 5 more pounds. But to
                                            be honest I really didn't have much more than that left to lose. And I am
                                            definately going to continue taking the <?php echo $NAME1; ?> afterwards
                                            because it has so many antioxidants and vitamins that makes my skin look
                                            unbelievable. </p>
                                    </section>
                                    <div class="quote"
                                         style="font-size: 24px;font-weight: bold;line-height: 30px;font-family:'Open Sans', sans-serif;">
                                        "I couldn't be any happier with the results.<br>
                                        I Lost 27 lbs in <i>4 Weeks</i>, No Special Diet,<br>
                                        No Intense Exercise!"
                                        <div class="quoteTab"></div>
                                    </div>
                                    <figure class="section-image">
                                        <a href="<?php echo $OFFER1; ?>"
                                           style="text-align:center" target="_blank" rel="nofollow"><img
                                                src="img/img_article_01_juliaBA.jpg" alt="img"
                                                style="border:none !important;"></a>
                                        <figcaption style="text-align:center; margin-bottom:15px;">Before and After 4
                                            weeks with
                                            <a href="<?php echo $OFFER1; ?>" target="_blank"><?php echo $NAME1; ?></a> and <a
                                                href="<?php echo $OFFER2; ?>"
                                                target="_blank"><?php echo $NAME2; ?></a>.
                                        </figcaption>
                                    </figure>
                                    <div class="subTitle"><b>Conclusion</b></div>
                                    <br>

                                    <p>
                                        Like us, here at Her Life &amp; Health, you might be a little doubtful about the
                                        effects of this diet, but you need to try it for yourself; the results are real.
                                        After conducting our own personal study we are pleased to see that people really
                                        are finding success with it (myself included!).
                                    </p>

                                    <p><b>Here's How You Can Try These Free Diet Trials For Yourself...</b></p>

                                    <p>Follow the links below to the free trials I have provided and know that you are
                                        getting quality products that work - no strings attached! Remember, the best
                                        results are from using both products together. I'm not as confident that you
                                        will see results like what I achieved if you only use one. Besides, with the
                                        discounted shipping costs you'll be on your way to looking much slimmer and
                                        better for under $5.<br><br>
                                        But hurry! Our report has generated a lot of buzz and these free trials won't be
                                        available forever!
                                    </p>

                                    <div class="clear"></div>
                                </div>
                                <section id="offer">
                                    <div class="warning"><span class="higlight"><u>IMPORTANT:</u></span> *We have tested
                                        both products together, so It is important that you use Step 1 and Step 2 in
                                        this method to achieve similar results.
                                    </div>
                                    <div class="titleBanner"><span class="yellow">EXCLUSIVE</span> offer for our readers
                                        only!
                                    </div>
                                    <div class="offerTitle">
                                        <div class="exposed">exposed!</div>
                                        Celebrity diet combo
                                        <p class="sub">Want to know which method we used in this report?</p>

                                        <p><em>NOW</em> you too can try the program that celebrities are using to lose
                                            more weight easy.</p>
                                    </div>
                                    <div class="product1">
                                        <div class="step1">
                                            Step 1:
                                            <figure class="steps">
                                                <img src="img/step_arrow.png" alt="img"
                                                     style="border:none !important;">
                                            </figure>
                                        </div>
                                        <div class="offerBox">
                                            <a href="<?php echo $OFFER1; ?>"
                                               style="text-decoration:none;" target="_blank">
                                                <div class="claimBtn">
                                                    <div class="badge"></div>
                          <span class="claim">Click NOW<br>
                          to CLAIM</span>
                                                    <span class="package"><span
                                                            class="lora">Free</span> Trial Bottle</span>

                                                    <div class="clear"></div>
                                                </div>
                                            </a>
                                            <span class="limited">WHILE SUPPLIES LAST (free trials limited)</span>
                                            <span class="clickTitle"><a
                                                    href="<?php echo $OFFER1; ?>"
                                                    target="_blank">Click Here to get a trial bottle of <?php echo $NAME1; ?>.</a></span>
                      <span class="Alert">
                        Use our exclusive link to get it for just <?php echo $PRICE1; ?> shipping!
                        <span class="alertArrow"></span>
                      </span>
                      <span class="deadline">(Trial Supplies are very limited, as of <span class="red">
                                            <script>
                                                var mydate = new Date()
                                                var year = mydate.getYear()
                                                if (year < 1000)
                                                    year += 1900
                                                var day = mydate.getDay()
                                                var month = mydate.getMonth()
                                                var daym = mydate.getDate()
                                                if (daym < 10)
                                                    daym = "0" + daym
                                                var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
                                                var montharray = new
                                                    Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
                                                document.write("" + dayarray[day] + ", " + montharray[month] + " " + daym + ", " + year + "")

                                            </script>Tuesday, July 14, 2015
                                        </span> there are still bottles available for immediate shipping)</span>
                                        </div>
                                        <figure class="productPic">
                                            <!--Product IMAGE 140x240px-->
                                            <a href="<?php echo $OFFER1; ?>"
                                               target="_blank"><img src="<?php echo $PRODUCT1; ?>" alt="img"
                                                                    style="border:none !important; height: 250px;"></a>
                                        </figure>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="space"></div>
                                    <div class="product2">
                                        <div class="step2">
                                            Step 2:
                                            <figure class="steps">
                                                <img src="img/step_arrow.png" alt="img"
                                                     style="border:none !important;">
                                            </figure>
                                        </div>
                                        <div class="offerBox">
                                            <a href="<?php echo $OFFER2; ?>"
                                               style="text-decoration:none;" target="_blank">
                                                <div class="claimBtn">
                                                    <div class="badge"></div>
                          <span class="claim">Click NOW<br>
                          to CLAIM</span>
                                                    <span class="package"><span
                                                            class="lora">Free</span> Trial Bottle</span>

                                                    <div class="clear"></div>
                                                </div>
                                            </a>
                                            <span class="limited">WHILE SUPPLIES LAST (free trials limited)</span>
                                            <span class="clickTitle"><a
                                                    href="<?php echo $OFFER2; ?>"
                                                    target="_blank">Click Here to get a trial bottle of <?php echo $NAME2; ?>.</a></span>
                      <span class="Alert">
                        Use our exclusive link to get it for just <?php echo $PRICE2; ?> shipping!
                        <span class="alertArrow"></span>
                      </span>
                      <span class="deadline">(Trial Supplies are very limited, as of <span class="red">
                                            <script>
                                                var mydate = new Date()
                                                var year = mydate.getYear()
                                                if (year < 1000)
                                                    year += 1900
                                                var day = mydate.getDay()
                                                var month = mydate.getMonth()
                                                var daym = mydate.getDate()
                                                if (daym < 10)
                                                    daym = "0" + daym
                                                var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
                                                var montharray = new
                                                    Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
                                                document.write("" + dayarray[day] + ", " + montharray[month] + " " + daym + ", " + year + "")

                                            </script>Tuesday, July 14, 2015
                                        </span> there are still bottles available for immediate shipping)</span>
                                        </div>
                                        <figure class="productPic">
                                            <!--Product IMAGE 140x240px-->
                                            <a href="<?php echo $OFFER2; ?>"
                                               target="_blank"><img src="<?php echo $PRODUCT2; ?>" alt="img"
                                                                    style="border:none !important; height: 250px;"></a>
                                        </figure>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="space" style="display:none;"></div>
                                    <div class="titleBanner2" style="margin-bottom:30px;"><span
                                            class="yellow">Remember</span> to use <u>both</u> products for extreme
                                        results
                                    </div>
                                </section>
                                <section id="relatedPosts">
                                    <section class="widget">
                                        <h4 class="widgettitle">You may also like</h4>
                                        <ul class="related clearfix">
                                            <li>
                                                <figure class="widget-image">
                                                    <a href="<?php echo $OFFER1; ?>"
                                                       style="text-decoration:none;" target="_blank"><img
                                                            src="img/img_readed1.jpg" alt="img"></a>
                                                    <figcaption></figcaption>
                                                </figure>
                                                <h2 class="related-title"><a
                                                        href="<?php echo $OFFER1; ?>"
                                                        style="text-decoration:none;" target="_blank">Look 15 Years
                                                        Younger with '1' Weird Trick...</a></h2>

                                                <div class="clear"></div>
                                            </li>
                                            <li>
                                                <figure class="widget-image">
                                                    <a href="<?php echo $OFFER1; ?>"
                                                       style="text-decoration:none;"><img src="img/img_readed2.jpg"
                                                                                          alt="img"></a>
                                                    <figcaption></figcaption>
                                                </figure>
                                                <h2 class="related-title"><a
                                                        href="<?php echo $OFFER1; ?>"
                                                        style="text-decoration:none;" target="_blank">Look 15 Years
                                                        Younger with '1' Weird Trick...</a></h2>

                                                <div class="clear"></div>
                                            </li>
                                            <li>
                                                <figure class="widget-image">
                                                    <a href="<?php echo $OFFER1; ?>"
                                                       style="text-decoration:none;" target="_blank"><img
                                                            src="img/img_readed3.jpg" alt="img"></a>
                                                    <figcaption></figcaption>
                                                </figure>
                                                <h2 class="related-title"><a
                                                        href="<?php echo $OFFER1; ?>"
                                                        style="text-decoration:none;" target="_blank">Look 15 Years
                                                        Younger with '1' Weird Trick...</a></h2>

                                                <div class="clear"></div>
                                            </li>
                                            <li style="padding-right:0px;">
                                                <figure class="widget-image">
                                                    <a href="<?php echo $OFFER1; ?>"
                                                       style="text-decoration:none;" target="_blank"><img
                                                            src="img/img_readed2.jpg" alt="img"></a>
                                                    <figcaption></figcaption>
                                                </figure>
                                                <h2 class="related-title"><a
                                                        href="<?php echo $OFFER1; ?>"
                                                        style="text-decoration:none;" target="_blank">Look 15 Years
                                                        Younger with '1' Weird Trick...</a></h2>

                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="more">More top rated Articles &gt;&gt;</div>
                                    </section>
                                    <div class="divisionBar2"></div>
                                </section>
                            </div>
                            <!-- /.post -->
                        </div>
                        <!-- /#content -->
                        <aside id="sidebar">
                            <section class="specialBox">
                                <div class="specialTitle">
                                    Special Offer
                                    <div class="tab"></div>
                                </div>
                                <div class="offerPic">
                                    <a href="<?php echo $OFFER1; ?>" target="_blank"
                                       rel="nofollow"><img src="img/cover3.png" alt="img"
                                                           style="border:none !important;"></a>
                <span class="offerTxt"><span class="offerSub">In this issue of HerL&amp;H: </span>
                &gt;&gt; This month issue includes a <b>Special Offer</b> Inside!. Here are the <b>Details:</b></span>

                                    <div class="clear"></div>
                                </div>
                                <div class="clickOffer">
                                    <span class="offerStep" style="text-decoration:none !important;">Step 1: </span>
                                    <span class="clickTxt"><a href="<?php echo $OFFER1; ?>"
                                                              target="_blank">Click Here to get a FREE trial bottle of
                                            <b><?php echo $NAME1; ?>.</b></a></span>
                                </div>
                                <div class="Alert2"><span style="background-color:#eeff49;">Use our exclusive link to get it for just <?php echo $PRICE1; ?> shipping!                </span>
                                </div>
                                <div class="clickOffer">
                                    <span class="offerStep" style="text-decoration:none !important;">Step 2: </span>
                                    <span class="clickTxt"><a href="<?php echo $OFFER2; ?>"
                                                              target="_blank">Click Here to get a FREE trial bottle of
                                            <b><?php echo $NAME2; ?>.</b></a></span>
                                </div>
                                <div class="Alert2"><span style="background-color:#eeff49; padding:1px;">Use our exclusive link to get it for just <?php echo $PRICE2; ?> shipping!</span>
                                </div>
                                <div class="divider2"></div>
                                <div class="note">*NOTE: You must use <u>both products</u> to achieve the same results.
                                </div>
                                <div class="expire">Free trials are limited.<br>
                                    Expires on
                                    <b>
                                        <script>
                                            var mydate = new Date()
                                            var year = mydate.getYear()
                                            if (year < 1000)
                                                year += 1900
                                            var day = mydate.getDay()
                                            var month = mydate.getMonth()
                                            var daym = mydate.getDate()
                                            if (daym < 10)
                                                daym = "0" + daym
                                            var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
                                            var montharray = new
                                                Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
                                            document.write("" + dayarray[day] + ", " + montharray[month] + " " + daym + ", " + year + "")

                                        </script>
                                        Tuesday, July 14, 2015
                                    </b>
                                </div>
                            </section>
                            <section class="widget clearfix">
                                <h4 class="widgettitle" style="letter-spacing:4px;">Reviewed products</h4>
                                <span class="easier">Getting Slim has never been <em>Easier:</em></span>
                                <ul class="reviews">
                                    <li>
                                        <figure class="product-review">
                                            <a href="<?php echo $OFFER1; ?>"
                                               style="text-decoration:none;" target="_blank" rel="nofollow"><img
                                                    src="<?php echo $PRODUCT1; ?>" alt="img"
                                                    style="border:none !important;max-width:100%;width:auto;height:100px;"></a>

                                            <div class="">
                                                <div class="clickOffer">
                                                    <span class="clickTxt"><a
                                                            href="<?php echo $OFFER1; ?>"
                                                            target="_blank">Get a FREE trial bottle of <b><?php echo $NAME1; ?>.</b></a></span>
                                                </div>
                                                <div class="Alert3">Use our exclusive link to get it for just <?php echo $PRICE1; ?>
                                                    shipping!
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure class="product-review">
                                            <a href="<?php echo $OFFER2; ?>"
                                               style="text-decoration:none;" target="_blank" rel="nofollow"><img
                                                    src="<?php echo $PRODUCT2; ?>" alt="img"
                                                    style="border:none !important;max-width:100%;width:auto;height:100px;"></a>

                                            <div class="">
                                                <div class="clickOffer">
                                                    <span class="clickTxt"><a
                                                            href="<?php echo $OFFER2; ?>"
                                                            target="_blank">Get a FREE trial bottle of <b><?php echo $NAME2; ?>.</b></a></span>
                                                </div>
                                                <div class="Alert3">Use our exclusive link to get it for just <?php echo $PRICE2; ?>
                                                    shipping!
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </figure>
                                    </li>
                                </ul>
                            </section>
                            <!-- /.widget -->
                            <section class="widget clearfix">
                                <h4 class="widgettitle">In this Article</h4>

                                <div class="claimList">
                                    <span class="claimTitle"><span style="color:#da128c"><a
                                                href="<?php echo $OFFER1; ?>"
                                                style="text-decoration:underline;" target="_blank" rel="nofollow">Garcinia
                                                Cambogia</a></span> in the news:</span><br>
                                    Julia Miller, our Health and Diet columnist, recently put the <?php echo $SHORTNAME1; ?> Diet
                                    to the test. After four weeks of testing the effects of America's Newest Superfood
                                    combined with a colon cleanser, she has reached the conclusion to what this diet is
                                    all about, and the results were surprising.
                                    <br><br>
                                    <ul>
                                        <li style="margin-left:26px;"><b>She lost 27 lbs in 4 weeks.</b></li>
                                    </ul>
                                    <a href="<?php echo $OFFER1; ?>" target="_blank"><img
                                            src="img/img_article_01_berries.jpg.png" alt="img"
                                            style="border:none !important;"></a>
                                </div>
                            </section>
                            <!-- /.widget -->
                            <section class="widget">
                                <h4 class="widgettitle">Top Rated</h4>
                                <ul class="popular clearfix">
                                    <li>
                                        <figure class="widget-image">
                                            <a href="<?php echo $OFFER1; ?>"
                                               style="text-decoration:none;" target="_blank"><img
                                                    src="img/img_readed1.jpg" alt="img"></a>
                                            <figcaption></figcaption>
                                        </figure>
                                        <h2 class="widget-title"><a
                                                href="<?php echo $OFFER1; ?>"
                                                style="text-decoration:none;" target="_blank">Look 15 Years Younger with
                                                '1' Weird Trick...</a></h2>

                                        <p class="read"><a href="<?php echo $OFFER1; ?>"
                                                           style="text-decoration:none;" target="_blank">Read the note
                                                &gt;&gt;</a></p>

                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <figure class="widget-image">
                                            <a href="<?php echo $OFFER1; ?>"
                                               style="text-decoration:none;" target="_blank"><img
                                                    src="img/img_readed2.jpg" alt="img"></a>
                                            <figcaption></figcaption>
                                        </figure>
                                        <h2 class="widget-title"><a
                                                href="<?php echo $OFFER1; ?>"
                                                style="text-decoration:none;" target="_blank">'2' Quick Ways to Shed
                                                Excess Fat and eat normal...</a></h2>

                                        <p class="read"><a href="<?php echo $OFFER1; ?>"
                                                           style="text-decoration:none;" target="_blank">Read the note
                                                &gt;&gt;</a></p>

                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <figure class="widget-image">
                                            <a href="<?php echo $OFFER1; ?>"
                                               style="text-decoration:none;" target="_blank"><img
                                                    src="img/img_readed3.jpg" alt="img"></a>
                                            <figcaption></figcaption>
                                        </figure>
                                        <h2 class="widget-title"><a
                                                href="<?php echo $OFFER1; ?>"
                                                style="text-decoration:none;" target="_blank">Incredible way to make
                                                money for less work...</a></h2>

                                        <p class="read"><a href="<?php echo $OFFER1; ?>"
                                                           style="text-decoration:none;" target="_blank">Read the note
                                                &gt;&gt;</a></p>

                                        <div class="clear"></div>
                                    </li>

                                </ul>
                                <div class="more">More top rated Articles &gt;&gt;</div>
                            </section>
                            <!-- /.widget -->
                            <section class="widget clearfix">
                                <h4 class="widgettitle">Expert Advice</h4>
                                <ul class="advice">
                                    <li>
                                        <figure class="advicePic">
                                            <a href="<?php echo $OFFER1; ?>"
                                               style="text-decoration:none;" target="_blank"><img
                                                    src="img/img_advice1.jpg" alt="img"></a>
                                        </figure>
                                        <h2 class="widget-title"><a
                                                href="<?php echo $OFFER1; ?>"
                                                style="text-decoration:none;" target="_blank">'1' Smart Way to Make
                                                Serious Cash</a></h2>

                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <figure class="advicePic">
                                            <a href="<?php echo $OFFER1; ?>"
                                               style="text-decoration:none;" target="_blank"><img
                                                    src="img/img_advice3.jpg" alt="img"></a>
                                        </figure>
                                        <h2 class="widget-title"><a
                                                href="<?php echo $OFFER1; ?>"
                                                style="text-decoration:none;" target="_blank">Super Foods in a Pill?</a>
                                        </h2>

                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <figure class="advicePic">
                                            <a href="<?php echo $OFFER1; ?>"
                                               style="text-decoration:none;" target="_blank"><img
                                                    src="img/img_advice4.jpg" alt="img"></a>
                                        </figure>
                                        <h2 class="widget-title"><a
                                                href="<?php echo $OFFER1; ?>"
                                                style="text-decoration:none;" target="_blank">Improve your mood
                                                naturally</a></h2>

                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <figure class="advicePic">
                                            <a href="<?php echo $OFFER1; ?>"
                                               style="text-decoration:none;" target="_blank"><img
                                                    src="img/img_advice5.jpg" alt="img"></a>
                                        </figure>
                                        <h2 class="widget-title"><a
                                                href="<?php echo $OFFER1; ?>"
                                                style="text-decoration:none;" target="_blank">'2' Quick Ways to Shed
                                                Excess Fat and skip the gym</a></h2>

                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </section>
                        </aside>
                        <!-- /#sidebar -->
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /#pagewrap -->
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="suscribe" -->

    <section id="suscribeBar">
        <div class="pagewrap">
            <div id="suscribeHeader">
                <span class="suscribeTitle">Subscribe</span>
                <span class="suscribeTitle2">Today!</span>
            </div>
            <div id="suscribeBox">
            <span class="suscribetxtBox">Subscribe to our email newsletter and get the
            latest reports and great <span class="loraBlue">offers</span> on your email.</span>

                <div class="suscribeForm">
                    <form>
                        <div class="inputHolder"><input type="Email" id="suscribeIn" placeholder="Email"
                                                        style="border:1px solid gray;border-radius:3px; display:block; padding:5px; background:white">
                        </div>
                        <div class="suscribeBtn">Subscribe</div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <footer id="footer">
        <div class="pagewrap">
            <div class="footer-col1">
                <div id="footer-logo">
                    <a href="<?php echo $OFFER1; ?>" style="text-decoration:none;"
                       target="_blank">Life<span class="spaceTitle2"></span>Health</a>

                    <div id="vertical-text-footer">her</div>
                </div>
                <div class="footerSubtitle">The #1 online magazine for trend women topics and concerns.</div>
            </div>
            <div class="footer-col2">
                <nav>
                    <ul id="footer-nav" class="clearfix">
                        <li><a href="<?php echo $OFFER1; ?>" target="_blank">Weight Loss</a>
                        </li>
                        <li><a href="<?php echo $OFFER1; ?>" target="_blank">Fitness</a></li>
                        <li><a href="<?php echo $OFFER1; ?>" target="_blank">Health &amp;
                                living</a></li>
                        <li><a href="<?php echo $OFFER1; ?>" target="_blank">Beauty &amp;
                                style</a></li>
                        <li><a href="<?php echo $OFFER1; ?>" target="_blank">Budget</a></li>
                    </ul>
                    <!-- /#main-nav -->
                </nav>
                <div class="clear"></div>
                <div>
                    <div class="secondNav">
                        <script>
                            $(document).ready(function () {
                                $('.legal-link').click(function () {
                                    window.open($(this).attr('href'), 'title', 'width=600, height=400, toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, copyhistory=no, resizable=yes');
                                    return false;
                                });
                            });
                        </script>
                        <a class="legal-link" href="http://buygarciniaplus.com/terms.html">Terms and Conditions</a> |
                        <a class="legal-link" href="http://buygarciniaplus.com/privacy.html">Privacy Policy</a>
                        <a class="legal-link" href="http://buygarciniaplus.com/contact.html">Contact Us</a> |
                        <a href="tel:8779002879">877-900-2879</a>
                    </div>
                    <div class="copy">© Her Life and Health LLC. All rights reserved.</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </footer>
    <!-- /#footer -->
</div>
<img src="http://fcganalytics.com/adck.php?c=4&amp;l=1&amp;r=" style="display:none">
<script type="text/javascript">checkdirect(4, 1)</script>

</body>
</html>