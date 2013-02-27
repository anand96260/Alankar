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
    <title>Welcome to Hotel Alankar Grande - View Reservation</title>
    
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

    <? include("header.php"); ?><!-- header -->
    
     <div class="canvas">		
        <header class="page-header">
            <h1>Welcome to Hotel Alankar Grande - View Reservation</h1>
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
                                              <td><?=$_POST[arrival]?> - <?=$_POST[departure]?> </td>
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
                                              <td><?=$_POST[roomtype]?></td>
                                            </tr>                                            
                                            <tr>
                                              <td>Number of Units </td>
                                              <td><?=$_POST[units]?></td>
                                            </tr>
                                              <?
                                              if($_POST[roomtype]=="Standard")
                                              {											  
                                              ?>
                                              <tr>
                                              <td>Room Description</td>
                                              <td>
                                              <p>We at Alankar believe in providing affordable luxury. Our standard rooms personify this idea. The rooms are Spartan yet offer all the facilities that one would look for in a luxury hotel.</p>                                        
                                          </td>
                                            </tr>
                                              <tr>
                                              <td style="vertical-align:middle;">Room Facilities</td>
                                              <td>
                                          <ul>
                                            <li>Twin or double bed option.</li>
                                            <li>24 hours Room Service.</li>
                                            <li>Laundry services.</li>
                                            <li>Stand alone mobile/ laptop charging socket  that does not cut off power even when the key card is taken out.</li>
                                            <li>International power socket for our  multinational customers.</li>
                                            <li> LCD  television.</li>
                                            </ul>
                                          </td>
                                            </tr>
                                          <?
										  }
										  ?>
                                              <?
                                              if($_POST[roomtype]=="Deluxe")
                                              {											  
                                              ?>
                                              <tr>
                                              <td>Room Description</td>
                                              <td>
                                              <p>Ideal for those who want a little extra of everything, be it space, facilities or comfort- our most popular deluxe rooms offer uncompromised luxury at a very reasonable rate. Whether it is a business trip or a leisure holiday, there is something for everybody to enjoy in out deluxe rooms.  </p>                                        
                                          </td>
                                            </tr>
                                              <tr>
                                              <td style="vertical-align:middle;">Room Facilities</td>
                                              <td>
                                          <ul>
                                            <li>24 Hours Room Service </li>
                                            <li>32” LCD Television </li>
                                            <li>Direct Dialing Cordless Phone </li>
                                            <li>Twin Bed or Single Bed Option </li>
                                            <li>Coffee Maker </li>
                                            <li>Refrigerator served with complimentary Beverages </li>
                                            <li>Laptop sized Safety Locker </li>
                                            <li>Complimentary broadband wireless internet.</li>
                                            <li>Laptop on request.</li>
                                            <li>Laundry service.</li>
                                            <li>Welcome basket with fruits and cookies.</li>
                                            <li>Complimentary extra newspaper on request.</li>
                                            <li>Complimentary buffet breakfast serving South Indian and       continental cusine.</li>
                                          </ul>
                                          </td>
                                            </tr>
                                          <?
										  }
										  ?>
                                              
                                          <?
                                              if($_POST[roomtype]=="Suite")
                                              {											  
                                              ?>
                                              <tr>
                                              <td>Room Description</td>
                                              <td>
                                             <p>All our suites come with a living room and a bedroom. Immaculately decorated, the suites are the perfect place for anyone who is going to spend a lot of time in the room, be it work or a family getaway. In addition to our standard features, our suites come with: </p>                                        
                                          </td>
                                            </tr>
                                              <tr>
                                              <td style="vertical-align:middle;">Room Facilities</td>
                                              <td>
                                          <ul>
										    <li>Two  televisions.</li>
										    <li>Weighing  scale.</li>
										    <li>Hair  dryer.</li>
										    <li>Iron  and board on request.</li>
										    <li>Complimentary  fruits, snacks and beverages.</li>
										    <li>Complimentary  magazines on request.</li>
										    <li>Complimentary  extra newspaper on request.</li>
										    <li>Fully  stocked mini bar.</li>
										    <li>Coffee  maker with exotic choice of tea from Nilgiris.</li>
										    <li>Two  exclusive cottage suites with separate entrance on the ground floor.</li>
									      </ul>
                                          </td>
                                            </tr>
                                          <?
										  }
										  ?> 
                                          
                                           <?
                                              if($_POST[roomtype]=="GrandSuite")
                                              {											  
                                              ?>
                                              <tr>
                                              <td>Room Description</td>
                                              <td>
                                             <p>Our top of the line accommodation, the Grand Suites are the best place to stay in Coimbatore. Its classical décor will never look dated; with all the amenities that is sure to meet everyone’s expectations, it is the ideal choice for anyone who wants to treat themselves to ultimate luxury. </p>                                        
                                          </td>
                                            </tr>
                                              <tr>
                                              <td style="vertical-align:middle;">Room Facilities</td>
                                              <td>
                                          <ul>
										  <li>42 inch television in the bedroom. </li>
										  <li>32 inch television in the living room. </li>
										  <li>Fully stocked mini bar - Unlimited refills  included. </li>
										  <li>Weighing scale. </li>
										  <li>Hair dryer. </li>
										  
										  
										    <li>Complimentary  fruits, snacks and beverages.</li>
										    <li>Complimentary  magazines on request.</li>
										    <li>Complimentary  extra newspaper on request.</li>
										    <li>Coffee  maker with exotic choice of tea from Nilgiris.</li>
										    <li>Workstation  with PC and printer.</li>
									      </ul>
                                          </td>
                                            </tr>
                                          <?
										  }
										  ?>   
                                            <tr>
                                              <td><span id="lblRateInc">Rate Inclusions</span> </td>
                                              <td><span id="lblRateIncText">Promotion is   exclusive for Citibank card holders. All rates are inclusive of daily   housekeeping service (except Sunday and public holidays). Complimentary   access to the gym, pool, spa and sauna facility.</span> </td>
                                            </tr>                                           
                                            
                                          </tbody>
                                        </table>
                                        <br class="clear">
                                        
                                        <table width="100%" border="0" cellspacing="5" cellpadding="5" class="reservefootbox">
  
  <tr>
    <td width="87%">&nbsp;</td>
    <td width="13%" style="text-align:right;"><input type="submit" name="STEPONE" id="STEPONE" value="Reserve"></td>
  </tr>
</table>

                                        <?
										}
										?>
                                        
                                        
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
    <td ><h4>2. Guest Information</h4></td>
    <td class="reserveactivetd"><h4>3. Reservation Summary</h4></td>
   <!-- <td><h4>4. Confirmation</h4></td>-->
  </tr>
</table>
 <h3>Reservation Summary</h3>
 
 
                                        
                                        
                                        
                                        
                                        
                                        <table border="0" class="reserveinnerbox" width="100%" cellspacing="5" cellpadding="5">
                                          <tbody>
                                            <tr>
                                              <td width="198">Hotel </td>
                                              <td width="508">Hotel Alankar Grande </td>
                                            </tr>
                                            <tr>
                                              <td>Arrival / Departure </td>
                                              <td><?=$_POST[arrival]?> - <?=$_POST[departure]?> </td>
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
                                              <td><?=$_POST[roomtype]?></td>
                                            </tr>                                            
                                            <tr>
                                              <td>Number of Units </td>
                                              <td><?=$_POST[units]?></td>
                                            </tr>
                                              <?
                                              if($_POST[roomtype]=="Standard")
                                              {											  
                                              ?>
                                              <tr>
                                              <td>Room Description</td>
                                              <td>
                                              <p>We at Alankar believe in providing affordable luxury. Our standard rooms personify this idea. The rooms are Spartan yet offer all the facilities that one would look for in a luxury hotel.</p>                                        
                                          </td>
                                            </tr>
                                              <tr>
                                              <td style="vertical-align:middle;">Room Facilities</td>
                                              <td>
                                          <ul>
                                            <li>Twin or double bed option.</li>
                                            <li>24 hours Room Service.</li>
                                            <li>Laundry services.</li>
                                            <li>Stand alone mobile/ laptop charging socket  that does not cut off power even when the key card is taken out.</li>
                                            <li>International power socket for our  multinational customers.</li>
                                            <li> LCD  television.</li>
                                            </ul>
                                          </td>
                                            </tr>
                                          <?
										  }
										  ?>
                                              <?
                                              if($_POST[roomtype]=="Deluxe")
                                              {											  
                                              ?>
                                              <tr>
                                              <td>Room Description</td>
                                              <td>
                                              <p>Ideal for those who want a little extra of everything, be it space, facilities or comfort- our most popular deluxe rooms offer uncompromised luxury at a very reasonable rate. Whether it is a business trip or a leisure holiday, there is something for everybody to enjoy in out deluxe rooms.  </p>                                        
                                          </td>
                                            </tr>
                                              <tr>
                                              <td style="vertical-align:middle;">Room Facilities</td>
                                              <td>
                                          <ul>
                                            <li>24 Hours Room Service </li>
                                            <li>32” LCD Television </li>
                                            <li>Direct Dialing Cordless Phone </li>
                                            <li>Twin Bed or Single Bed Option </li>
                                            <li>Coffee Maker </li>
                                            <li>Refrigerator served with complimentary Beverages </li>
                                            <li>Laptop sized Safety Locker </li>
                                            <li>Complimentary broadband wireless internet.</li>
                                            <li>Laptop on request.</li>
                                            <li>Laundry service.</li>
                                            <li>Welcome basket with fruits and cookies.</li>
                                            <li>Complimentary extra newspaper on request.</li>
                                            <li>Complimentary buffet breakfast serving South Indian and       continental cusine.</li>
                                          </ul>
                                          </td>
                                            </tr>
                                          <?
										  }
										  ?>
                                              
                                          <?
                                              if($_POST[roomtype]=="Suite")
                                              {											  
                                              ?>
                                              <tr>
                                              <td>Room Description</td>
                                              <td>
                                             <p>All our suites come with a living room and a bedroom. Immaculately decorated, the suites are the perfect place for anyone who is going to spend a lot of time in the room, be it work or a family getaway. In addition to our standard features, our suites come with: </p>                                        
                                          </td>
                                            </tr>
                                              <tr>
                                              <td style="vertical-align:middle;">Room Facilities</td>
                                              <td>
                                          <ul>
										    <li>Two  televisions.</li>
										    <li>Weighing  scale.</li>
										    <li>Hair  dryer.</li>
										    <li>Iron  and board on request.</li>
										    <li>Complimentary  fruits, snacks and beverages.</li>
										    <li>Complimentary  magazines on request.</li>
										    <li>Complimentary  extra newspaper on request.</li>
										    <li>Fully  stocked mini bar.</li>
										    <li>Coffee  maker with exotic choice of tea from Nilgiris.</li>
										    <li>Two  exclusive cottage suites with separate entrance on the ground floor.</li>
									      </ul>
                                          </td>
                                            </tr>
                                          <?
										  }
										  ?> 
                                          
                                           <?
                                              if($_POST[roomtype]=="GrandSuite")
                                              {											  
                                              ?>
                                              <tr>
                                              <td>Room Description</td>
                                              <td>
                                             <p>Our top of the line accommodation, the Grand Suites are the best place to stay in Coimbatore. Its classical décor will never look dated; with all the amenities that is sure to meet everyone’s expectations, it is the ideal choice for anyone who wants to treat themselves to ultimate luxury. </p>                                        
                                          </td>
                                            </tr>
                                              <tr>
                                              <td style="vertical-align:middle;">Room Facilities</td>
                                              <td>
                                          <ul>
										  <li>42 inch television in the bedroom. </li>
										  <li>32 inch television in the living room. </li>
										  <li>Fully stocked mini bar - Unlimited refills  included. </li>
										  <li>Weighing scale. </li>
										  <li>Hair dryer. </li>
										  
										  
										    <li>Complimentary  fruits, snacks and beverages.</li>
										    <li>Complimentary  magazines on request.</li>
										    <li>Complimentary  extra newspaper on request.</li>
										    <li>Coffee  maker with exotic choice of tea from Nilgiris.</li>
										    <li>Workstation  with PC and printer.</li>
									      </ul>
                                          </td>
                                            </tr>
                                          <?
										  }
										  ?>   
                                            <tr>
                                              <td><span id="lblRateInc">Rate Inclusions</span> </td>
                                              <td><span id="lblRateIncText">Promotion is   exclusive for Citibank card holders. All rates are inclusive of daily   housekeeping service (except Sunday and public holidays). Complimentary   access to the gym, pool, spa and sauna facility.</span> </td>
                                            </tr>                                           
                                            
                                          </tbody>
                                        </table>
                                        
                                        
                                        
                                        
                                        
                                        <table width="100%" border="0" cellpadding="5" cellspacing="5" class="reserveinnerbox">
                      <tbody>
                        
                        
                        <tr>
                          <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2"><h4 style="border-bottom:1px solid #9c8659;">Guest Name</h4> </td>
                        </tr>
                        <tr>
                          <td colspan="2"><?=$_POST[title]?>.                                                                             <?=$_POST[lastname]?>                            <?=$_POST[firstname]?>   </td>
                        </tr>
                        <tr>
                          <td colspan="2">&nbsp;</td>
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