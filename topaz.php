<?
include("admin/common/config.php");
if($_GET[page]=="")
{
$page=1;
}
else
{
$page=$_GET[page];
}

if($_POST[Reserve]=="Reserve")
{
$Arrival=$_POST[arrivaldate_datepicker];
$Departure=$_POST[departuredate_datepicker];

header("Location: reserve.php?Room=$_POST[RoomType]&Arrival=$Arrival&Departure=$Departure&Unit=$_POST[units]&Adult=$_POST[adults]&Children=$_POST[children]&Nights=$_POST[nights]");


}
if($_POST[download]=="Download Our Menu card")
{
header("Location: download_topaz.php");
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
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Welcome to Hotel Alankar Grande - Restaurants - Topaz</title>
    
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
					slide_interval: 3000,
					transition: 'fade',
					transition_speed: 800,
					new_window: 0,
					horizontal_center: 1,
					progress_bar: 0,
					mouse_scrub: 0,
															   
					slides: [
										
																																	{image: 'files/topaz/topaz1.jpg', title : ''},								
										
																																	{image: 'files/topaz/topaz2.jpg', title : ''},								
										
																																	{image: 'files/topaz/topaz3.jpg', title : ''},								
										
																																	{image: 'files/topaz/topaz4.jpg', title : ''},								
								
										
																																	{image: 'files/topaz/topaz5.jpg', title : ''}								
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
	    <style>
		#searchboxleft{
		background-color:#b79d69;
		}
		</style>
</head>


<body class="home page page-id-5 page-template page-template-page-home-php">
<!--===============================================================header begins===============================================================-->
    <? include("header.php"); ?><!-- header -->
	            <nav class="navigation left">
                <div class="navigation-container">
				
                	<div class="menu-primary-navigation-container">
<ul id="menu-primary-navigation" class="menu">
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-5 current_page_item menu-item-264"><a href="index.php">Home</a></li>
<li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-242"><a href="about.php">About Us</a>
</li>
<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-250"><a href="restaurant.php">Restaurants</a>
<ul class="sub-menu">
	<li id="menu-item-245" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-245"><a href="gossip.php">Gossip</a></li>
	<li id="menu-item-244" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-244"><a href="topaz.php">Topaz</a></li>
	<li id="menu-item-246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246"><a href="southeast.php">South East</a></li>
	<li id="menu-item-243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a href="tiffinys.php">Tiffinys</a></li>
</ul>
</li>
<!--<li id="menu-item-249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="accomodation.php">Accomodation</a></li>-->
<li id="menu-item-248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="facilities.php">Facilities</a></li>
<li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="rooms.php">Rooms & Accomodation</a>
</li>
<!--<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="#testimonial.php">Testimonials</a>-->
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
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-242"><a href="about.php">About Us</a>

</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-250"><a href="restaurant.php">Restaurants</a>

<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-245"><a href="gossip.php">Gossip</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-244"><a href="topaz.php">Topaz</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-246"><a href="southeast.php">South East</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a href="tiffinys.php">Tiffinys</a></li>
</ul>

</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="accomodation.php">Accomodation</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-247"><a href="facilities.php">Facilities</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="rooms.php">Rooms</a>

</li>
<!--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="#testimonial.php">Testimonials</a></li>-->
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
            <h1>Welcome to Hotel Alankar Grande - Restaurant - Topaz</h1>
        </header><!-- page-header -->
        		
		<div class="content shadow-top left">
            <div class="content-container">
				            
                <div class="page-left left">

                    <? include("navigation.php") ?><!-- rail-left -->
                    
                    <div class="rail-content left">
                        <div class="rail-content-container">
    
                            																		<div class="content-page left">
										<div class="content-page-container">
										<form action="" method="post">
										<table width="100%" border="0" cellspacing="5" cellpadding="5" class="reservefootbox">
  
  <tr>
	<td width="80%" style="color:#fff"><? echo $_SESSION['jif']; ?></td>
    
    <td width="20%" ><input type="submit" name="download" id="download" value="Download Our Menu card" class="button"><!--<a href="download_gossip.php" Class="button">Download Our Menu card </a>--></td>
  </tr>
</table>
</form><br/> <br />
										<iframe src="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.oxygencreations.com%2Falankar1%2Fpdf%2Ftopaz.pdf&embedded=true" width="600" height="780" style="border: none;"></iframe>
                                        <?php /*?>
                                        <?  $next=$page+1;
                                        	$prev=$page-1;
										?>
                                        <p align="center" style="font-size:14px; font-weight:bold;">
                                        <? if($page!=1)
										{ ?>
                                        <a href="topaz.php?page=<?=$prev?>">Prev</a>&nbsp;&nbsp;
                                        <? } ?>
                                        <? if($page!=4) { ?>
                                        &nbsp;&nbsp;<a href="topaz.php?page=<?=$next?>">Next</a>
                                        <? } ?>
                                        </p>    
                                         
                                       
                                       <? if($page==1) { ?>  
                                       <img src="images/Topaz1.png" width="700" > 
                                       <? } ?>
                                       <? if($page==2) { ?>
                                       <img src="images/Topaz2.png" width="700" >
                                       <? } ?>
                                       <? if($page==3) { ?> 
                                       <img src="images/Topaz3.png" width="700" > 
                                       <? } ?>
                                       <? if($page==4) { ?>
                                       <img src="images/Topaz4.png" width="700" > 
                                       <? } ?>
                                       
                                        
                                         
                                         
                                         <p align="center" style="font-size:14px; font-weight:bold;">
                                        <? if($page!=1)
										{ ?>
                                        <a href="topaz.php?page=<?=$prev?>">Prev</a>&nbsp;&nbsp;
                                        <? } ?>
                                        <? if($page!=4) { ?>
                                        &nbsp;&nbsp;<a href="topaz.php?page=<?=$next?>">Next</a>
                                        <? } ?>
                                        </p>
                                        <?php */?> 
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