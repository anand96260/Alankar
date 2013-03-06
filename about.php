<?
include("admin/common/config.php");
if($_POST[Reserve]=="Reserve")
{
$Arrival=$_POST[arrivaldate_datepicker];
$Departure=$_POST[departuredate_datepicker];

header("Location: reserve.php?Room=$_POST[RoomType]&Arrival=$Arrival&Departure=$Departure&Unit=$_POST[units]&Adult=$_POST[adults]&Children=$_POST[children]&Nights=$_POST[nights]");
}
?>
<!doctype html>  
<!--[if lt IE 7 ]> <html dir="ltr" lang="cs-CZ" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="cs-CZ" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="cs-CZ" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html dir="ltr" lang="cs-CZ" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" dir="ltr" lang="cs-CZ"> <!--<![endif]-->


    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="feed/rss/index.html" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="feed/atom/index.html" />
    <link rel="pingback" href="xmlrpc.php" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Welcome to Hotel Alankar Grande - About Us</title>
    
<link rel='stylesheet' id='gp_components-css'  href='css/componentse735.css?ver=3.4' type='text/css' media='all' />
<link rel='stylesheet' id='gp_responsive-css'  href='css/responsivee735.css?ver=3.4' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery/jqueryba3a.js?ver=1.7.2'></script>
<script type='text/javascript' src='js/supersizede735.js?ver=3.4'></script>
<script type='text/javascript' src='js/supersized.shuttere735.js?ver=3.4'></script>
<script type='text/javascript' src='js/easinge735.js?ver=3.4'></script>
<script type='text/javascript' src='js/stickye735.js?ver=3.4'></script>
<script type='text/javascript' src='js/datepickere735.js?ver=3.4'></script>
<script type='text/javascript' src='js/tweete735.js?ver=3.4'></script>
<script type='text/javascript' src='js/prettyphotoe735.js?ver=3.4'></script>
<script type='text/javascript' src='js/forme735.js?ver=3.4'></script>
<script type='text/javascript' src='js/validatee735.js?ver=3.4'></script>
<script type='text/javascript' src='js/custome735.js?ver=3.4'></script>
<script type='text/javascript' src='js/comment-replye735.js?ver=3.4'></script>


<link rel="stylesheet" type="text/css" href="stylesheet/horizontal.css" />
<script language="javascript" type="text/javascript" src="script/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="script/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="script/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible:5,
						elemsSlide:3,
						duration:300,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 158,
						showControls:1,
						startIndex:5,
						onChange: function(index){
							
						}
			
			});
		}
	});
</script>


<link rel='canonical' href='index.php' />
	<link rel="shortcut icon" href="favicon.ico" />
	
    
			<script type="text/javascript">
		jQuery(function() {
				jQuery("#arrivaldate_datepicker").datepicker({ 
					firstDay: 1,
					dateFormat: "dd-mm-yy",
					dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
					dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
					monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					nextText: 'Next',
					prevText: 'Prev'
				});
			});
			jQuery(function() {
				jQuery("#departuredate_datepicker").datepicker({ 
					firstDay: 1,
					dateFormat: "dd-mm-yy",
					dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
					dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
					monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					nextText: 'Next',
					prevText: 'Prev'
				});
			});
			jQuery(function($){
				
				jQuery.supersized({				
					slide_interval: 8000,
					transition: 'fade',
					transition_speed: 800,
					new_window: 0,
					horizontal_center: 1,
					progress_bar: 0,
					mouse_scrub: 0,
															   
					slides: [
										
																																	{image: 'files/slider/001.jpg', title : ''},								
										
																																	{image: 'files/slider/002.jpg', title : ''},								
										
																																	{image: 'files/slider/003.jpg', title : ''},								
										
																																	{image: 'files/slider/004.jpg', title : ''},								

										
																																	{image: 'files/slider/005.jpg', title : ''},								
										
																																	{image: 'files/slider/006.jpg', title : ''},								
										
																																	{image: 'files/slider/007.jpg', title : ''},								
										
																																	{image: 'files/slider/008.jpg', title : ''}								
										]

				});
		    });
			
		</script>
			<script type="text/javascript">
		// Preloading Images
		//<![CDATA[
			jQuery(function () {
				jQuery('.image img').css("display","none");
			});
			var i = 0;
			var int=0;
			jQuery(window).bind("load", function() {
				var int = setInterval("loadImage(i)",100);
			});
			function loadImage() {
				var imgs = jQuery('.image img').length;
				if (i >= imgs) {
					clearInterval(int);
				}
				jQuery('.image img:hidden').eq(0).fadeIn(200);
				i++;
			}
		//]]>
		</script>
			<script type="text/javascript">
		//<![CDATA[
			jQuery(document).ready(function(){
				jQuery('.content img').each(function(){
					jQuery(this).removeAttr('width')
					jQuery(this).removeAttr('height');
				});
			});
		//]]>
		</script>
	    
</head>


<body class="home page page-id-5 page-template page-template-page-home-php">
<!--===============================================================header begins===============================================================-->
    <? include("header.php"); ?><!-- header -->
	            <nav class="navigation left">
                <div class="navigation-container">
				
                	<div class="menu-primary-navigation-container">
<ul id="menu-primary-navigation" class="menu">
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-5 current_page_item menu-item-264"><a href="index.php">Home</a></li>
<li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current-menu-ancestor current_page_ancestor menu-item-242"><a href="about.php">About Us</a>
</li>
<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-250"><a href="restaurant.php">Restaurants</a>
<ul class="sub-menu">
	<li id="menu-item-245" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-245"><a href="gossip.php">Gossip</a></li>
	<li id="menu-item-244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244"><a href="topaz.php">Topaz</a></li>
	<li id="menu-item-246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246"><a href="southeast.php">South East</a></li>
	<li id="menu-item-243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a href="tiffinys.php">Tiffinys</a></li>
</ul>
</li>
<!--<li id="menu-item-249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="accomodation.php">Accomodation</a></li>-->
<li id="menu-item-248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="facilities.php">Facilities</a></li>
<li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="rooms.php">Rooms & Accomodation</a>
</li>
<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="gallery.php">Gallery</a></li>
<li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-247"><a href="contact.php">Contact us</a></li>
</ul></div> 

               
                <br class="clear" />
                </div><!-- navigation-container -->
            </nav><!-- navigation -->
            
            <nav class="navigation-mobile left">
                <div class="navigation-mobile-container">
					<ul>
                		<li class="select"><a href="#" onClick="return false;"> Menu </a>
							<div class="menu-primary-navigation-container"><ul id="menu-primary-navigation-1" class="menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-5 current_page_item menu-item-264"><a href="index.php">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current-menu-ancestor current_page_ancestor menu-item-242"><a href="about.php">About Us</a>

</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-250"><a href="restaurant.php">Restaurants</a>

<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-245"><a href="gossip.php">Gossip</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244"><a href="topaz.php">Topaz</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-246"><a href="southeast.php">South East</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a href="tiffinys.php">Tiffinys</a></li>
</ul>

</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="accomodation.php">Accomodation</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-247"><a href="facilities.php">Facilities</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="rooms.php">Rooms</a>

</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="gallery.php">Gallery</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="contact.php">Contact Us</a>

</li>
</ul></div>						</li>
               	  </ul>
                <br class="clear" />
                </div><!-- navigation-container -->
            </nav><!-- navigation -->
                
        <br class="clear" />
        </div><!-- header-container -->
    </header>
 <!--===============================================================header ends===============================================================-->   
     <div class="canvas">		
        <header class="page-header">
            <h1>Welcome to Hotel Alankar Grande - About Us</h1>
        </header><!-- page-header -->
        		
		<div class="content shadow-top left">
            <div class="content-container">
				            
                <div class="page-left left">

                    <? include("navigation.php") ?><!-- rail-left -->
                    
                    <div class="rail-content left">
                        <div class="rail-content-container">
    
                            																		<div class="content-page left">
										<div class="content-page-container">
										<?php 
										$abt_sql=mysql_fetch_array(mysql_query("select * from gt_content where ID=2"));
										?>
                                        <h1>About Hotel Alankar Grande</h1>
										<?php echo $abt_sql['Content'];?>
											<?php /*?><p>Hotel Alankar grande is the perfect place for the person in search of a luxurious hotel in Coimbatore with 3 star facilities. Set right in the Gandhipuram area which is the heart of the cosmopolitan city of Coimbatore, just 2 km from the railway station and 10 km from the airport, Hotel Alankar Grande is one of the best hotels in Coimbatore.</p> 
                                            
                                            <p>With our array of standard, deluxe and Suite rooms, Hotel Alankar grande has the accommodations that will satisfy every requirement. Or, if you are looking for that extra touch of luxury, look no further than our Grand Suites.  </p>
                                            <p>All our rooms come with a long list of facilities that are bound to make your stay with us a memorable one. </p>
                                            
                                         
                                       <img src="images/otherlogo.png" ><?php */?>  
                                         
                                         
                                         
                                         
										</div><!-- content-page-container -->
									</div><!-- content-page -->
																
							                            
						<br class="clear" />
                        </div><!-- rail-content-container -->
                    </div><!-- rail-content -->
                    
                </div><!-- page-left -->
                
			<br class="clear" />
            </div><!-- content-container -->
        </div><!-- content -->


    <br class="clear" />
    </div><!-- canvas -->
    
    <!-- footer-areas --><!-- canvas -->
    
   
    
    <? include("footer.php"); ?><!-- footer -->
   <script type='text/javascript' src='js/jquery/ui/jquery.ui.core.mine8d2.js?ver=1.8.20'></script>

</body>

</html>