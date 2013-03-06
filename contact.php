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
    <title>Welcome to Hotel Alankar Grande - Contact Us</title>
    
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
	    <style>
	.button{
	padding:2px 5px 1px 5px;
	background-image:url("images/bg-button.png");
	background-repeat:repeat-x;
	background-color:#2d1912;
	color:#fff;
	border-radius:5px;
	}
	.button:hover {
    border: 1px solid #fff;
	background-color:#60492b;
    cursor:pointer;
}
		</style>
		<script type="text/javascript">
        //<![CDATA[
			jQuery(document).ready(function() {
				var options = {
					beforeSubmit: function(){
						jQuery('#form-contact-quick .loading').removeClass('no-display');
					},
					success: function() {
						jQuery('#form-contact-quick .loading').addClass('no-display');
						jQuery('#form-contact-quick .validation-success-quick').fadeIn(500).delay(5000).fadeOut(500);
					},
					resetForm: true
				};
				jQuery("#form-contact-quick").validate({
					onkeyup: false,
					onblur: false,
					onclick: false,
					ignoreTitle: true,
					rules: {
						contact_quick_name: 'contact_quick_name',
						contact_quick_email: 'contact_quick_email',
						contact_quick_message: 'contact_quick_message'
						
					},
					messages: {
						contact_quick_name: 'Please fill your name!',
						contact_quick_email: 'Please fill your email address!',
						contact_quick_message: 'Please fill the message!'
						
					},
					submitHandler: function(form) {
						jQuery(form).ajaxSubmit(options);
					}
				});
				jQuery.validator.addMethod('contact_quick_name', function(value) { return value != 'Name'; });
				jQuery.validator.addMethod('contact_quick_email', function(value) { return value != 'Email'; });
				jQuery.validator.addMethod('contact_quick_message', function(value) { return value != 'Message'; });
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
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-5 current_page_item menu-item-264"><a href="index.php">Home</a></li>
<li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-242"><a href="about.php">About Us</a>
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
<li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-247"><a href="contact.php">Contact us</a></li>
</ul></div> 

               
                <br class="clear" />
                </div><!-- navigation-container -->
            </nav><!-- navigation -->
            
            <nav class="navigation-mobile left">
                <div class="navigation-mobile-container">
					<ul>
                		<li class="select"><a href="#" onClick="return false;"> Menu </a>
							<div class="menu-primary-navigation-container"><ul id="menu-primary-navigation-1" class="menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-5 current_page_item menu-item-264"><a href="index.php">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-242"><a href="about.php">About Us</a>

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
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-251"><a href="contact.php">Contact Us</a>

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
            <h1>Welcome to Hotel Alankar Grande - Contact Us</h1>
        </header><!-- page-header -->
        		
		<div class="content shadow-top left">
            <div class="content-container">
                
                <div class="page-full left">
                	<div class="page-full-container">
    
						                                                                <div class="content-page left">
                                    <div class="content-page-container">
                                        <p><iframe width="425" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Hotel+Alankar+Grande&amp;aq=&amp;sll=11.016373,76.96234&amp;sspn=0.012174,0.019548&amp;ie=UTF8&amp;hq=Hotel+Alankar+Grande&amp;hnear=&amp;radius=15000&amp;t=m&amp;ll=11.029663,76.966953&amp;spn=0.075821,0.072956&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe></p>
                                    </div><!-- content-page-container -->
                                </div><!-- content-page -->
                                                        
                                <div class="form-contact">
                                 <form action="#" id="form-contact-quick" class="form form-widget" method="post" style="padding-left:7px">
				
				<fieldset>
					 <header class="form-header">
                                                <h2 align="left">Contact form</h2>
                                            </header><!-- form-header -->
					<div class="form-block left">
                        
                        <div class="input-box-quick left">
                            <input name="contact_quick_name" id="contact_quick_name" title="Please fill your name!" class="required" type="text" value="Name" style="padding:0px;" />
                        </div>
                        
                        <div class="input-box-quick left">
                            <input name="contact_quick_phone" id="contact_quick_phone" title="Please fill your phone number!" type="text" value="Phone" style="padding:0px;"/>
                        </div>

                        
                        <div class="input-box-quick left">
                            <input name="contact_quick_email" id="contact_quick_email" title="Please fill your email address!" class="required email" type="text" value="Email" style="padding:0px;"/>
                        </div>
                        
                        <div class="input-box-quick left">
                            <textarea name="contact_quick_message" id="contact_quick_message" class="required" cols="110" rows="5" title="Please fill the message!" style="padding:0px;width:232px">Message</textarea>
                        </div><!-- input-box-wide -->
                        
                    </div>

                    <div class="buttons left">
                        <button type="submit" name="button-submit" class="button" title="Send email" >Send email</button>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                        <div class="loading no-display"><img src="../wp-content/themes/linguini1.5/images/loading.gif" alt="" /></div>
                    <br class="clear" />
                    </div>
                    
                    <div class="validation-success-quick validation-success no-display">
                        <h4>Thank you. Email has been sent. We will contact you as soon as possible.</h4>
                    </div>
                    
                                    
                </fieldset>
                
			<br class="clear" />	
			</form>

								 <? /*?>
                                    <form action="" id="form-contact" class="form" method="post">
                                        
                                        <fieldset>
                                        
                                            <header class="form-header">
                                                <h2>Contact form</h2>
                                            </header><!-- form-header -->
                                                
                                            <div class="form-block first left">
                                        <div class="required-star-info">* Required fields</div>
                                                <div class="input-box left">
                                                    <label for="contact_name">Address:</label> <span class="required-star">*</span><br />
                                                    <textarea name="contact_address" id="contact_address" class="required" cols="110" rows="3" title="Please fill the address!" style="width:90%;"></textarea>
                                                                                                    </div><!-- input-box -->
                                                
                                                <div class="input-box left">
                                                    <label for="contact_phone">Phone:</label><br />
                                                    <input name="contact_phone" id="contact_phone" title="Please fill your phone number!" type="text" />
                                                </div><!-- input-box -->
                                                
                                                <div class="input-box last left">
                                                    <label for="contact_email">Email:</label> <span class="required-star">*</span><br />
                                                    <input name="contact_email" id="contact_email" title="Please fill your email address!" class="required email" type="text" value="" />
                                                                                                    </div><!-- input-box -->
                                            
                                                <!--<div class="input-box-wide left">
                                                    <label for="contact_message">Message:</label> <span class="required-star">*</span><br />
                                                    <textarea name="contact_message" id="contact_message" class="required" cols="110" rows="5" title="Please fill the message!"></textarea>
                                                                                                    </div>--><!-- input-box-wide -->
                                                
                                            <br class="clear" />
                                            </div><!-- form-block -->
        
                                            <div class="buttons left">	
                                                <button type="submit" name="button-submit" class="button-standard left" title="Send email">Send email</button>
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                                <div class="loading no-display"><img src="../wp-content/themes/linguini1.5/images/loading.gif" alt="" /><span>Sending email ...</span></div>
                                            <br class="clear" />
                                            </div><!-- buttons -->
                                            
                                            <div class="validation-success no-display">
                                                <h4>Thank you. Email has been sent. We will contact you as soon as possible.</h4>
                                            </div><!-- validation-success -->
                                            
                                            
                                        </fieldset>
                                        
                                    <br class="clear" />
                                    </form> <? */?>
                                    
                                </div><!-- form-contact -->
                                <script type="text/javascript">
		// Name
		jQuery('input[name=contact_quick_name]').focus(function(){ if (jQuery(this).val() == 'Name') jQuery(this).val(''); });
		jQuery('input[name=contact_quick_name]').blur(function(){ if (jQuery(this).val() == '') jQuery(this).val('Name'); });
		// Phone
		jQuery('input[name=contact_quick_phone]').focus(function(){ if (jQuery(this).val() == 'Phone') jQuery(this).val(''); });
		jQuery('input[name=contact_quick_phone]').blur(function(){ if (jQuery(this).val() == '') jQuery(this).val('Phone'); });
		// Email
		jQuery('input[name=contact_quick_email]').focus(function(){ if (jQuery(this).val() == 'Email') jQuery(this).val(''); });
		jQuery('input[name=contact_quick_email]').blur(function(){ if (jQuery(this).val() == '') jQuery(this).val('Email'); });
		// Message
		jQuery('textarea[name=contact_quick_message]').focus(function(){ if (jQuery(this).val() == 'Message') jQuery(this).val(''); });
		jQuery('textarea[name=contact_quick_message]').blur(function(){ if (jQuery(this).val() == '') jQuery(this).val('Message'); });
	</script>
                            					
                    <br class="clear" />
                    </div><!-- page-full-container -->
                </div><!-- page-full -->
                
            <br class="clear" />
            </div><!-- content-container -->
        </div><!-- content --><!-- content -->


    <br class="clear" />
    </div><!-- canvas -->
    
    <!-- footer-areas --><!-- canvas -->
    
   
    
    <? include("footer.php"); ?><!-- footer -->

  <script type='text/javascript' src='js/jquery/ui/jquery.ui.core.mine8d2.js?ver=1.8.20'></script>

</body>

</html>