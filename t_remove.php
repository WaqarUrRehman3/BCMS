<?php
	require_once("dbconn.php");

?>
<?php
	$query = "SELECT * FROM transactions";
	$result = mysqli_query($conn,$query);
	if(!$result){
		die("Database query failed");
		}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Remove Transaction | Bank Customer Care System :: weboffy</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="js/jquery.min.js"></script>
	 	<!---strat-slider---->
	    <link rel="stylesheet" type="text/css" href="css/slider.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
		<!---//strat-slider---->
		 <!-- scroll -->
		 <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <!-- //scroll -->	
			<!-- start portfolios -->
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/fliplightbox.min.js"></script>
		<script type="text/javascript">
			$('body').flipLightBox()
		</script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -40
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
	<!-- popup -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup1.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="shortcut icon" type="image/png" href="favicon.ico">
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen" />
  <script type="text/javascript">
    $(function() {
        $('#portfoliolist a').lightBox();
    });
   </script>
 <!-- nav -->  
<script type="text/javascript" 	src="js/jquery.smint.js"></script>
<script type="text/javascript">
$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });
});
</script>
<script>
window.addEventListener("load",function() {
  setTimeout(function(){
    window.scrollTo(0, 1);
  }, 0);
});</script>
</head>
<body>
		<!-- start slider -->

 	
 	<!-- start header -->
 	<div class="header">
 		<div class="logo">
 			<a  href="#s7" class="scroll"><img src="images/logo.png"></a>
 		</div>
		<!-- start top-nav-->
		<div class="h_right">	
		<div class="subMenu" >
			<div class="wrap">
		 	 <div class="inner">
		 	 	<p class="login">Logged in as  <a href="#"> ADMIN</a></p>
		 	 	<br>
		 	 	<p class="login"><img src="logout.png"><a href="#"> LOGOUT</a></p>
		 	 	<a href="home.php"><img src="logo.png" ></a>
		 	 	<div class="name">
		 	 	<h2>Bank Customer Care System</h2></div>
		 	 	
		 		
			  </div>
			   <!-- /.navbar-collapse -->		
	    </div>	
	   </div>
			<!-- start smart_nav * -->
		 	
	        <script type="text/javascript" src="js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	  </div>
<!---//End-header--->
<div class="navv">
		 	 	<ul>
		 	 		<li><a href="customer.php"><IMG SRC="customer.png" width="50" height"50"><br>CUSTOMERS</a></li>
		 	 	<li><a href="account.php"><IMG SRC="account.png" width="50" height"50"><br>ACCOUNTS</a></li>
		 	 <li><a href="scheme.php"><IMG SRC="scheme.png" width="50" height"50"><br>SCHEME</a></li>
		 	 <li><a href="transaction.php"><IMG SRC="transaction.png" width="50" height"50"><br>TRANSACTIONS</a></li>
		 	 <li><a href="introducer.php"><IMG SRC="introducer.png" width="50" height"50"><br>INTRODUCERS</a></li></ul>
		 	 	</div>	
<!--- services --->	
     <div class="services sTop" id="services">
		  	<div class="wrap">
		  		<p>Please delete records from below</p>
		  		<table>
		  			
		  			<tr>
					<th>Transaction Id</th>
		  				<th>Account Number</th>
		  				
		  				<th>Action</th>
		  			</tr>
		  			<?php
		  			while($row = mysqli_fetch_assoc($result))
		{
			?>
					<tr>
		  				
		  				<td><?php echo $row["dbtID"]?></td>
		  				<td><?php echo $row["dbtAccNum"]?></td>
		  				
		  				
		  				
		  				<td><A target="_blank" HREF="form_processing_Transaction_delete.php?transaction_id=<?php echo $row["tID"] ?>">DELETE</A></td>
		  			</tr>
		  		
		  		
		  	<?php
		  		}
			?>
		  		
		  		
		  		</table>
		  		
				
				 <div class="clear"></div>
   		   </div>
   		 </div>
   		 <div class="logos"> 
		   		 	<div class="wrap"> 
			   		 	
		   		 	</div>
		   		 </div>
  <!----start-team-members---->
				<div class="team-members s2" id="about">
					<div class="wrap"> 
						<div class="tm-head">
							<h3>ABOUT US</h3>
							<p>dedicated team is the best resource for each other</p>
						</div>
						<div class="tm-head-grids">
							<div class="tm-head-grid">
								<img src="images/team-member1.jpg" alt="" />
								<h4>ARSALAN GUL</h4>
								<h5>Front End Designer</h5>
								<ul class="top-social-icons">
									<li><a class="twitter simptip-position-bottom simptip-movable" data-tooltip="twitter" href="#"> </a></li>
									<li><a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li><a class="pin simptip-position-bottom simptip-movable" data-tooltip="pintrest" href="#"> </a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="tm-head-grid">
								<img src="images/team-member2.jpg" alt="" />
								<h4>Hamza Bin Zia</h4>
								<h5>PHP Developer</h5>
								<ul class="top-social-icons">
									<li><a class="twitter simptip-position-bottom simptip-movable" data-tooltip="twitter" href="#"> </a></li>
									<li><a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li><a class="pin simptip-position-bottom simptip-movable" data-tooltip="pintrest" href="#"> </a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="tm-head-grid">
								<img src="images/team-member3.jpg" alt="" />
								<h4>Waqar Hashmi</h4>
								<h5>Database Designer</h5>
								<ul class="top-social-icons">
									<li><a class="twitter simptip-position-bottom simptip-movable" data-tooltip="twitter" href="#"> </a></li>
									<li><a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li><a class="pin simptip-position-bottom simptip-movable" data-tooltip="pintrest" href="#"> </a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!----//End-team-members----> 
<!----start-team-members---->
				
				<!----//End-clients----> 
				  
				<!-----logos---->	
		   		 <div class="logos"> 
		   		 	<div class="wrap"> 
			   		 	
		   		 	</div>
		   		 </div>
		   		 <!-----cntact---->	
   		 		
		   		 <div class="map">
					<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
			     </div>
		   		  
   		        <!----start-bottom-footer---->
				<div class="bottom-footer">
					<div class="wrap"> 
						<div class="bottom-footer-center">
							<ul class="bottom-social-icons">
								<li><a class="bottom-twitter" href="#"> </a></li>
								<li><a class="bottom-facebook" href="#"> </a></li>
								<li><a class="bottom-pin" href="#"> </a></li>
								<li><a class="bottom-google" href="#"> </a></li>
								<div class="clear"> </div>
							</ul>
						</div>	
						<div class="bottom-footer-left">
							<p><span>&#169; Copyright 2015 Weboffy</span> Designed by <a href="http://weboffy.com/">Weboffy</a></p>
						</div>		  
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-bottom-footer---->
 <!-- scroll_top_btn -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>