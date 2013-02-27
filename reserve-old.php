<?
include("admin/common/config.php");
if($_POST[roomtype]=="") { $_POST[roomtype]=$_GET[Room]; $_POST[Confirm]=""; }
if($_POST[arrival]=="") { $_POST[arrival]=$_GET[Arrival]; }
if($_POST[departure]=="") { $_POST[departure]=$_GET[Departure]; }
if($_POST[units]=="") { $_POST[units]=$_GET[Unit]; }
if($_POST[adults]=="") { $_POST[adults]=$_GET[Adult]; }
if($_POST[children]=="") { $_POST[children]=$_GET[Children]; }
if($_POST[nights]=="") { $_POST[nights]=$_GET[Nights]; }

if($_POST[submit]=="Continue")  
{
mysql_query("INSERT INTO `booking` (`RoomType`, `Arrival`, `Departure`, `Units`, `Adults`, `Children`, `Nights`, `Title`, `Firstname`, `Lastname`, `Telephone`, `Fax`, `Email`, `Address`, `PostalCode`, `City`, `Country`, `Approval`, `CreateDate`) VALUES ('$_POST[roomtype]', '$_POST[arrival]', '$_POST[departure]', '$_POST[units]', '$_POST[adults]', '$_POST[children]', '$_POST[nights]', '$_POST[title]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[telephone]', '$_POST[fax]', '$_POST[email]', '$_POST[address]', '$_POST[pincode]', '$_POST[city]', '$_POST[country]', '0', now());");
$_POST[Confirm]=1;
}

if($_POST[ConfirmRegis]=="Confirm Reservation")  
{
$_POST[Confirm]=2;
}


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
	    
</head>


<body class="home page page-id-5 page-template page-template-page-home-php">

    <? include("header.php"); ?><!-- header -->
    
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
                                        <h1>Reservation Confirmation</h1>
											
                                            
                                            
                                            <form action="" method="post" name="search">
                                            <?
											if($_POST[Confirm]=="")
											{
											?>
                                            
                    <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">Room Type</td>
    </tr>
  <tr>
    <td colspan="4"><input name="roomtype" type="text" id="roomtype" value="<?=$_POST[roomtype]?>"></td>
    </tr>
  <tr>
    <td colspan="2">Arrival</td>
    <td colspan="2">Departure</td>
  </tr>
  <tr>
    <td colspan="2"><input name="arrival" type="text" id="arrival" value="<?=$_POST[arrival]?>"></td>
    <td colspan="2"><input name="departure" type="text" id="departure" value="<?=$_POST[departure]?>"></td>
  </tr>
  <tr>
    <td width="71" align="left">Unit(s)</td>
    <td width="71" align="left">Adults/Unit</td>
    <td width="58" align="left">Children</td>
    <td width="386" align="left">Nights</td>
  </tr>
  <tr>
    <td align="left"><input name="units" type="text" id="units" value="<?=$_POST[units]?>" size="5" maxlength="3"></td>
    <td align="left"><input name="adults" type="text" id="adults" value="<?=$_POST[adults]?>" size="5" maxlength="3"></td>
    <td align="left"><input name="children" type="text" id="children" value="<?=$_POST[children]?>" size="5" maxlength="3"></td>
    <td align="left"><input name="nights" type="text" id="nights" value="<?=$_POST[nights]?>" size="5" maxlength="3"></td>
  </tr>
</table>

                    <table width="100%" border="0" cellpadding="5" cellspacing="5">
                      <tbody>
                        <tr>
                          <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="4"><span id="lblConfirmation">To confirm your reservation, please complete the mandatory fields (*). </span><br>                          </td>
                        </tr>
                        <tr>
                          <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="4"><span id="lblPersonalDetails">Guest Name</span> </td>
                        </tr>
                        <tr>
                          <td><span id="lblTitle">Title</span> *
                            <select name="title" id="title">
                              <option value="Mr">Mr</option>
                              <option value="Ms">Ms</option>
                              <option value="Mrs">Mrs</option>
                              <option value="Dr">Dr</option>
                            </select>
                          <br>                          </td>
                          <td><span id="lblGuestLastName">Last name</span> *<br>
                              <input name="lastname" type="text" id="lastname" tabindex="1" value="<?=$_POST[lastname]?>" size="15" maxlength="14">                          </td>
                          <td><span id="lblGuestFirstName">First Name</span> *<br>
                              <input name="firstname" type="text" id="firstname" tabindex="1" value="<?=$_POST[firstname]?>" size="15" maxlength="15">                          </td>
                          <td>   </td>
                        </tr>
                        <tr>
                          <td colspan="4"><span id="lblContactDetails">Guest Contact Details</span> </td>
                        </tr>
                        <tr>
                          <td><span id="lblTelephone">Telephone</span> *<br>
                              <input name="telephone" type="text" id="telephone" tabindex="3" value="<?=$_POST[telephone]?>" size="15" maxlength="15">                          </td>
                          <td><span id="lblFax">Fax</span><br>
                              <input name="fax" type="text" id="fax" tabindex="4" value="<?=$_POST[fax]?>" size="15" maxlength="15">                          </td>
                          <td colspan="2"><span id="lblEmail">E-mail</span> *<br>
                              <input name="email" type="text" id="email" tabindex="5" value="<?=$_POST[email]?>" size="35" maxlength="50">                          </td>
                        </tr>
                        <tr>
                          <td colspan="2"><span id="lblAdress">Address</span> <span id="spanAddress" cssclass="required">*</span><br>
                              <input name="address" type="text" id="address" tabindex="7" value="<?=$_POST[address]?>" size="40" maxlength="40">                          </td>
                          <td><span id="lblPostalCode">Postal Code</span> <span id="spanPostalCode" cssclass="required">*</span><br>
                              <input name="pincode" type="text" id="pincode" tabindex="8" value="<?=$_POST[pincode]?>" size="10" maxlength="10">
                                                       </td>
                          <td>   </td>
                        </tr>
                        <tr>
                          <td><span id="lblCity">City</span> <span id="spanCity" cssclass="required">*</span><br>
                              <input name="city" type="text" id="city" tabindex="9" value="<?=$_POST[city]?>" size="15" maxlength="20">                          </td>
                          <td colspan="3"><span id="lblCountry">Country</span> <span id="spanCountry" cssclass="required">*</span><br>
                            <input name="country" type="text" id="country" tabindex="9" value="<?=$_POST[country]?>" size="15" maxlength="20">                                                  </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td align="right">&nbsp;</td>
                          <td align="right">&nbsp;</td>
                          <td align="right"><input type="submit" name="submit" id="submit" value="Continue"></td>
                        </tr>
                      </tbody>
                    </table>
                    						<?
											}
											else if($_POST[Confirm]=="1")
											{
											?>
                                            <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">Room Type</td>
    </tr>
  <tr>
    <td colspan="4"><?=$_POST[roomtype]?></td>
    </tr>
  <tr>
    <td colspan="2">Arrival</td>
    <td colspan="2">Departure</td>
  </tr>
  <tr>
    <td colspan="2"><?=$_POST[arrival]?></td>
    <td colspan="2"><?=$_POST[departure]?></td>
  </tr>
  <tr>
    <td width="71" align="left">Unit(s)</td>
    <td width="71" align="left">Adults/Unit</td>
    <td width="58" align="left">Children</td>
    <td width="386" align="left">Nights</td>
  </tr>
  <tr>
    <td align="left"><?=$_POST[units]?></td>
    <td align="left"><?=$_POST[adults]?></td>
    <td align="left"><?=$_POST[children]?></td>
    <td align="left"><?=$_POST[nights]?></td>
  </tr>
</table>
                                            <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                                                  <tbody>
                                                                    <tr>
                                                                      <td colspan="4">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan="4"><span id="lblConfirmation">To confirm your reservation, please complete the mandatory fields (*). </span><br>                          </td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan="4">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan="4"><span id="lblPersonalDetails">Guest Name</span> </td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td><span id="lblTitle">Title</span> *
                                                                        <?=$_POST[title]?>
                                                                      <br>                          </td>
                                                                      <td><span id="lblGuestLastName">Last name</span> *<br>
                                                                          <?=$_POST[lastname]?>                          </td>
                                                                      <td><span id="lblGuestFirstName">First Name</span> *<br>
                                                                         <?=$_POST[firstname]?>                          </td>
                                                                      <td>   </td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan="4"><span id="lblContactDetails">Guest Contact Details</span> </td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td><span id="lblTelephone">Telephone</span> *<br>
                                                                          <?=$_POST[telephone]?>                          </td>
                                                                      <td><span id="lblFax">Fax</span><br>
                                                                          <?=$_POST[fax]?>                          </td>
                                                                      <td colspan="2"><span id="lblEmail">E-mail</span> *<br>
                                                                          <?=$_POST[email]?>                          </td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan="2"><span id="lblAdress">Address</span> <span id="spanAddress" cssclass="required">*</span><br>
                                                                          <?=$_POST[address]?>                          </td>
                                                                      <td><span id="lblPostalCode">Postal Code</span> <span id="spanPostalCode" cssclass="required">*</span><br>
                                                                          <?=$_POST[pincode]?>
                                                                                                   </td>
                                                                      <td>   </td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td><span id="lblCity">City</span> <span id="spanCity" cssclass="required">*</span><br>
                                                                          <?=$_POST[city]?>                          </td>
                                                                      <td colspan="3"><span id="lblCountry">Country</span> <span id="spanCountry" cssclass="required">*</span><br>
                                                                       <?=$_POST[country]?>                                                  </td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td>&nbsp;</td>
                                                                      <td colspan="3">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td>&nbsp;</td>
                                                                      <td align="right">&nbsp;</td>
                                                                      <td align="right">&nbsp;</td>
                                                                      <td align="right"><input type="submit" name="ConfirmRegis" id="ConfirmRegis" value="Confirm Reservation"></td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table>
                                            <?
											}
											else
											{
											?>
                                            <p>Thank you for choosing Hotel Alankar Grande  as your preferred choice.

Your reservation is confirmed</p> 
                                            <?
											}
											?>
                                            
                                            
                    <input name="Confirm" type="hidden" id="Confirm" value="<?=$_POST[Confirm]?>]">
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