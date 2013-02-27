<?
include("admin/common/config.php");
if(!$_GET['edit_id'] and !$_GET['view_id'] and !$_GET['cancel_id'] and !$_POST['edt_submit'] and !$_POST[STEP]){
header("Location: index.php");
}
if($_POST[roomtype]=="") { $_POST[roomtype]=$_GET[RoomType];  }
if($_POST[arrival]=="") { $_POST[arrival]=$_GET[Arrival]; }
if($_POST[departure]=="") { $_POST[departure]=$_GET[Departure]; }
if($_POST[units]=="") { $_POST[units]=$_GET[Unit]; }
if($_POST[adults]=="") { $_POST[adults]=$_GET[Adult]; }
if($_POST[children]=="") { $_POST[children]=$_GET[Children]; }
if($_POST[nights]=="") { $_POST[nights]=$_GET[Nights]; }

if($_POST[RoomType]=="") { $_POST[RoomType]=$_GET[Room];  }
if($_POST[arrivaldate_datepicker]=="") { $_POST[arrivaldate_datepicker]=$_GET[Arrival]; }
if($_POST[departuredate_datepicker]=="") { $_POST[departuredate_datepicker]=$_GET[Departure]; }
if($_POST[STEP]=="") { $_POST[STEP]=1; }
/*if($_POST[STEPONE]=="Reserve")
{
$_POST[STEP]=2;
}*/
if($_POST[STEPTWO]=="Continue")
{
$_POST[roomtype]=$_POST[roomtype1];
$_POST[arrival]=$_POST[arrivaldate_datepicker];
$_POST[departure]=$_POST[departuredate_datepicker];
$_POST[units]=$_POST[units1];
$_POST[adults]=$_POST[adults1];
$_POST[children]=$_POST[children1];
$_POST[nights]=$_POST[nights1];
$_POST[Title]=$_POST[title];
$_POST[Firstname]=$_POST[firstname];
$_POST[Lastname]=$_POST[lastname];
$_POST[Telephone]=$_POST[telephone];
$_POST[Fax]=$_POST[fax];
$_POST[Email]=$_POST[email];
$_POST[Address]=$_POST[address];
$_POST[PostalCode]=$_POST[pincode];
$_POST[City]=$_POST[city];
$_POST[Country]=$_POST[country];
$_POST[Riddb]=$_POST[riddb];

$_SESSION['modify_roomtype']=$_POST[roomtype1];
$_SESSION['modify_arrival']=$_POST[arrivaldate_datepicker];
$_SESSION['modify_departure']=$_POST[departuredate_datepicker];
$_SESSION['modify_units']=$_POST[units1];
$_SESSION['modify_adults']=$_POST[adults1];
$_SESSION['modify_children']=$_POST[children1];
$_SESSION['modify_nights']=$_POST[nights1];
$_SESSION['modify_title']=$_POST[title];
$_SESSION['modify_firstname']=$_POST[firstname];
$_SESSION['modify_lastname']=$_POST[lastname];
$_SESSION['modify_telephone']=$_POST[telephone];
$_SESSION['modify_fax']=$_POST[fax];
$_SESSION['modify_email']=$_POST[email];
$_SESSION['modify_address']=$_POST[address];
$_SESSION['modify_postal']=$_POST[pincode];
$_SESSION['modify_city']=$_POST[city];
$_SESSION['modify_country']=$_POST[country];
$_SESSION['modify_riddb']=$_POST[riddb];
$email_address = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if(!$_SESSION['modify_firstname'] |!$_SESSION['modify_lastname'] |!$_SESSION['modify_telephone'] |!$_SESSION['modify_email'] |!$_SESSION['modify_address'] |!$_SESSION['modify_postal'] |!$_SESSION['modify_city'] |!$_SESSION['modify_country'])
{

$_POST[STEP]=2;
$_SESSION['error']="Please fill all Mandatory fields to continue Reservation.";

}
elseif (!$email_address) {
	// The email address is not valid
	$_POST[STEP]=2;
	$_SESSION['error']="{$_SESSION['modify_email']} is not a valid Email.";
}
else{

unset($_SESSION['error']); 
$_POST[STEP]=3;

}
}
if($_POST[STEPTHREE]=="Back")
{
$_POST[STEP]=2;
}
if($_POST[STEPTHREE]=="Confirm")
{
$modify_rid=$_SESSION['modify_riddb'];		

$update="UPDATE booking set
RoomType = '".$_POST['roomtype']."',
Arrival = '".$_POST['arrival']."',
Departure = '".$_POST['departure']."',
Units = '".$_POST['units']."',
Adults = '".$_POST['adults']."',
Children = '".$_POST['children']."',
Nights = '".$_POST['nights']."',
Title = '".$_POST['Title']."',
Firstname = '".$_POST['Firstname']."',
Lastname = '".$_POST['Lastname']."',
Telephone = '".$_POST['Telephone']."',
Fax = '".$_POST['Fax']."',
Email = '".$_POST['Email']."',
Address = '".$_POST['Address']."',
PostalCode = '".$_POST['PostalCode']."',
City = '".$_POST['City']."',
Country = '".$_POST['Country']."',
Approval = 1,
CreateDate = now()
where rid='".$modify_rid."'";
//echo $update;
mysql_query($update);
//echo "$update";
			$Room_Description=$_SESSION['room_description'];	
	
$EmailContent='<table border="0" class="reserveinnerbox" width="100%" cellspacing="5" cellpadding="5">
                                          <tbody>
                                            <tr>
                                              <td width="198">Hotel </td>
                                              <td width="508">Hotel Alankar Grande </td>
                                            </tr>
											<tr>
                                              <td>Reservartion ID </td>
                                              <td>'.$modify_rid.' </td>
                                            </tr>
                                            <tr>
                                              <td>Arrival / Departure </td>
                                              <td>'.$_POST[arrival].' - '.$_POST[departure].' </td>
                                            </tr>
                                            <tr>
                                              <td>Number of Night(s) </td>
                                              <td>'.$_POST[nights].'</td>
                                            </tr>
                                            <tr>
                                              <td>Adults / Children</td>
                                              <td>'.$_POST[adults].' / '.$_POST[children].'  (Guests 6 years of age or younger are considered children) </td>
                                            </tr>
                                            
                                            <tr>
                                              <td>Room Type</td>
                                              <td>'.$_POST[roomtype].'</td>
                                            </tr>                                            
                                            <tr>
                                              <td>Number of Units </td>
                                              <td>'.$_POST[units].'</td>
                                            </tr>
                                             <tr>
                                              <td>Room Description </td>
                                              <td>'.$Room_Description.'</td>
                                            </tr>
                                          </tbody>
                                        </table>
										<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
                      <tbody>
                        
                        <tr>
                          <td colspan="2"><h4 style="border-bottom:1px solid #9c8659;">Guest Name</h4> </td>
                        </tr>
                        <tr>
                          <td colspan="2">'.$_POST[Title].'.&nbsp;'.$_POST[Firstname].'&nbsp;'.$_POST[Lastname].'</td>
                        </tr>
                        <tr>
                          <td colspan="2"><h4 style="border-bottom:1px solid #9c8659;">Guest Contact Details</h4> </td>
                        </tr>
                        <tr>
                          <td width="23%">Telephone : </td>
                          <td width="77%">'.$_POST[Telephone].'</td>
                        </tr>
                        <tr>
                          <td>Fax :                          </td>
                          <td>'.$_POST[Fax].'</td>
                        </tr>
                        <tr>
                          <td>E-mail :                          </td>
                          <td>'.$_POST[Email].'</td>
                        </tr>
                        <tr>
                          <td>Address :    </td>
                          <td>'.$_POST[Address].'</td>
                        </tr>
                        <tr>
                          <td>Postal Code :                          </td>
                          <td>'.$_POST[PostalCode].'</td>
                        </tr>
                        <tr>
                          <td>City :                          </td>
                          <td>'.$_POST[City].'</td>
                        </tr>
                        <tr>
                          <td>Country :                          </td>
                          <td>'.$_POST[Country].'</td>
                        </tr>
                      </tbody>
                    </table>';
					
					$selectAdmin=mysql_fetch_object(mysql_query("select * from gts_users where ID='1'"));
					$AdminEmail=$selectAdmin->user_email;
					$_SESSION['confirm_reserve_id']=$_SESSION['modify_riddb'];
					$_SESSION['EmailContent']=$EmailContent;
					$ToEmail =$_SESSION['modify_email'];
					$EmailSubject = 'Modified reservation at Hotel Alankar Grande';
					$mailheader = "From: ".$AdminEmail."\r\n";
					$mailheader .= "Reply-To: ".$AdminEmail."\r\n";
					$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
					$MESSAGE_BODY = $EmailContent;					
					mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
					
					
					$ToEmail = $AdminEmail;
					$EmailSubject = 'A reservation Modified at Hotel Alankar Grande';
					$mailheader = "From: ".$AdminEmail."\r\n";
					$mailheader .= "Reply-To: ".$AdminEmail."\r\n";
					$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
					$MESSAGE_BODY = $EmailContent;					
					mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

header("Location: reservationthanks.php"); 
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
    <title>Welcome to Hotel Alankar Grande - Reservation</title>
    
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
  ;(function($) {
  $("document").ready(function() {
      $("#datepicker_checkin1").datepicker({
			dateFormat: "dd-mm-yy",
			minDate: 0,
			showOn: 'both',
			buttonImage: 'images/icon_cal_start.gif',
			
		  onSelect: function( selectedDate ) {
            // Parse the selected date
            var instance = $( this ).data( "datepicker" ),
                date = $.datepicker.parseDate(
                    instance.settings.dateFormat ||
                    $.datepicker._defaults.dateFormat,
                    selectedDate, instance.settings );
            // Add one day
            date.setDate(date.getDate()+1);
            // Set the new date
            $("#datepicker_checkout1").datepicker('setDate', date);
			$( "#datepicker_checkout1" ).datepicker( "option", "minDate", selectedDate );
				var start   = $('#datepicker_checkin1').datepicker('getDate');
            var end = $('#datepicker_checkout1').datepicker('getDate');
            var days   = (end - start)/1000/60/60/24;
            $('#numDays1').val(days);
        }
      });
      $("#datepicker_checkout1").datepicker({
	  dateFormat: "dd-mm-yy",
	  defaultDate: +1,
	  showOn: 'both',
      buttonImage: 'images/icon_cal_start.gif',
	  minDate: +1, 
	  onSelect: function( selectedDate ) {
	  var start   = $('#datepicker_checkin1').datepicker('getDate');
            var end = $('#datepicker_checkout1').datepicker('getDate');
            var days   = (end - start)/1000/60/60/24;
            $('#numDays1').val(days);
			}
	  });
  });
  $('#numDays1').change(function() {
            var nights = parseInt($('#numDays1').val());
            var depart = $.datepicker.parseDate('',$('#datepicker_checkin1').val());
            depart.setDate(depart.getDate() + nights);
            $('#datepicker_checkout1').val(depart);
});
  })(jQuery);
</script> 

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
		.input{padding:0px;background-color: #fff;color: #000;}
		</style>
		<SCRIPT language=Javascript>
       <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
	   function validateEmail(emailField){
        var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
    </SCRIPT>
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
<!--<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="#testimonial.php">Testimonials</a>
</li>-->
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
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5 current_page_item menu-item-264"><a href="index.php">Home</a></li>
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
<!--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="#testimonial.php">Testimonials</a></li>-->
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="contact.php">Contact Us</a>
</li>
</ul></div></li>
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
            <h1>Welcome to Hotel Alankar Grande - Reservation</h1>
        </header><!-- page-header -->
   		<div class="content shadow-top left">
            <div class="content-container">
	                <div class="page-left left">
                    <? include("navigation.php") ?><!-- rail-left -->
                    <div class="rail-content left">
                        <div class="rail-content-container">
                            																		<div class="content-page left">
										<div class="content-page-container">
                                        <form action="modify.php" method="post" name="search">
                                        <input name="STEP" type="hidden" value="<?=$_POST[STEP]?>">
                                        <input name="roomtype" type="hidden" value="<?=$_POST[roomtype]?>">
                                        <input name="arrival" type="hidden" value="<?=$_POST[arrival]?>">
                                        <input name="departure" type="hidden" value="<?=$_POST[departure]?>">
                                        <input name="units" type="hidden" value="<?=$_POST[units]?>">
                                        <input name="adults" type="hidden" value="<?=$_POST[adults]?>">
                                        <input name="children" type="hidden" value="<?=$_POST[children]?>">
                                        <input name="nights" type="hidden" value="<?=$_POST[nights]?>">
                                        <input name="Title" type="hidden" value="<?=$_POST[Title]?>">
                                        <input name="Firstname" type="hidden" value="<?=$_POST[Firstname]?>">
                                        <input name="Lastname" type="hidden" value="<?=$_POST[Lastname]?>">
                                        <input name="Telephone" type="hidden" value="<?=$_POST[Telephone]?>">
                                        <input name="Fax" type="hidden" value="<?=$_POST[Fax]?>">
                                        <input name="Email" type="hidden" value="<?=$_POST[Email]?>">
                                        <input name="Address" type="hidden" value="<?=$_POST[Address]?>">
                                        <input name="PostalCode" type="hidden" value="<?=$_POST[PostalCode]?>">
                                        <input name="City" type="hidden" value="<?=$_POST[City]?>">
                                        <input name="Country" type="hidden" value="<?=$_POST[Country]?>">
										<input name="Riddb" type="hidden" value="<?=$_POST[Riddb]?>">
						<?php
							if($_POST['edt_submit'])
							{
								$edt_sql=mysql_query("select * from booking where rid='".$_POST['edt_email']."' ");
								$res_edt=mysql_fetch_array($edt_sql);

								if(mysql_num_rows($edt_sql)!="0")
								{
							
						?>
								<table width="100%" cellspacing="5" cellpadding="5" class="reserveheadbox">
									<tr>
										<!--<td><h4>1. Reservation Details</h4></td>-->
										<td class="reserveactivetd"><h4>1. Reservation Details & Guest Information</h4></td>
										<td><h4>3. Reservation Summary</h4></td>
									</tr>
								</table>
								<h3>Guest Information for Reservation ID:<?php echo $res_edt['rid']; ?></h3>
								<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
									<tbody>
										<tr>
											<td colspan="4"><h5 style="border-bottom:1px solid #9c8659;">To confirm your reservation, please complete the mandatory fields (*).</h5></td>
										</tr>
                        				<tr>
											<td colspan="2">Select a Room Type</td>
										</tr>
										<tr>
											<td colspan="2">
											<select name="roomtype1" id="RoomType" onChange="showUser(this.value)">
											<option value="<?php echo $res_edt['RoomType'];?>" selected="selected"><?php echo $res_edt['RoomType'];?></option>
											<option value="Standard Room">Standard Room</option>
											<option value="Deluxe Room">Deluxe Room</option>
											<option value="Standard Double/ Twin">Standard Double/ Twin</option>
											<option value="Suite room">Suite room</option>
											<option value="Grand Suite">Grand Suite</option>
											</select>
											</td>
										</tr>
									</tbody>
								</table>
	<table width="75%" border="0" cellpadding="0" cellspacing="0" class="reserveinnerbox" style="margin-left:6px">
                      <tbody>
						<tr>
                                <td>Arrival</td>
								<td>Departure</td>
								<td align="left">Unit(s)</td>
								<td align="left">Adults/Unit</td>
								<td align="left">Children</td>
								<td align="left">Nights</td>
						</tr>
						  <tr>
	<td>
	<input name="arrivaldate_datepicker" type="text" class="required" id="datepicker_checkin1" title="Please select a date!"  size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;" value="<?php echo $res_edt['Arrival'];?>"  readonly /></td>
	<!--<input name="arrivaldate_datepicker" type="text" class="required" id="arrivaldate_datepicker" title="Please select a date!"  size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;"  value="<?php echo $res_edt['Arrival'];?>" />-->
	</td>
	<td>
	<input name="departuredate_datepicker" type="text" class="required" id="datepicker_checkout1" title="Please select a date!" value="<?php echo $res_edt['Departure'];?>" size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;" readonly />
	<!--<input name="departuredate_datepicker" type="text" class="required" id="departuredate_datepicker" title="Please select a date!" size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;"  value="<?php echo $res_edt['Departure'];?>"/>-->
	</td>
    <td align="left">
	<select name="units1" id="units">
	<option value="<?php echo $res_edt['Units'];?>" selected="selected"><?php echo $res_edt['Units'];?></option>
          <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>
          </select>
	</td>
    <td align="left"><select name="adults1" id="adults">
	<option value="<?php echo $res_edt['Adults'];?>" selected="selected"><?php echo $res_edt['Adults'];?></option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>
          </select></td>
 
    <td align="left"><select name="children1" id="children">
	<option value="<?php echo $res_edt['Children'];?>" selected="selected"><?php echo $res_edt['Children'];?></option>
	<option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>      
          </select></td>
    <td align="left">
	<input id="numDays1" name="nights1" value="<?php echo $res_edt['Nights'];?>" style="padding: 0px;width: 15px;background-color: #fff;color: #000;text-align: center;" readonly />
	</td>
    </tr>
						</tbody>
	</table>
	<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox" >
                      <tbody>

                        <tr>
                          <td colspan="4"><h4 style="border-bottom:1px solid #9c8659;">Guest Name</h4> </td>
                        </tr>
                        <tr>
                          <td>Title *</td>
                          <td>Last Name *</td>
                          <td>First Name *</td>
                       </tr>
						<tr>
                          <td>  
                            <select name="title" id="title">
                              <option value="<?php echo $res_edt['Title'];?>" selected="selected"><?php echo $res_edt['Title'];?></option>
							  <option value="Mr">Mr</option>
							  <option value="Ms">Ms</option>
							  <option value="Mrs">Mrs</option>
							  <option value="Dr">Dr</option>
                            </select>
							</td>
                          <td>
                           <input name="lastname" type="text" id="lastname" tabindex="1" value="<?php echo $res_edt['Lastname'];?>" size="15" maxlength="14" style="padding:0px;background-color: #fff;color: #000;" required>                          	   </td>
                          <td>
                              <input name="firstname" type="text" id="firstname" tabindex="1" value="<?php echo $res_edt['Firstname'];?>" size="15" maxlength="15" style="padding:0px;background-color: #fff;color: #000;" required>                          </td>
                        </tr>
                        </tbody>
	</table>
	<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
                        <tr>
                          <td colspan="4"><h4 style="border-bottom:1px solid #9c8659;">Guest Contact Details</h4> </td>
                        </tr>
                        <tr>
                          <td>Telephone *<br>
							<input name="riddb" type="hidden" value="<?=$_POST[edt_email]?>">
                              <input name="telephone" type="text" id="telephone" tabindex="3" onkeypress="return isNumberKey(event)" value="<?php echo $res_edt['Telephone'];?>" size="15" maxlength="12" style="padding:0px;background-color: #fff;color: #000;" required>                          </td>
                          <td>Fax<br>
                              <input name="fax" type="text" id="fax" tabindex="4" onkeypress="return isNumberKey(event)" value="<?php echo $res_edt['Fax'];?>" size="15" maxlength="12" style="padding:0px;background-color: #fff;color: #000;">                          </td>
                          <td colspan="2">E-mail *<br>
                              <input name="email" type="text" id="email" onblur="validateEmail(this);" tabindex="5" value="<?php echo $res_edt['Email'];?>" size="35" maxlength="50" style="padding:0px;background-color: #fff;color: #000;" required>                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">Address *<br>
                          <input name="address" type="text" id="address" tabindex="7" value="<?php echo $res_edt['Address'];?>" size="38" maxlength="60" style=";padding:0px;background-color: #fff;color: #000;" required></td>
                          <td>City *<br>
                              <input name="city" type="text" id="city" tabindex="9" value="<?php echo $res_edt['City'];?>" size="15" maxlength="20" style="padding:0px;background-color: #fff;color: #000;" required>                          </td>
	                    </tr>
                        <tr>
                          <td>Postal Code *<br>
                              <input name="pincode" type="text" id="pincode" onkeypress="return isNumberKey(event)" tabindex="8" value="<?php echo $res_edt['PostalCode'];?>" size="10" maxlength="6" style="width:100px;padding:0px;background-color: #fff;color: #000;" required>
                          </td>
                          <td colspan="3">Country *<br>
                            <input name="country" type="text" id="country" tabindex="9" value="<?php echo $res_edt['Country'];?>" size="15" maxlength="20" style="padding:0px;background-color: #fff;color: #000;" required>                                                  </td>
                        </tr>
                        
                      </tbody>
                    </table>
                                        <br class="clear">
                                        
                                        <table width="100%" border="0" cellspacing="5" cellpadding="5" class="reservefootbox">
  
  <tr>
	<td width="87%" style="color:#fff"><? echo $_SESSION['error']; ?></td>
    
    <td width="13%" style="text-align:right;"><input type="submit" name="STEPTWO" id="STEPTWO" value="Continue" class="button"></td>
  </tr>
</table>			<?php
								}
								else
								{
								echo "<h3>Guest Information for Reservation ID:".$_POST[edt_email]." does not exit or Canceled.<br>Sorry for any inconvenience caused.</h3>";
								}
							}
						
							if($_GET['edit_id'] == 1)
							{
							?>
							<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
							<tbody>
							<tr>
							<td>Reservation ID<br><input name="edt_email" type="text" id="edt_email" size="20" class="input" required ></td>
							</tr>
							<tr>
							<td><input type="submit" name="edt_submit" id="edt_submit" value="Submit" class="button"></td>
							</tr>
							</tbody>
							</table>
							<?php } ?>
							<?          if($_POST[STEP]==2){ ?>
							<table width="100%" cellspacing="5" cellpadding="5" class="reserveheadbox">
									<tr>
										<!--<td><h4>1. Reservation Details</h4></td>-->
										<td class="reserveactivetd"><h4>1. Reservation Details & Guest Information</h4></td>
										<td><h4>3. Reservation Summary</h4></td>
									</tr>
								</table>
								<h3>Guest Information for Reservation ID:<?php echo $_SESSION['modify_riddb']; ?></h3>
								<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
									<tbody>
										<tr>
											<td colspan="4"><h5 style="border-bottom:1px solid #9c8659;">To confirm your reservation, please complete the mandatory fields (*).</h5></td>
										</tr>
                        				<tr>
											<td colspan="2">Select a Room Type</td>
										</tr>
										<tr>
											<td colspan="2">
											<select name="roomtype1" id="RoomType" onChange="showUser(this.value)">
											<option value="<?php echo $_SESSION['modify_roomtype'];?>" selected="selected"><?php echo $_SESSION['modify_roomtype'];?></option>
											<option value="Standard Room">Standard Room</option>
											<option value="Deluxe Room">Deluxe Room</option>
											<option value="Standard Double/ Twin">Standard Double/ Twin</option>
											<option value="Suite room">Suite room</option>
											<option value="Grand Suite">Grand Suite</option>
											</select>
											</td>
										</tr>
									</tbody>
								</table>
	<table width="75%" border="0" cellpadding="0" cellspacing="0" class="reserveinnerbox" style="margin-left:6px">
                      <tbody>
						<tr>
                                <td>Arrival</td>
								<td>Departure</td>
								<td align="left">Unit(s)</td>
								<td align="left">Adults/Unit</td>
								<td align="left">Children</td>
								<td align="left">Nights</td>
						</tr>
						  <tr>
	<td>
	<input name="arrivaldate_datepicker" type="text" class="required" id="datepicker_checkin1" title="Please select a date!"  size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;" value="<?php echo $_SESSION['modify_arrival'];?>"  readonly /></td>
	
	</td>
	<td>
	<input name="departuredate_datepicker" type="text" class="required" id="datepicker_checkout1" title="Please select a date!" value="<?php echo $_SESSION['modify_departure'];?>" size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;" readonly />
	
	</td>
    <td align="left">
	<select name="units1" id="units">
	<option value="<?php echo $_SESSION['modify_units'];?>" selected="selected"><?php echo $_SESSION['modify_units'];?></option>
          <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>
          </select>
	</td>
    <td align="left"><select name="adults1" id="adults">
	<option value="<?php echo $_SESSION['modify_adults'];?>" selected="selected"><?php echo $_SESSION['modify_adults'];?></option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>
          </select></td>
 
    <td align="left"><select name="children1" id="children">
	<option value="<?php echo $_SESSION['modify_children'];?>" selected="selected"><?php echo $_SESSION['modify_children'];?></option>
	<option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>      
          </select></td>
    <td align="left">
	<input id="numDays1" name="nights1" value="<?php echo $_SESSION['modify_nights'];?>" style="padding: 0px;width: 15px;background-color: #fff;color: #000;text-align: center;" readonly />
	</td>
    </tr>
						</tbody>
	</table>
	<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox" >
                      <tbody>

                        <tr>
                          <td colspan="4"><h4 style="border-bottom:1px solid #9c8659;">Guest Name</h4> </td>
                        </tr>
                        <tr>
                          <td>Title *</td>
                          <td>Last Name *</td>
                          <td>First Name *</td>
                       </tr>
						<tr>
                          <td>  
                            <select name="title" id="title">
                              <option value="<?php echo $_SESSION['modify_title'];?>" selected="selected"><?php echo $_SESSION['modify_title'];?></option>
							  <option value="Mr">Mr</option>
							  <option value="Ms">Ms</option>
							  <option value="Mrs">Mrs</option>
							  <option value="Dr">Dr</option>
                            </select>
							</td>
                          <td>
                           <input name="lastname" type="text" id="lastname" tabindex="1" value="<?php echo $_SESSION['modify_lastname'];?>" size="15" maxlength="14" style="padding:0px;background-color: #fff;color: #000;" required >                          	   </td>
                          <td>
                              <input name="firstname" type="text" id="firstname" tabindex="1" value="<?php echo $_SESSION['modify_firstname'];?>" size="15" maxlength="15" style="padding:0px;background-color: #fff;color: #000;" required >                          </td>
                        </tr>
                        </tbody>
	</table>
	<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
                        <tr>
                          <td colspan="4"><h4 style="border-bottom:1px solid #9c8659;">Guest Contact Details</h4> </td>
                        </tr>
                        <tr>
                          <td>Telephone *<br>
							<input name="riddb" type="hidden" value="<?=$_SESSION['modify_riddb']?>">
                              <input name="telephone" type="text" id="telephone" onkeypress="return isNumberKey(event)" tabindex="3" value="<?php echo $_SESSION['modify_telephone'];?>" size="15" maxlength="12" style="padding:0px;background-color: #fff;color: #000;" required>                          </td>
                          <td>Fax<br>
                              <input name="fax" type="text" id="fax" tabindex="4" onkeypress="return isNumberKey(event)" value="<?php echo $_SESSION['modify_fax'];?>" size="15" maxlength="12" style="padding:0px;background-color: #fff;color: #000;">                          </td>
                          <td colspan="2">E-mail *<br>
                              <input name="email" type="text" id="email" onblur="validateEmail(this);" tabindex="5" value="<?php echo $_SESSION['modify_email'];?>" size="35" maxlength="50" style="padding:0px;background-color: #fff;color: #000;" required>                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">Address *<br>
                          <input name="address" type="text" id="address" tabindex="7" value="<?php echo $_SESSION['modify_address'];?>" size="38" maxlength="60" style=";padding:0px;background-color: #fff;color: #000;" required></td>
                          <td>City *<br>
                              <input name="city" type="text" id="city" tabindex="9" value="<?php echo $_SESSION['modify_city'];?>" size="15" maxlength="20" style="padding:0px;background-color: #fff;color: #000;" required>                          </td>
	                    </tr>
                        <tr>
                          <td>Postal Code *<br>
                              <input name="pincode" type="text" id="pincode" tabindex="8" onkeypress="return isNumberKey(event)" value="<?php echo $_SESSION['modify_postal'];?>" size="10" maxlength="6" style="width:100px;padding:0px;background-color: #fff;color: #000;" required>
                          </td>
                          <td colspan="3">Country *<br>
                            <input name="country" type="text" id="country" tabindex="9" value="<?php echo $_SESSION['modify_country'];?>" size="15" maxlength="20" style="padding:0px;background-color: #fff;color: #000;" required>                                                  </td>
                        </tr>
                        
                      </tbody>
                    </table>
                                        <br class="clear">
                                        
                                        <table width="100%" border="0" cellspacing="5" cellpadding="5" class="reservefootbox">
  
  <tr>
	<td width="87%" style="color:#fff"><? echo $_SESSION['error']; ?></td>
    
    <td width="13%" style="text-align:right;"><input type="submit" name="STEPTWO" id="STEPTWO" value="Continue" class="button"></td>
  </tr>
</table>
							<? }
                                        if($_POST[STEP]==3)
                                        {
                                        ?>
 <?php ?><table width="100%" cellspacing="5" cellpadding="5" class="reserveheadbox">
  <tr>
    <td><h4>1. Reservation Details & Guest Information</h4></td>
    
    <td class="reserveactivetd"><h4>2. Reservation Summary</h4></td>
   
  </tr>
  
   <h3>Reservation Summary</h3>
</table>                             <?php
											$rom_type_sql=mysql_query("select * from gt_room_type");
											while($fecth_rom_type=mysql_fetch_array($rom_type_sql))
											{
                                              if($_SESSION['modify_roomtype']==$fecth_rom_type['room_type'])
                                              {	
											  $content=$fecth_rom_type['room_content'];
											  $_SESSION['room_description']=$content;
											  }
										  }
										  ?>
                                        <table border="0" class="reserveinnerbox" width="100%" cellspacing="5" cellpadding="5">
                                          <tbody>
                                            <tr>
                                              <td width="198">Hotel </td>
                                              <td width="508">Hotel Alankar Grande </td>
                                            </tr>
                                            <tr>
                                              <td>Arrival / Departure </td>
                                              <td><?php echo $_SESSION['modify_arrival'];?> - <?php echo $_SESSION['modify_departure'];?> </td>
                                            </tr>
                                            <tr>
                                              <td>Number of Night(s) </td>
                                              <td><? echo $_SESSION['modify_nights']; ?></td>
                                            </tr>
                                            <tr>
                                              <td>Adults / Children</td>
                                              <td><?php echo $_SESSION['modify_adults'];?> / <?php echo $_SESSION['modify_children'];?>  (Guests 6 years of age or younger are considered children) </td>
                                            </tr>
                                            
                                            <tr>
                                              <td>Room Type</td>
                                              <td><?php echo $_SESSION['modify_roomtype'];?></td>
                                            </tr>                                            
                                            <tr>
                                              <td>Number of Units </td>
                                              <td><?php echo $_SESSION['modify_units'];?></td>
                                            </tr>
											<tr>
                                              <td>Room Description </td>
                                              <td><?php echo $_SESSION['room_description'];?></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                                      
                      <table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
                      <tbody>                        
                       
                        <tr>
                          <td colspan="2"><h4 style="border-bottom:1px solid #9c8659;">Guest Name</h4> </td>
                        </tr>
                        <tr>
                          <td colspan="2"><?php echo $_SESSION['modify_title'];?>.<?php echo $_SESSION['modify_firstname'];?> <?php echo $_SESSION['modify_lastname'];?></td>
                        </tr>
                       
                        <tr>
                          <td colspan="2"><h4 style="border-bottom:1px solid #9c8659;">Guest Contact Details</h4> </td>
                        </tr>
                        <tr>
                          <td width="23%">Telephone : </td>
                          <td width="77%"><?php echo $_SESSION['modify_telephone'];?></td>
                        </tr>
                        <tr>
                          <td>Fax :                          </td>
                          <td><?php echo $_SESSION['modify_fax'];?></td>
                        </tr>
                        <tr>
                          <td>E-mail :                          </td>
                          <td><?php echo $_SESSION['modify_email'];?></td>
                        </tr>
                        <tr>
                          <td>Address :    </td>
                          <td><?php echo $_SESSION['modify_address'];?></td>
                        </tr>
                        <tr>
                          <td>Postal Code :                          </td>
                          <td><?php echo $_SESSION['modify_postal'];?></td>
                        </tr>
                        <tr>
                          <td>City :                          </td>
                          <td><?php echo $_SESSION['modify_city'];?></td>
                        </tr>
                        <tr>
                          <td>Country :                          </td>
                          <td><?php echo $_SESSION['modify_country'];?></td>
                        </tr>
                      </tbody>
                    </table>
                                        <br class="clear">
                                        
                                        <table width="100%" border="0" cellspacing="5" cellpadding="5" class="reservefootbox">
  
  <tr>
    <td width="87%"><input type="submit" name="STEPTHREE" id="STEPTHREE" value="Back" class="button"></td>
    <td width="13%" style="text-align:right;"><input type="submit" name="STEPTHREE" id="STEPTHREE" value="Confirm" class="button"></td>
  </tr>
</table>

                                        <?
										}
										?>
                                        
                                       </form> 
							
			   				<?php		   	
							if($_GET['view_id'] == 1)
							{
							?>
							<form action="view.php" method="post" name="frm">
							<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
							<tbody>
							<tr>
							<td>Reservation ID<br><input name="view_email" type="text" id="view_email" size="20" class="input" required></td>
							</tr>
							<tr>
							<td><input type="submit" name="view_submit" id="view_submit" value="Submit" class="button"></td>
							</tr>
							</tbody>
							</table>
							</form>
							<?php }?>
							
							 
			   				<?php		   	
							if($_GET['cancel_id'] == 1)
							{
							?>
							<form action="cancel.php" method="post" name="frm">
							<table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
							<tbody>
							<tr>
							<td>Reservation ID<br><input name="cancel_id" type="text" id="cancel_submit" size="20" class="input" required></td>
							</tr>
							<tr>
							<td><input type="submit" name="cancel_submit" id="cancel_submit" value="Submit" class="button"></td>
							</tr>
							</tbody>
							</table>
							</form>
							<?php }?>
							
  
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
    
   
    
    <?php include("footer.php");?><!-- footer -->
   <script type='text/javascript' src='js/jquery/ui/jquery.ui.core.mine8d2.js?ver=1.8.20'></script>

</body>

</html>