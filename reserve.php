<?
include("admin/common/config.php");
if($_POST[RoomType]=="") { $_POST[RoomType]=$_GET[RoomType];  }
if($_POST[Room]=="") { $_POST[Room]=$_GET[Room];  }
if($_POST[arrivaldate_datepicker]=="") { $_POST[arrivaldate_datepicker]=$_GET[Arrival]; }
if($_POST[departuredate_datepicker]=="") { $_POST[departuredate_datepicker]=$_GET[Departure]; }
if($_POST[units]=="") { $_POST[units]=$_GET[Unit]; }
if($_POST[adults]=="") { $_POST[adults]=$_GET[Adult]; }
if($_POST[children]=="") { $_POST[children]=$_GET[Children]; }
if($_POST[nights]=="") { $_POST[nights]=$_GET[Nights]; }
if($_POST[STEP]=="") { $_POST[STEP]=1; }
if(!$_POST[arrivaldate_datepicker]|!$_POST[departuredate_datepicker])
{

header("Location: index.php");
}

if($_POST[STEPONE]=="Reserve")
{
$_POST[STEP]=2;
session_unset(); 
unset($_SESSION['reserve_id']);
function get_random_no($len) {

	$random = substr(number_format(time() * rand(), 0, '', ''), 0, $len);

	return $random;
}
$random=get_random_no(10);
$hour = time() + 3600;
//setcookie(reserve_id, $random, $hour);

$_SESSION['reserve_id']=$random;
}
if($_POST[STEPTWO]=="Continue")
{
$_SESSION['firstname']=$_POST[firstname];
$_SESSION['lastname']=$_POST[lastname];
$_SESSION['title']=$_POST[title];
$_SESSION['telephone']=$_POST[telephone];
$_SESSION['fax']=$_POST[fax];
$_SESSION['email']=$_POST[email];
$_SESSION['address']=$_POST[address];
$_SESSION['pincode']=$_POST[pincode];
$_SESSION['city']=$_POST[city];
$_SESSION['country']=$_POST[country];

$email_address = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if(!$_SESSION['firstname'] |!$_SESSION['lastname'] |!$_SESSION['telephone'] |!$_SESSION['email'] |!$_SESSION['address'] |!$_SESSION['pincode'] |!$_SESSION['city'] |!$_SESSION['country'])
{

$_POST[STEP]=2;
$_SESSION['error']="Please fill all Mandatory fields to continue Reservation.";

}
elseif (!$email_address) {
	// The email address is not valid
	$_POST[STEP]=2;
	$_SESSION['error']="{$_SESSION['email']} is not a valid Email.";
}
else{
unset($_SESSION['error']); 
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

$_POST[STEP]=3;
}
}
if($_POST[STEPTHREE]=="Back")
{
$_POST[STEP]=2;
}
if($_POST[STEPTHREE]=="Confirm")
{

//global $rand;

$rand=$_SESSION['reserve_id'];

/*echo "INSERT INTO `booking` (`RoomType`, `Arrival`, `Departure`, `Units`, `Adults`, `Children`, `Nights`, `Title`, `Firstname`, `Lastname`, `Telephone`, `Fax`, `Email`, `Address`, `PostalCode`, `City`, `Country`, `Approval`, `CreateDate`) VALUES ('$_POST[RoomType]', '$_POST[arrivaldate_datepicker]', '$_POST[departuredate_datepicker]', '$_POST[units]', '$_POST[adults]', '$_POST[children]', '$_POST[nights]', '$_POST[Title]', '$_POST[Firstname]', '$_POST[Lastname]', '$_POST[Telephone]', '$_POST[Fax]', '$_POST[Email]', '$_POST[Address]', '$_POST[PostalCode]', '$_POST[City]', '$_POST[Country]', '1', now())";*/

$sql=mysql_query("INSERT INTO `booking`(`RoomType`,`rid`,`Rooms`, `Arrival`, `Departure`, `Units`, `Adults`, `Children`, `Nights`, `Title`, `Firstname`, `Lastname`, `Telephone`, `Fax`, `Email`, `Address`, `PostalCode`, `City`, `Country`, `Approval`, `CreateDate`) VALUES ('$_POST[RoomType]','$_SESSION[reserve_id]','$_POST[Room]', '$_POST[arrivaldate_datepicker]', '$_POST[departuredate_datepicker]', '$_POST[units]', '$_POST[adults]', '$_POST[children]', '$_POST[nights]', '$_POST[Title]', '$_POST[Firstname]', '$_POST[Lastname]', '$_POST[Telephone]', '$_POST[Fax]', '$_POST[Email]', '$_POST[Address]', '$_POST[PostalCode]', '$_POST[City]', '$_POST[Country]', '1', now());");

$Room_Description=$_SESSION['room_description'];

$EmailContent='<table border="0" class="reserveinnerbox" width="100%" cellspacing="5" cellpadding="5" >
                                          <tbody>
                                            <tr>
                                              <td width="198">Hotel </td>
                                              <td width="508">Hotel Alankar Grande </td>
                                            </tr>
                                            <tr>
                                              <td>Arrival / Departure </td>
                                              <td>'.$_POST[arrivaldate_datepicker].' - '.$_POST[departuredate_datepicker].' </td>
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
                                              <td>'.$_POST[RoomType].'</td>
                                            </tr>                                            
                                            <tr>
                                              <td>Number of Units </td>
                                              <td>'.$_POST[units].'</td>
                                            </tr>
                                            <tr>
                                              <td>Room Description</td>
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
                          <td width="23%">Reservation ID : </td>
                          <td width="77%">'.$_SESSION[reserve_id].'</td>
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
                          <td>Address :</td>
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
					$_SESSION['confirm_reserve_id']=$rand;
					$selectAdmin=mysql_fetch_object(mysql_query("select * from gts_users where ID='1'"));
					$AdminEmail=$selectAdmin->user_email;
					
					
					$ToEmail = $_POST[Email];
					$EmailSubject = 'Your reservation at Hotel Alankar Grande';
					$mailheader = "From: ".$AdminEmail."\r\n";
					$mailheader .= "Reply-To: ".$AdminEmail."\r\n";
					$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
					$MESSAGE_BODY = $EmailContent;					
					mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure1"); 
					$_SESSION['EmailContent']=$EmailContent;					
					$ToEmail = $AdminEmail;
					$EmailSubject = 'A reservation Booked at Hotel Alankar Grande';
					$mailheader = "From: ".$AdminEmail."\r\n";
					$mailheader .= "Reply-To: ".$AdminEmail."\r\n";
					$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
					$MESSAGE_BODY = $EmailContent;					
					mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure2"); 

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
    input{
	padding:0px;
	background-color: #fff;
	color:#000;
	}
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
                                        
                                        <form action="" method="post" name="search">
                                        
                                        <input name="STEP" type="hidden" value="<?=$_POST[STEP]?>">
                                        <input name="RoomType" type="hidden" value="<?=$_POST[RoomType]?>">
										<input name="Room" type="hidden" value="<?=$_POST[Room]?>">
                                        <input name="arrivaldate_datepicker" type="hidden" value="<?=$_POST[arrivaldate_datepicker]?>">
                                        <input name="departuredate_datepicker" type="hidden" value="<?=$_POST[departuredate_datepicker]?>">
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
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <?
                                        if($_POST[STEP]==1)
                                        {
                                        ?>                                    
                                        
                                        
                                        
                                        <table width="100%" cellspacing="5" cellpadding="5" class="reserveheadbox">
  <tr>
    <td class="reserveactivetd"><h4>1. Reservation Details</h4></td>
    <td><h4>2. Guest Information</h4></td>
    <td><h4>3. Reservation Summary</h4></td>
    <!--<td><h4>4. Confirmation</h4></td>-->
  </tr>
</table>
 <h3>Reservation Details</h3>
 
 
                                        
                                        
                                        <table border="0" class="reserveinnerbox" width="100%" cellspacing="5" cellpadding="5">
                                          <tbody>
                                            <tr>
                                              <td width="198">Hotel </td>
                                              <td width="508">Hotel Alankar Grande </td>
                                            </tr>
                                            <tr>
                                              <td>Arrival / Departure </td>
                                              <td><?=$_POST[arrivaldate_datepicker]?> - <?=$_POST[departuredate_datepicker]?> </td>
                                            </tr>
                                            <tr>
                                              <td>Number of Night(s) </td>
                                              <td><?=$_POST[nights]?></td>
                                            </tr>
                                            <tr>
                                              <td>Adults / Children</td>
                                              <td><?=$_POST[adults]?> / <?=$_POST[children]?>  (Guests 6 years of age or younger are considered children) </td>
                                            </tr>
                                            
                                            <tr>
                                              <td>Room Type</td>
                                              <td><?=$_POST[RoomType]?></td>
                                            </tr>
											<tr>
                                              <td>Number of Units </td>
                                              <td><?=$_POST[units]?></td>
                                            </tr>
											  										
                                              <?
											$rom_type_sql=mysql_query("select * from gt_room_type");
											while($fecth_rom_type=mysql_fetch_array($rom_type_sql))
											{
                                              if($_POST[RoomType]==$fecth_rom_type['room_type'])
                                              {											  
                                              ?>
                                              <tr>
                                              <td>Room Description</td>
											  <td><?php echo $fecth_rom_type['room_content']?></td>
                                              
                                            </tr>
                                          <?
										  }
										  }
										  ?>
                                            
                                          </tbody>
                                        </table>
                                        <br class="clear">
                                        
                                        <table width="100%" border="0" cellspacing="5" cellpadding="5" class="reservefootbox">
  
  <tr>
	
    <td width="87%">&nbsp;</td>
    <td width="13%" style="text-align:right;"><input type="submit" name="STEPONE" id="STEPONE" value="Reserve" class="button"></td>
  </tr>
</table>

                                        <?
										}
										?>
                                        
                                        
                                        
                                        <?
                                        if($_POST[STEP]==2)
                                        {
                                        ?>
                                        
                                        
                                        
                                        
                                        <table width="100%" cellspacing="5" cellpadding="5" class="reserveheadbox">
  <tr>
    <td><h4>1. Reservation Details</h4></td>
    <td class="reserveactivetd"><h4>2. Guest Information</h4></td>
    <td><h4>3. Reservation Summary</h4></td>
    <!--<td><h4>4. Confirmation</h4></td>-->
  </tr>
</table>
 <h3>Guest Information</h3>
 
 
                                        
                      <form name="" method="post" action="" id="guestinfo">                 
                      <table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
                      <tbody>
                        <tr>
                          <td colspan="4"><h5 style="border-bottom:1px solid #9c8659;">To confirm your reservation, please complete the mandatory fields (*).</h5></td>
                        </tr>
                        <tr>
                          <td colspan="4"><h4 style="border-bottom:1px solid #9c8659;">Guest Name</h4> </td>
                        </tr>
                        <tr>
                          <td>Title * <br>  
                            <select name="title" id="title">
                              <option value="Mr">Mr</option>
                              <option value="Ms">Ms</option>
                              <option value="Mrs">Mrs</option>
                              <option value="Dr">Dr</option>
                            </select>                                                 
						</td>
                          <td>Last name *<br>
                              <input name="lastname" type="text" id="lastname" tabindex="1" value="<? echo $_SESSION['lastname'];?>" required class="required" size="15" maxlength="14">                          </td>
                          <td>First Name *<br>
                              <input name="firstname" type="text" id="firstname" tabindex="1" value="<?echo $_SESSION['firstname'];?>" required class="required" size="15" maxlength="15">                          </td>
                          <td>   </td>
                        </tr>
                        <tr>
                          <td colspan="4"><h4 style="border-bottom:1px solid #9c8659;">Guest Contact Details</h4> </td>
                        </tr>
                        <tr>
                          <td>Telephone *<br>
                              <input name="telephone" type="text" id="telephone" class="onlydigits" tabindex="3" value="<?echo $_SESSION['telephone'];?>" onkeypress="return isNumberKey(event)" size="15" maxlength="15" required >                          </td>
                          <td>Fax<br>
                              <input name="fax" type="text" id="fax" tabindex="4" value="<?echo $_SESSION['fax'];?>" size="15" onkeypress="return isNumberKey(event)" maxlength="15">                          </td>
                          <td colspan="2">E-mail *<br>
                              <input name="email" type="text" id="email" tabindex="5" value="<?echo $_SESSION['email'];?>" onblur="validateEmail(this);" size="35" maxlength="50" required>                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">Address *<br>
                          <input name="address" type="text" id="address" tabindex="7" value="<?echo $_SESSION['address'];?>" size="38" maxlength="60" required></td>
                          <td>Postal Code *<br>
                              <input name="pincode" type="text" id="pincode" tabindex="8" value="<?echo $_SESSION['pincode'];?>" onkeypress="return isNumberKey(event)" size="10" maxlength="10" required>
                                                     </td>
                          <td>   </td>
                        </tr>
                        <tr>
                          <td>City *<br>
                              <input name="city" type="text" id="city" tabindex="9" value="<?echo $_SESSION['city'];?>" size="15" maxlength="20" required>                          </td>
                          <td colspan="3">Country *<br>
                            <input name="country" type="text" id="country" tabindex="9" value="<?echo $_SESSION['country'];?>" size="15" maxlength="20"  required>                                                  </td>
                        </tr>
                        
                      </tbody>
                    </table>
                                        <br class="clear">
                                        
                                        <table width="100%" border="0" cellspacing="5" cellpadding="5" class="reservefootbox">
  
  <tr>
    <td width="87%" style="color:#fff">&nbsp;<? echo $_SESSION['error']?> </td>
    <td width="13%" style="text-align:right;"><input type="submit" name="STEPTWO" id="STEPTWO" value="Continue" class="button"></td>
  </tr>
</table>
</form>
                                        <?
										}
										?>
                                        
                                        
                                        
                                        
                                        <?
                                        if($_POST[STEP]==3)
                                        {
                                        ?>
                                        
                                        
                                        
                                        
                                        <table width="100%" cellspacing="5" cellpadding="5" class="reserveheadbox">
  <tr>
    <td><h4>1. Reservation Details</h4></td>
    <td ><h4>2. Guest Information</h4></td>
    <td class="reserveactivetd"><h4>3. Reservation Summary</h4></td>
   <!-- <td><h4>4. Confirmation</h4></td>-->
  </tr>
</table>
 <h3>Reservation Summary</h3>
											<?php
											$rom_type_sql=mysql_query("select * from gt_room_type");
											while($fecth_rom_type=mysql_fetch_array($rom_type_sql))
											{
                                              if($_POST[RoomType]==$fecth_rom_type['room_type'])
                                              {	
											  $content=$fecth_rom_type['room_content'];
											  $_SESSION['room_description']=$content;
											  }
										  }
										  ?>
										<div >  
                                        <table border="0" class="reserveinnerbox" width="100%" cellspacing="5" cellpadding="5">
                                          <tbody>
                                            <tr>
                                              <td width="198">Hotel </td>
                                              <td width="508">Hotel Alankar Grande </td>
                                            </tr>
											<tr>
                         					 <td>Reservation ID : </td>
                          					<td><?php echo $_SESSION['reserve_id'];?></td>
                        					</tr>
                                            <tr>
                                              <td>Arrival / Departure </td>
                                              <td><?=$_POST[arrivaldate_datepicker]?> - <?=$_POST[departuredate_datepicker]?> </td>
                                            </tr>
                                            <tr>
                                              <td>Number of Night(s) </td>
                                              <td><?=$_POST[nights]?></td>
                                            </tr>
                                            <tr>
                                              <td>Adults / Children</td>
                                              <td><?=$_POST[adults]?> / <?=$_POST[children]?>  (Guests 6 years of age or younger are considered children) </td>
                                            </tr>
                                            
                                            <tr>
                                              <td>Room Type</td>
                                              <td><?=$_POST[RoomType]?></td>
                                            </tr>    
											<tr>
                                              <td>Number of Units </td>
                                              <td><?=$_POST[units]?></td>
                                            </tr>
											<tr>
                                              <td>Room Description</td>
											  <td><?php echo $content; ?></td>
                                            </tr>
                                            
                                          </tbody>
                                        </table>
                                        
                                        
                                        
                                        
                                        
                                        <table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
                      <tbody>
                        
                        <tr>
                          <td colspan="2"><h4 style="border-bottom:1px solid #9c8659;">Guest Name</h4> </td>
                        </tr>
                        <tr>
                          <td colspan="2"><?=$_POST[title]?>.<?=$_POST[firstname]?> <?=$_POST[lastname]?>     </td>
                        </tr>
                        
                        <tr>
                          <td colspan="2"><h4 style="border-bottom:1px solid #9c8659;">Guest Contact Details</h4> </td>
                        </tr>
                        <tr>
                          <td width="23%">Telephone : </td>
                          <td width="77%"><?=$_POST[telephone]?></td>
                        </tr>
                        <tr>
                          <td>Fax :                          </td>
                          <td><?=$_POST[fax]?></td>
                        </tr>
                        <tr>
                          <td>E-mail :                          </td>
                          <td><?=$_POST[email]?></td>
                        </tr>
                        <tr>
                          <td>Address :    </td>
                          <td><?=$_POST[address]?></td>
                        </tr>
                        <tr>
                          <td>Postal Code :                          </td>
                          <td><?=$_POST[pincode]?></td>
                        </tr>
                        <tr>
                          <td>City :                          </td>
                          <td><?=$_POST[city]?></td>
                        </tr>
                        <tr>
                          <td>Country :                          </td>
                          <td><?=$_POST[country]?></td>
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
