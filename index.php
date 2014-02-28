<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Design:Olin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300,100,100italic,300italic,400italic,700,700italic">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-general.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-sizes.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-shapes.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-bg-colors.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-bg-images-48.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-effects.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav>
			<a class="menu-top" href="">Top</a>
			<a class="menu-subscribe" href="">Subscribe</a>
			<a class="menu-project" href="">The project</a>
			<a class="menu-testimonials" href="">Testimonials</a>
			<a class="menu-about-us" href="">About us</a>
			<a class="menu-contact" href="">Contact</a>
			<div class="hide-menu">
				<a href="" rel="tooltip" data-placement="bottom" data-original-title="Hide menu">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</nav>
		<div class="show-menu">
			<a href="" rel="tooltip" data-placement="bottom" data-original-title="Show menu">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		
        <!-- Coming Soon -->
        <div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                        	<div class="logo">
                        		<h1><a href="">Design:Olin</a></h1>
                        	</div>
                            <h2>A Different Kind of Hackathon</h2>
                            <p>
                            	We are working very hard on the new version of our site. 
                            	It will bring a lot of new features. Stay tuned!
                            </p>
                            <div class="timer">
                                <div class="days-wrapper">
                                    <span class="days"></span> <br>days
                                </div>
                                <div class="hours-wrapper">
                                    <span class="hours"></span> <br>hours
                                </div>
                                <div class="minutes-wrapper">
                                    <span class="minutes"></span> <br>minutes
                                </div>
                                <div class="seconds-wrapper">
                                    <span class="seconds"></span> <br>seconds
                                </div>
                            </div>
                            <p class="top-arrow">
                            	<i class="fa fa-chevron-down"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscription form -->
        <div class="container">
            <div class="row">
                <div class="span12 subscribe">
                    <h3>Subscribe to our newsletter</h3>
                    <p>Sign up now to our newsletter and you'll be one of the first to know when the site is ready:</p>
                    <form class="form-inline" action="assets/subscribe.php" method="post">
                        <input type="text" name="email" placeholder="Enter your email...">
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                    <div class="success-message"></div>
                    <div class="error-message"></div>
                </div>
            </div>
        </div>
        
        <!-- About the new site -->
        <div class="about-container">
	        <div class="container">
	            <div class="row">
	                <div class="span12 about">
	                    <h3>About the new site</h3>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="span4 about-box-1">
	                	<div class="about-box-1-icon">
	                		<i class="fa fa-eye"></i>
	                	</div>
	                    <h4>New Features</h4>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et.
	                    </p>
	                </div>
	                <div class="span4 about-box-1">
	                	<div class="about-box-1-icon">
	                		<i class="fa fa-table"></i>
	                	</div>
	                    <h4>Responsive Layout</h4>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et.
	                    </p>
	                </div>
	                <div class="span4 about-box-1">
	                	<div class="about-box-1-icon">
	                		<i class="fa fa-pencil"></i>
	                	</div>
	                    <h4>Flat Design</h4>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- Testimonials -->
        <div class="container">
            <div class="row">
                <div class="span12 testimonials">
                    <h3>What our clients say</h3>
                    <div class="testimonial-active"></div>
                    <div class="testimonial-quote">&ldquo; &rdquo;</div>
                    <div class="testimonial-single">
                    	<p>
                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                    		lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, 
                    		quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                    		<br>
                    		<a href="">John Doe, johndoe.com</a>
                    	</p>
                    	<div class="testimonial-single-image">
                    		<img src="assets/img/testimonials/1.jpg" alt="">
                    	</div>
                    </div>
                    <div class="testimonial-single">
                    	<p>
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                    		ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                    		incididunt ut labore et. Lorem ipsum dolor sit amet.
                    		<br>
                    		<a href="">Jane Jonsson, blog.jane.com</a>
                    	</p>
                    	<div class="testimonial-single-image">
                    		<img src="assets/img/testimonials/2.jpg" alt="">
                    	</div>
                    </div>
                    <div class="testimonial-single">
                    	<p>
                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                    		lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, 
                    		quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                    		<br>
                    		<a href="">John Doe, johndoe.com</a>
                    	</p>
                    	<div class="testimonial-single-image">
                    		<img src="assets/img/testimonials/3.jpg" alt="">
                    	</div>
                    </div>
                    <div class="testimonial-single">
                    	<p>
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                    		ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                    		incididunt ut labore et. Lorem ipsum dolor sit amet.
                    		<br>
                    		<a href="">Jane Jonsson, blog.jane.com</a>
                    	</p>
                    	<div class="testimonial-single-image">
                    		<img src="assets/img/testimonials/2.jpg" alt="">
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Who's behind this -->
        <div class="whos-behind-container">
	        <div class="container">
	            <div class="row">
	                <div class="span12 whos-behind">
	                    <h3>Who's behind this</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
	                    	lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="span4 whos-behind-box-1">
	                	<div class="whos-behind-photo">
	                		<img src="assets/img/team/1.jpg" alt="">
	                		<div class="whos-behind-social">
	                			<a href=""><i class="fa fa-facebook"></i></a>
	                			<a href=""><i class="fa fa-twitter"></i></a>
	                			<a href=""><i class="fa fa-linkedin"></i></a>
	                			<a href=""><i class="fa fa-envelope"></i></a>
	                		</div>
	                	</div>
	                    <h4>John Doe</h4>
	                    <h5>Developer</h5>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et.
	                    </p>
	                </div>
	                <div class="span4 whos-behind-box-1">
	                	<div class="whos-behind-photo">
	                		<img src="assets/img/team/2.jpg" alt="">
	                		<div class="whos-behind-social">
	                			<a href=""><i class="fa fa-facebook"></i></a>
	                			<a href=""><i class="fa fa-twitter"></i></a>
	                			<a href=""><i class="fa fa-linkedin"></i></a>
	                			<a href=""><i class="fa fa-envelope"></i></a>
	                		</div>
	                	</div>
	                    <h4>Tim Brown</h4>
	                    <h5>Founder</h5>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et.
	                    </p>
	                </div>
	                <div class="span4 whos-behind-box-1">
	                	<div class="whos-behind-photo">
	                		<img src="assets/img/team/3.jpg" alt="">
	                		<div class="whos-behind-social">
	                			<a href=""><i class="fa fa-facebook"></i></a>
	                			<a href=""><i class="fa fa-twitter"></i></a>
	                			<a href=""><i class="fa fa-linkedin"></i></a>
	                			<a href=""><i class="fa fa-envelope"></i></a>
	                		</div>
	                	</div>
	                    <h4>Sarah Red</h4>
	                    <h5>Designer</h5>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et.
	                    </p>
	                </div>
	            </div>
	            <!-- Latest tweets -->
	            <div class="row">
	                <div class="span12 latest-tweets">
	                    <h4>Our Latest Tweets</h4>
	                    <p class="tweet-active"></p>
	                    <div class="tweets"></div>
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- How to contact us -->
        <div class="container">
            <div class="row">
                <div class="span12 contact">
                    <h3>How to contact us</h3>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="span7 contact-form">
                    <h4>Send us a message</h4>
                    <form method="post" action="assets/contact.php">
                        <input type="text" name="email" placeholder="Email..." class="contact-email">
                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                        <textarea name="message" placeholder="Message..."></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
                <div class="span5 contact-address">
                    <h4>Come visit us</h4>
                    <div class="map"></div>
                    <h4>Address</h4>
                    <p><i class="fa fa-map-marker"></i>1000 Olin Way, Needham, MA 02492</p>
                    <p><i class="fa fa-phone"></i>Phone: 1 (540) 209 5219</p>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <footer>
	        <div class="container">
	            <div class="row">
	                <div class="span7 footer-copyright">
	                </div>
	                <div class="span5 footer-social">
	                    <a class="ultm ultm-facebook ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                    <a class="ultm ultm-twitter ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                    <a class="ultm ultm-google-plus-1 ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                    <a class="ultm ultm-dribbble ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                    <a class="ultm ultm-pinterest ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                </div>
	            </div>
	        </div>
        </footer>
        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/twitter/jquery.tweet.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

