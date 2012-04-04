<?php
session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1, 20);
$_SESSION['n2'] = rand(1, 20);
$_SESSION['expect'] = $_SESSION['n1'] + $_SESSION['n2'];


$str = '';
if ($_SESSION['errStr']) {
    $str = '<div class="error contact-error alert-message">' . $_SESSION['errStr'] . '</div>';
    unset($_SESSION['errStr']);
}

$success = '';
if ($_SESSION['sent']) {
    $success = '<h1>Thank you!</h1>';

    $css = '<style type="text/css">#contact-form{display:none;}</style>';

    unset($_SESSION['sent']);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <link href="css/framework/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/framework/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/framework/normalize.css" rel="stylesheet" type="text/css" />
        <link href="css/framework/prettify.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/superfish.css" rel="stylesheet" type="text/css" />
        <link href="css/buttons/btn.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="contactForm/jqtransformplugin/jqtransform.css" />
        <link rel="stylesheet" type="text/css" href="contactForm/formValidator/validationEngine.jquery.css" />
        <link rel="stylesheet" type="text/css" href="contactForm/demo.css" />


        <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="js/twitter.js"></script>
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/supersubs.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/prettify/prettify.js"></script>
        <script type="text/javascript" src="js/bootstrap-alerts.js"></script>
        <script type="text/javascript" src="js/bootstrap-tabs.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/formScript.js"></script>

<?= $css ?>

        <script type="text/javascript" src="contactForm/jqtransformplugin/jquery.jqtransform.js"></script>
        <script type="text/javascript" src="contactForm/formValidator/jquery.validationEngine.js"></script>

        <link rel="shortcut icon" href="img/favicon.ico"/>

        <title>Synapse / Contact</title>

    </head>

    <body onload="prettyPrint()">

        <div class="top-bar">

            <div class="container">

                <ul class="nav sf-menu2">

                    <li><a href="#">Sliders</a>

                        <ul>

                            <li><a href="index.html">Slider Small</a></li>
                            <li><a href="index-thumbs.html">Slider Small (Thumbs)</a></li>
                            <li><a href="index-wide.html">Slider Wide</a></li>
                            <li><a href="index-wide-thumbs.html">Slider Wide (Thumbs)</a></li>
                            <li><a href="index-content.html">Content Slider</a></li>

                        </ul>

                    </li>
                    <li><a href="elements.html">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="https://twitter.com/ddstudios">Twitter</a></li>
                    <li><a href="http://dribbble.com/ddstudios">Dribbble</a></li>

                </ul>

                <ul class="social">

                    <li><a class="twitter" href="https://twitter.com/ddstudios">twitter</a></li>
                    <li><a class="facebook" href="http://www.facebook.com">facebook</a></li>
                    <li><a class="phone" href="#">phone</a></li>
                    <li><a class="mail" href="contact.php">mail</a></li>

                </ul>

            </div>

        </div>

        <div class="header">

            <div class="container">

                <div class="logo-container">

                    <a class="logo" href="index.html"><img src="img/logo.png" alt="" /></a>
                    <span class="tagline">HTML Theme by Dany Duchaine</span>

                </div>

                <ul id="main-nav" class="sf-menu">

                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Sliders</a>

                        <ul>

                            <li><a href="index.html">Slider Small</a></li>
                            <li><a href="index-thumbs.html">Slider Small (Thumbs)</a></li>
                            <li><a href="index-wide.html">Slider Wide</a></li>
                            <li><a href="index-wide-thumbs.html">Slider Wide (Thumbs)</a></li>
                            <li><a href="index-content.html">Content Slider</a></li>

                        </ul>

                    </li>
                    <li><a href="blog.html">Our Blog</a>

                        <ul>

                            <li><a href="single-blog.html">Blog - Single Post</a></li>

                        </ul>

                    </li>
                    <li><a href="portfolio.html">Our Portfolio</a>

                        <ul>

                            <li><a href="single-portfolio.html">Portfolio - Single Post</a></li>
                            <li><a href="single-portfolio-custom-bg.html">Portfolio - (Custom BG)</a></li>

                        </ul>

                    </li>
                    <li><a href="elements.html">Elements</a>

                        <ul><li><a href="fullwidth.html">Full Width Page</a></li></ul>

                    </li>
                    <li><a class="active" href="contact.php">Contact Us</a></li>

                </ul>

            </div>

        </div>

        <div class="page container clearfix">

            <div class="row">

                <div class="page-content span12">

                    <h3>Leave A Message!</h3>

                    <p> There, now he's trapped in a book I wrote: a crummy world of plot holes and spelling errors! They're like sex, except I'm having them! OK, this has gotta stop. I'm going to remind Fry of his humanity the way only a woman can.</p>

                    <iframe style="margin: 20px 0;" width="565" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=montreal&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=55.937499,135.263672&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=Montreal,+Communaut%C3%A9-Urbaine-de-Montr%C3%A9al,+Quebec,+Canada&amp;t=m&amp;ll=45.508753,-73.554153&amp;spn=0.16842,0.387955&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe><br />

                    <div id="form-container">

                        <form id="contact-form" name="contact-form" method="post" action="submit.php">
                            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                                <tr>
                                    <td width="15%"><label for="name">Name</label></td>
                                    <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?= $_SESSION['post']['name'] ?>" /></td>
                                    <td width="15%" id="errOffset">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><label for="email">Email</label></td>
                                    <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?= $_SESSION['post']['email'] ?>" /></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><label for="subject">Subject</label></td>
                                    <td><select name="subject" id="subject">
                                            <option value="" selected="selected"> - Choose -</option>
                                            <option value="Question">Question</option>
                                            <option value="Business proposal">Business proposal</option>
                                            <option value="Advertisement">Advertising</option>
                                            <option value="Complaint">Complaint</option>
                                        </select>          </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td valign="top"><label for="message">Message</label></td>
                                    <td><textarea name="message" id="message" class="validate[required]" cols="35" style="width: 400px;" rows="8"><?= $_SESSION['post']['message'] ?></textarea></td>
                                    <td valign="top">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><label for="captcha"><?= $_SESSION['n1'] ?> + <?= $_SESSION['n2'] ?> =</label></td>
                                    <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
                                    <td valign="top">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td valign="top">&nbsp;</td>
                                    <td colspan="2"><input type="submit" name="button" id="button" class="rounded-1" style="padding: 5px 10px" value="Submit" />
                                        <input type="reset" name="button2" id="button2" class="rounded-1" style="padding: 5px 10px" value="Reset" />

<?= $str ?>         </td>
                                </tr>
                            </table>
                        </form>
                                        <?= $success ?>
                    </div>

                </div>

                <div class="span4 sidebar">

                    <ul class="widgets">

                        <li class="widget">

                            <h3>Text Widget</h3>
                            <p>Vivamus et nisl nulla. Pellentesque tincidunt, mi pretium condimentum mattis, orci lacus adipiscing ipsum, vitae eleifend lorem velit. </p>

                        </li>

                        <li class="widget testimonial-widget">

                            <h3>Testimonials</h3>

                            <ul class="sidebar-testimonials clearfix">

                                <li class="testimonial">

                                    <div class="testimonial-widget-info">

                                        <img src="img/testimonial-avatar-2.jpg" alt="" />

                                        <div class="testimonial-widget-meta">

                                            <span>Hugh Laurie</span>
                                            <a href="#">http://hughlaurieblues.com/</a>

                                        </div>

                                    </div>

                                    <blockquote><p>The Dany Duchaine team provided us with the best care possible in our website redesign. We came into this process with specific needs and goals.</p> <p>They took the time to clarify what that meant to us, what that looked like to them, and every need and goal was met.</p></blockquote>

                                </li>

                                <li class="testimonial">

                                    <div class="testimonial-widget-info">

                                        <img src="img/testimonial-avatar-1.jpg" alt="" />

                                        <div class="testimonial-widget-meta">

                                            <span>Louis C.K</span>
                                            <a href="#">https://www.louisck.net</a>

                                        </div>

                                    </div>

                                    <blockquote><p>Dany Duchaine have been superb. Their customer service is great.</p> <p>The guys there respond very quickly and go above and beyond to help.</p></blockquote>

                                </li>

                                <li class="testimonial">

                                    <div class="testimonial-widget-info">

                                        <img src="img/testimonial-avatar-2.jpg" alt="" />

                                        <div class="testimonial-widget-meta">

                                            <span>Hugh Laurie</span>
                                            <a href="#">http://hughlaurieblues.com/</a>

                                        </div>

                                    </div>

                                    <blockquote><p>The Dany Duchaine team provided us with the best care possible in our website redesign. We came into this process with specific needs and goals.</p> <p>They took the time to clarify what that meant to us, what that looked like to them, and every need and goal was met.</p></blockquote>

                                </li>

                                <li class="testimonial">

                                    <div class="testimonial-widget-info">

                                        <img src="img/testimonial-avatar-1.jpg" alt="" />

                                        <div class="testimonial-widget-meta">

                                            <span>Louis C.K</span>
                                            <a href="#">https://www.louisck.net</a>

                                        </div>

                                    </div>

                                    <blockquote><p>Dany Duchaine have been superb. Their customer service is great.</p> <p>The guys there respond very quickly and go above and beyond to help.</p></blockquote>

                                </li>

                            </ul>

                            <div class="sidebar-testimonial-pager">

                                <div id="sidebar-testimonial-pager"></div>

                            </div>

                        </li>

                    </ul>

                </div>

            </div>

             </div>

        <div id="alternate">

            <div class="container clearfix">

                <ul class="row">

                    <li class="span-one-third blog-widget">

                        <h3>Some Articles From The Blog</h3>

                        <div class="blog-slider">

                            <div>

                                <ul class="blog-widget-articles">

                                    <li class="blog-widget-article">

                                        <a href="single-blog.html"><img src="img/thumbnails/thumb-1.jpg" alt="" /></a>

                                        <div class="blog-widget-info">

                                            <a class="blog-widget-title" href="single-blog.html">Effective User Research And Transforming The Minds Of Clients</a>

                                            <div class="blog-widget-meta">

                                                <a href="#">June 9th, 2011,</a><a href="#">92 Comments</a>

                                            </div>

                                        </div>

                                    </li>

                                    <li class="blog-widget-article">

                                        <a href="#"><img src="img/thumbnails/thumb-2.jpg" alt="" /></a>

                                        <div class="blog-widget-info">

                                            <a class="blog-widget-title" href="single-blog.html">Holidays Around The World: Smashing Photo Contest</a>

                                            <div class="blog-widget-meta">

                                                <a href="#">June 9th, 2011,</a><a href="#">92 Comments</a>

                                            </div>

                                        </div>

                                    </li>

                                    <li class="blog-widget-article">

                                        <a href="#"><img src="img/thumbnails/thumb-3.jpg" alt="" /></a>

                                        <div class="blog-widget-info">

                                            <a class="blog-widget-title" href="single-blog.html">Combining Analog And Digital Techniques</a>

                                            <div class="blog-widget-meta">

                                                <a href="#">June 9th, 2011,</a><a href="#">92 Comments</a>

                                            </div>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                            <div>

                                <ul class="blog-widget-articles">


                                    <li class="blog-widget-article">

                                        <a href="#"><img src="img/thumbnails/thumb-4.jpg" alt="" /></a>

                                        <div class="blog-widget-info">

                                            <a class="blog-widget-title" href="single-blog.html">Introduction To Designing For Windows Phone 7 And Metro</a>

                                            <div class="blog-widget-meta">

                                                <a href="#">June 9th, 2011,</a><a href="#">92 Comments</a>

                                            </div>

                                        </div>

                                    </li>

                                    <li class="blog-widget-article">

                                        <a href="#"><img src="img/thumbnails/thumb-5.jpg" alt="" /></a>

                                        <div class="blog-widget-info">

                                            <a class="blog-widget-title" href="single-blog.html">Smashing Photo Contest “Holidays Around The World”: Best Entries!</a>

                                            <div class="blog-widget-meta">

                                                <a href="#">June 9th, 2011,</a><a href="#">92 Comments</a>

                                            </div>

                                        </div>

                                    </li>

                                    <li class="blog-widget-article">

                                        <a href="#"><img src="img/thumbnails/thumb-6.jpg" alt="" /></a>

                                        <div class="blog-widget-info">

                                            <a class="blog-widget-title" href="single-blog.html">Dear Drupal: Season’s Greetings. Love, Smashing WordPress.</a>

                                            <div class="blog-widget-meta">

                                                <a href="#">June 9th, 2011,</a><a href="#">92 Comments</a>

                                            </div>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                            <div>

                                <ul class="blog-widget-articles">


                                    <li class="blog-widget-article">

                                        <a href="#"><img src="img/thumbnails/thumb-7.jpg" alt="" /></a>

                                        <div class="blog-widget-info">

                                            <a class="blog-widget-title" href="single-blog.html">The Smashing Deals Countdown: Three More Days Till Christmas</a>

                                            <div class="blog-widget-meta">

                                                <a href="#">June 9th, 2011,</a><a href="#">92 Comments</a>

                                            </div>

                                        </div>

                                    </li>

                                    <li class="blog-widget-article">

                                        <a href="#"><img src="img/thumbnails/thumb-8.jpg" alt="" /></a>

                                        <div class="blog-widget-info">

                                            <a class="blog-widget-title" href="single-blog.html">How Do You Deal With Overstressed, Irrational Clients? An Entrepreneur’s View</a>

                                            <div class="blog-widget-meta">

                                                <a href="#">June 9th, 2011,</a><a href="#">92 Comments</a>

                                            </div>

                                        </div>

                                    </li>

                                    <li class="blog-widget-article">

                                        <a href="#"><img src="img/thumbnails/thumb-9.jpg" alt="" /></a>

                                        <div class="blog-widget-info">

                                            <a class="blog-widget-title" href="single-blog.html">Teach Them How To Hit The Ground Running And Faceplant At The Same Time? </a>

                                            <div class="blog-widget-meta">

                                                <a href="#">June 9th, 2011,</a><a href="#">92 Comments</a>

                                            </div>

                                        </div>

                                    </li>


                                </ul>

                            </div>

                        </div>

                        <div class="blog-pager">

                            <div id="blog-pager"></div>

                        </div>

                    </li>

                    <li class="span-one-third testimonial-widget">

                        <h3>What Clients Says About Us</h3>

                        <ul class="testimonials clearfix">

                            <li class="testimonial">

                                <div class="testimonial-widget-info">

                                    <img src="img/testimonial-avatar-2.jpg" alt="" />

                                    <div class="testimonial-widget-meta">

                                        <span>Hugh Laurie</span>
                                        <a href="#">http://hughlaurieblues.com/</a>

                                    </div>

                                </div>

                                <blockquote><p>The Dany Duchaine team provided us with the best care possible in our website redesign. We came into this process with specific needs and goals.</p> <p>They took the time to clarify what that meant to us, what that looked like to them, and every need and goal was met.</p></blockquote>

                            </li>

                            <li class="testimonial">

                                <div class="testimonial-widget-info">

                                    <img src="img/testimonial-avatar-1.jpg" alt="" />

                                    <div class="testimonial-widget-meta">

                                        <span>Louis C.K</span>
                                        <a href="#">https://www.louisck.net</a>

                                    </div>

                                </div>

                                <blockquote><p>Dany Duchaine have been superb. Their customer service is great.</p> <p>The guys there respond very quickly and go above and beyond to help.</p></blockquote>

                            </li>

                            <li class="testimonial">

                                <div class="testimonial-widget-info">

                                    <img src="img/testimonial-avatar-2.jpg" alt="" />

                                    <div class="testimonial-widget-meta">

                                        <span>Hugh Laurie</span>
                                        <a href="#">http://hughlaurieblues.com/</a>

                                    </div>

                                </div>

                                <blockquote><p>The Dany Duchaine team provided us with the best care possible in our website redesign. We came into this process with specific needs and goals.</p> <p>They took the time to clarify what that meant to us, what that looked like to them, and every need and goal was met.</p></blockquote>

                            </li>

                            <li class="testimonial">

                                <div class="testimonial-widget-info">

                                    <img src="img/testimonial-avatar-1.jpg" alt="" />

                                    <div class="testimonial-widget-meta">

                                        <span>Louis C.K</span>
                                        <a href="#">https://www.louisck.net</a>

                                    </div>

                                </div>

                                <blockquote><p>Dany Duchaine have been superb. Their customer service is great.</p> <p>The guys there respond very quickly and go above and beyond to help.</p></blockquote>

                            </li>

                        </ul>

                        <div class="testimonial-pager">

                            <div id="testimonial-pager"></div>

                        </div>

                    </li>

                    <li class="span-one-third video-widget">

                        <h3>What About A Video Widget</h3>

                        <div class="video-holder">

                            <iframe src="http://player.vimeo.com/video/34177255?title=0&amp;byline=0&amp;portrait=0" width="259" height="155" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="http://vimeo.com/34177255">Manawai - Endless summer</a> from <a href="http://vimeo.com/user626205">Andro Kajzer</a> on <a href="http://vimeo.com">Vimeo</a>.</p>

                        </div>

                    </li>

                </ul>

            </div>

        </div>

        <div class="footer">

            <div class="container">

                <div class="row">

                    <div class="span4">

                        <h3>Our Expertise</h3>

                        <p>Vivamus et nisl nulla. Pellentesque tincidunt, mi <a href="#">pretium condimentum</a> mattis, orci lacus adipiscing ipsum, vitae eleifend lorem velit vitae turpis.</p>
                        <a style="margin-top: 10px;" class="small-btn blue rounded-1" href="#">Read more</a>

                    </div>

                    <div class="span4">

                        <h3>Our Mission</h3>

                        <p>Mascetur ridiculus mus. <a href="#">Nullam faucibus, nisi sed</a> ultricies elementum, magna mauris pharetra.</p>
                        <p>Vivamus et nisl nulla. Orci lacus adipiscing ipsum, vitae eleifend lorem velit vitae turpis.</p>
                        <a style="margin-top: 10px;" class="small-btn blue rounded-1" href="#">Read more</a>

                    </div>

                    <div class="span4">

                        <h3>From Twitter</h3>

                        <div class="tweet"></div>

                        <a class="small-btn blue rounded-1" href="#">Follow us</a>

                    </div>

                    <div class="span4">

                        <img style="margin-bottom: 10px;" src="img/logo-small.png" alt="" />
                        <p class="footer-description">Integer at nulla ut mauris pretium imperdiet tristique at massa.Praesent <a href="#">malesuada nunc et</a> turpis consectetur . </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="small-footer container">

            <div class="footer-left"><p>Copyright © Synapse 2011. All rights reserved.</p></div>

            <div class="footer-right"><p><a href="#">Home</a> / <a href="#">About Us</a> / <a href="#">Our Portfolio</a> / <a href="#">Services</a> / <a href="#">Contact</a></p></div>

        </div>

    </body>

</html>
