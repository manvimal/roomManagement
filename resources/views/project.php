<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Skokov Website Template | Project :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
<link href="css/elastislide.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
</script>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>		
</head>
<body>
   <div class="header">	
      <div class="wrap"> 
	         <div class="logo">
				<a href="index"><img src="images/logo.png" alt=""/></a>
			 </div>

			 <!-- login  -->
			 <?php

				if (empty($user)){
			 ?>
				<form name="login" action="/user/login" onsubmit="return validateLogin(this)">
					<table class="login">
							<tr>
							<td>User Name:</td> 
							<td><input type="text" name="LoginUserName" class="required" /><br /><span class="errorMsg"></span> </td>
						
							<td>Password:</td> 
							<td><input type="password" name="LoginPassword" class="required" /> <br /><span class="errorMsg"></span></td>
						
							<td></td>
							<td><input type="submit" value="Login" id = "btnLogin" class="btnLogin"/> </td> 
						</tr>
					</table>
				</form>
				<?php
					}
					else{
				?>
					<span class="userInfo">
						<a href="#">
							<?php
								echo  $user[0]->LastName;
							?>

						 </a>

						 <a href="/user/logoff">Log out</a>

					</span>
				<?php
					}
				?>
			 <div class="cssmenu">
				<ul>
					<li class="active"><a href="#">Home</a></li>
					<li><a href="portfolio.html">Portfolio</a></li> 
					<li><a href="blog.html">Blog</a></li> 
					<?php
						if (empty($user)){
			 		?>
						<li><a href="registration">Registration</a></li> 
					<?php
						}
			 		?>
					<li><a href="aboutus">About Us</a></li> 
					<li><a href="contactus">Contact</a></li>

					<?php 
						if ($user['type']==  'landlord'){
					?>
							<li><a href="addBuilding">Add building</a></li>
					<?php

						}
					?>

					


				</ul>
		     </div>
		    <div class="clear"></div>
	   </div>
   </div>
   <div class="banner">
      <div class="wrap">
      	  <h2>Project</h2><div class="clear"></div>
      </div>
    </div>
	<div class="main">	
	 <div class="project-wrapper">
	   <div class="project">
		 <div class="project-slider">
			<div id="rg-gallery" class="rg-gallery">
				<div class="rg-thumbs">
				<!-- Elastislide Carousel Thumbnail Viewer -->
				   <div class="es-carousel-wrapper">
					 <div class="es-nav">
						<span class="es-nav-prev">Previous</span>
						<span class="es-nav-next">Next</span>
					</div>
					<div class="es-carousel">
						<ul>
						    <li><a href="#"><img src="images/t-p1.jpg" data-large="images/p1.jpg" alt="image01"/></a></li>
							<li><a href="#"><img src="images/p2.jpg" data-large="images/p2.jpg" alt="image02"/></a></li>
							<li><a href="#"><img src="images/p3.jpg" data-large="images/p3.jpg" alt="image03"/></a></li>
							<li><a href="#"><img src="images/p4.jpg" data-large="images/p4.jpg" alt="image04"/></a></li>
							<li><a href="#"><img src="images/p5.jpg" data-large="images/p5.jpg" alt="image05"/></a></li>
							<li><a href="#"><img src="images/p6.jpg" data-large="images/p6.jpg" alt="image06"/></a></li>
							<li><a href="#"><img src="images/p7.jpg" data-large="images/p7.jpg" alt="image07"/></a></li>
							<li><a href="#"><img src="images/p8.jpg" data-large="images/p8.jpg" alt="image08"/></a></li>
							<li><a href="#"><img src="images/p9.jpg" data-large="images/p9.jpg" alt="image09"/></a></li>
							<li><a href="#"><img src="images/p10.jpg" data-large="images/p10.jpg" alt="image10"/></a></li>
							<li><a href="#"><img src="images/t-p1.jpg" data-large="images/p1.jpg" alt="image12"/></a></li>
							<li><a href="#"><img src="images/p2.jpg" data-large="images/p2.jpg" alt="image13"/></a></li>
							<li><a href="#"><img src="images/p3.jpg" data-large="images/p3.jpg" alt="image14"/></a></li>
							<li><a href="#"><img src="images/p4.jpg" data-large="images/p4.jpg" alt="image15"/></a></li>
							<li><a href="#"><img src="images/p5.jpg" data-large="images/p5.jpg" alt="image16"/></a></li>
							<li><a href="#"><img src="images/p6.jpg" data-large="images/p6.jpg" alt="image17"/></a></li>
							<li><a href="#"><img src="images/p7.jpg" data-large="images/p7.jpg" alt="image18"/></a></li>
							<li><a href="#"><img src="images/p8.jpg" data-large="images/p8.jpg" alt="image19"/></a></li>
							<li><a href="#"><img src="images/p9.jpg" data-large="images/p9.jpg" alt="image20"/></a></li>
							<li><a href="#"><img src="images/p10.jpg" data-large="images/p10.jpg" alt="image21"/></a></li>
						</ul>
					</div>
				   </div>
				<!-- End Elastislide Carousel Thumbnail Viewer -->
			  </div><!-- rg-thumbs -->
		    </div><!-- rg-gallery -->
		  </div>
		  <div class="project-bottom">
	         <div class="proj-desc">
		 	  	<h4>Project Description</h4> <div class="clear"></div>
		 	  	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
		     </div>
		     <div class="related-desc">
		     	 <h4>Recent Projects</h4><div class="clear"></div>
		     </div>
		     <div class="gallery">
		     		<ul>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/pic12.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/pic19.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/pic14.jpg" alt=""/></a></li>
							 <div id="small-dialog1" class="mfp-hide">
								<div class="pop_up">
								 	<h2>recent projects</h2>
									<img src="images/pic12.jpg" alt=""/>
					  			</div>
							</div>
						</ul>
		     </div>
		 </div>
	 </div>
	 <div class="project-sidebar">
	     <div class="project-list">
	     	<h4>Project Details</h4> 
			<ul>
				<li><img src="images/arrow.png" alt=""><p><a href="#">Lorem ipsum dolor sit consectetuer</a></p><div class="clear"></div></li>
				<li><img src="images/arrow.png" alt=""><p><a href="#">Lorem ipsum dolor sit consectetuer</a></p><div class="clear"></div></li>
				<li><img src="images/arrow.png" alt=""><p><a href="#">Lorem ipsum dolor sit consectetuer</a></p><div class="clear"></div></li>
				<li><img src="images/arrow.png" alt=""><p><a href="#">Lorem ipsum dolor sit consectetuer</a></p><div class="clear"></div></li>
				<li><img src="images/arrow.png" alt=""><p><a href="#">Lorem ipsum dolor sit consectetuer</a></p><div class="clear"></div></li>
		   </ul>
		 </div>
		 <div class="project-list1">
	     	<h4>Popular Posts</h4>
			<ul>
				<li><img src="images/list-img.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
				<li><img src="images/list-img1.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
				<li><img src="images/list-img2.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
				<li><img src="images/list-img4.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
				<li><img src="images/list-img5.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
			</ul>
		 </div>
		  <div class="project-list2">
	     	<h4>Tags</h4>
			<ul>
				<li><a href="#">Web Design</a></li>
				<li><a href="#">Html5</a></li>
				<li><a href="#">Wordpress</a></li>
				<li><a href="#">Logo</a></li>
				<li><a href="#">Web Design</a></li>
				<li><a href="#">Web Design</a></li>
				<li><a href="#">Wordpress</a></li>
				<div class="clear"></div>
			</ul>
		 </div>
	 </div>
	 <div class="clear"></div>
  </div>
 </div>
  <div class="footer">
	<div class="footer-top">
	   <div class="wrap">
		   <div class="section group">
				<div class="col_1_of_3 span_1_of_3">
					<h3>About Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<button class="btn1 btn-8 btn-8b">Learn more</button>
					<h4>Photo Stream</h4>
					<div class="gallery">
						<ul>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/g1.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/g2.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/g3.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/g4.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/g5.jpg" alt=""/></a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/g6.jpg" alt=""/></a></li>
							 <div id="small-dialog1" class="mfp-hide">
								<div class="pop_up">
								 	<h2>A Sample Photo Stream</h2>
									<img src="images/g_zoom.jpg" alt=""/>
					  			</div>
							</div>

						</ul>
					</div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<h3>Latest tweets</h3>
					<div class="footer-list">
						<ul>
							<li><img src="images/tw.png" alt=""/><p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit, seddia<br><span class="small">&nbsp;web design</span></p><div class="clear"></div></li>
							<li><img src="images/tw.png" alt=""/><p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit, seddia<br><span class="small">&nbsp;web design</span></p><div class="clear"></div></li>
							<li><img src="images/tw.png" alt=""/><p>Lorem ipsum dolor sit amet, <span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit, sed diam nonummy nibh<br><span class="small">&nbsp;web design</span></p><div class="clear"></div></li>
							<li><img src="images/tw.png" alt=""/><p>Lorem ipsum dolor sit amet, <span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit, sed diam nonummy nibh<br><span class="small">&nbsp;web design</span></p><div class="clear"></div></li>
							<li><img src="images/tw.png" alt=""/><p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit, seddia<br><span class="small">&nbsp;web design</span></p><div class="clear"></div></li>
						</ul>
					</div>
					 <div class="social-icons">	
					 	<h4>Social Connecting</h4>
						    <ul>	
							  <li class="facebook"><a href="#"><span> </span></a></li>
					          <li class="google"><a href="#"><span> </span></a></li>
					          <li class="twitter"><a href="#"><span> </span></a></li>
					          <li class="linkedin"><a href="#"><span> </span></a></li>	 
					          <li class="youtube"><a href="#"><span> </span></a></li>	
					          <li class="bloger"><a href="#"><span> </span></a></li>
					          <li class="rss"><a href="#"><span> </span></a></li>	
					          <li class="dribble"><a href="#"><span> </span></a></li>		        	
					        </ul>
				     </div>
			    </div>
				<div class="col_1_of_3 span_1_of_3">
					<h3>Contact info</h3>
					<div class="footer-list">
						<ul>
							<li><img src="images/address.png" alt=""/><p>Lorem ipsum dolor sit amet,consectetuer adipiscing elit, sed diam nonummy nibh<br>&nbsp;web design</p><div class="clear"></div></li>
							<li><img src="images/phone.png" alt=""/><p>Phone: +1 800 258 2689<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+1 800 258 2689 </p><div class="clear"></div></li>
							<li><img src="images/msg.png" alt=""/><p>Email: <span class="yellow"><a href="#">info(at)skokov.com</a></span></p><div class="clear"></div></li>
					   </ul>
					</div>
					<div class="follow">
					   <h4>Follow Us</h4>
					   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
					   <div class="search">
						  <form>
							   <input type="text" value="">
							   <input type="submit" value="">
						  </form>
					   </div>
				    </div>
				</div>
				<div class="clear"></div>
			</div>
	  </div>
	 </div>
     <div class="footer-bottom">
	 	<div class="wrap">
		 	<div class="copy">
			     <p class="copy">© 2013 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		    </div>
		 	<div class="footer-nav">
		 		<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="portfolio.html">Portfolio</a></li> 
					<li><a href="blog.html">Blog</a></li> 
					<li><a href="about.html">About Us</a></li> 
					<li><a href="contact.html">Contact</a></li>
				</ul>
		 	</div>
		 	<div class="clear"></div>
	    </div>
	</div>
</div>
</body>	
</html>    		
             		
      	   		                                                                                            