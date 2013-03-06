<?php include("admin/common/config.php"); 
if(!$_POST['cancel_submit']){
header("Location: index.php");
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
                                        
<?php

							if($_POST['cancel_submit'])
							{
								$view_sql=mysql_query("select * from booking where rid='".$_POST['cancel_id']."' ");
								$res_view=mysql_fetch_array($view_sql);
								$rom_type_sql=mysql_query("select * from gt_room_type");
											while($fecth_rom_type=mysql_fetch_array($rom_type_sql))
											{
                                              if($res_view['RoomType']==$fecth_rom_type['room_type'])
                                              {	
											  $content=$fecth_rom_type['room_content'];
											  }
										  }
								if(mysql_num_rows($view_sql)!=0)
								{?>
							<h3>Reservation Details for :<?php echo $res_view['rid']; ?></h3>					   
					   
									   <table border="0" class="reserveinnerbox" width="100%" cellspacing="5" cellpadding="5">
                                          <tbody>
                                            <tr>
                                              <td width="198">Hotel </td>
                                              <td width="508">Hotel Alankar Grande </td>
                                            </tr>
                                            <tr>
                                              <td>Arrival / Departure </td>
                                              <td><?php echo $res_view['Arrival'];?> - <?php echo $res_view['Departure'];?></td>
                                            </tr>
                                            <tr>
                                              <td>Number of Night(s) </td>
                                              <td><?php echo $res_view['Nights'];?></td>
                                            </tr>
                                            <tr>
                                              <td>Adults / Children</td>
                                              <td><?php echo $res_view['Adults'];?> / <?php echo $res_view['Children'];?>  (Guests 6 years of age or younger are considered children) </td>
                                            </tr>
                                            
                                            <tr>
                                              <td>Room Type</td>
                                              <td><?php echo $res_view['RoomType']; ?></td>
                                            </tr>                                            
                                            <tr>
                                              <td>Number of Units </td>
                                              <td><?php echo $res_view['Units'];?></td>
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
                          <td colspan="2"><?php echo $res_view['Title'].'.'.$res_view['Firstname'].'&nbsp;'.$res_view['Lastname'];?></td>
                        </tr>
                        <tr>
                          <td colspan="2"><h4 style="border-bottom:1px solid #9c8659;">Guest Contact Details</h4> </td>
                        </tr>
                        <tr>
                          <td width="23%">Telephone : </td>
                          <td width="77%"><?php echo $res_view['Telephone'];?></td>
                        </tr>
                        <tr>
                          <td>Fax :                          </td>
                          <td><?php echo $res_view['Fax'];?></td>
                        </tr>
                        <tr>
                          <td>E-mail :                          </td>
                          <td><?php echo $res_view['Email'];?></td>
                        </tr>
                        <tr>
                          <td>Address :</td>
                          <td><?php echo $res_view['Address'];?></td>
                        </tr>
                        <tr>
                          <td>Postal Code :                          </td>
                          <td><?php echo $res_view['PostalCode'];?></td>
                        </tr>
                        <tr>
                          <td>City :                          </td>
                          <td><?php echo $res_view['City'];?></td>
                        </tr>
                        <tr>
                          <td>Country :                          </td>
                          <td><?php echo $res_view['Country'];?></td>
                        </tr>
						<br/>
					<tr>
					<td>
					<form action="" method="post">
					<input type="hidden" name="rid_delete" value="<?=$_POST[cancel_id]?>">
					<input type="submit" name="delete" id="delete" value="Cancel Reservation" class="button"></td>
					<td><input type="submit" name="cancel" id="cancel" value="Back" class="button"></td>
					</form>
					</tr>
						</tbody>
                    </table>
               <?php }
			   else
			   {
			   echo "<h3>Guest Information for Reservation ID:".$_POST['cancel_id']." does not exit or already Canceled.<br>Sorry for any inconvenience caused.</h3>";			
			   }
			   }
			   ?>
							<?php 
							
							if($_POST['delete'])
							{
							$delete_id=$_POST['rid_delete'];
							//echo "$delete_id";
							$sql_delete="DELETE FROM booking WHERE rid='$delete_id'";
							$done=mysql_query($sql_delete);
							if(isset($done))
							{
								echo "<h3>Reservation order ".$delete_id." deleted successfully</h3>";
								$selectAdmin=mysql_fetch_object(mysql_query("select * from gts_users where ID='1'"));
								$AdminEmail=$selectAdmin->user_email;
								$EmailContent='<table border="0" class="reserveinnerbox" width="100%" cellspacing="5" cellpadding="5" >
                                          <tbody>
                                            <tr>
                                              <td width="198">Hotel </td>
                                              <td width="508">Hotel Alankar Grande </td>
                                            </tr>
											<tr>
                                              <td>Reservation Cancel</td>
                                              <td>'.$delete_id.'</td>
                                            </tr>
											</tbody>
											</table>';
								$ToEmail = $AdminEmail;
								$EmailSubject = 'Reservation Cancel:'.$delete_id.'.';
								$mailheader = "From: ".$AdminEmail."\r\n";
								$mailheader .= "Reply-To: ".$AdminEmail."\r\n";
								$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
								$MESSAGE_BODY = $EmailContent;					
								mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure1");
							}
							}
							if($_POST['cancel']){
							header("Location: index.php");
							}
							?>
							
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