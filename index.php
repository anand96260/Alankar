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
    <title>Hotel Alankar Grande</title>
    
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


<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://oxygencreations.com/alankar1/js/datepickere735.js?ver=3.4"></script>
	
  


<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible:5,
						elemsSlide:1,
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

<script type="text/javascript" src="floating-1.12.js">  
</script> 

    <div id="floatdiv" style="  
        position:absolute;  
        width:200px;height:50px;top:250px;right:100px;                  
        z-index:100">
		
		  
    <div id="TA_excellent390" class="TA_excellent">
<ul id="GVKHBC" class="TA_links PLOWZYaxT0GV">
<li id="xvXqhb7VBEMX" class="coYE9jLDbsc"><a target="_blank" href=http://www.tripadvisor.in/Hotel_Review-g297675-d1173767-Reviews-Hotel_Alankar_Grande-Coimbatore_Tamil_Nadu.html>Hotel Alankar Grande</a> rated "excellent" by travellers</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=excellent&amp;uniq=390&amp;locationId=1173767&amp;lang=en_IN"></script>  
    </div>  
      
    <script type="text/javascript">  
        floatingMenu.add('floatdiv',  
            {  
                // Represents distance from left or right browser window  
                // border depending upon property used. Only one should be  
                // specified.  
                 targetLeft: 10,  
                //targetRight: 10,  
      
                // Represents distance from top or bottom browser window  
                // border depending upon property used. Only one should be  
                // specified.  
                targetTop: 250,  
                // targetBottom: 0,  
      
                // Uncomment one of those if you need centering on  
                // X- or Y- axis.  
                // centerX: true,  
                // centerY: true,  
      
                // Remove this one if you don't want snap effect  
                snap: true  
            });  
    </script>  
<link rel='canonical' href='index.php' />
	<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript">
  ;(function($) {
  $("document").ready(function() {
  

      $("#datepicker_checkin").datepicker({
			dateFormat: "dd-mm-yy",
			minDate: 0,
			showOn: 'both',
            buttonImage: 'images/icon_cal_start.gif',
			buttonImageOnly: false,
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
            $("#datepicker_checkout").datepicker('setDate', date);
			
			
			$( "#datepicker_checkout" ).datepicker( "option", "minDate", selectedDate );
				var start   = $('#datepicker_checkin').datepicker('getDate');

            var end = $('#datepicker_checkout').datepicker('getDate');

            var days   = (end - start)/1000/60/60/24;

            $('#numDays').val(days);
        }
      });
      $("#datepicker_checkout").datepicker({
	  dateFormat: "dd-mm-yy",
	  showOn: 'both',
      buttonImage: 'images/icon_cal_start.gif',
	  minDate: +1, 
	  defaultDate: +1,
	  onSelect: function( selectedDate ) {
	  
	  var start   = $('#datepicker_checkin').datepicker('getDate');

            var end = $('#datepicker_checkout').datepicker('getDate');

            var days   = (end - start)/1000/60/60/24;

            $('#numDays').val(days);
			
			}
				  
	  });

      //$("#datepicker_checkin").datepicker('setDate', new Date());
		
  });
  $('#numDays').change(function() {
            var nights = parseInt($('#numDays').val());
            var depart = $.datepicker.parseDate('',$('#datepicker_checkin').val());
            depart.setDate(depart.getDate() + nights);
            $('#datepicker_checkout').val(depart);
});
  })(jQuery);
</script> 
    
			<script type="text/javascript">
		
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
		//<![CDATA[
			/*jQuery(document).ready(function(){
				jQuery('.content img').each(function(){
					jQuery(this).removeAttr('width')
					jQuery(this).removeAttr('height');
				});
			});*/
		//]]>
		</script>
		<style>
		.button-index{
	padding:2px 5px 1px 5px;
	background-image:url("images/bg-button.png");
	background-repeat:repeat-x;
	background-color:#60492b;
	color:#fff;
	border-radius:5px;
	}
	.button-index:hover {
    border: 1px solid #fff;
	background-color:#60492b;
    cursor:pointer;
} 
.ui-datepicker-trigger{
background-color:#2d1912;
padding:0px;
margin-left:5px;
margin-bottom:-5px;
margin-top:4px;
background-image:url("icon.png");
box-shadow:0 1px 1px rgba(0,0,0,0);
}</style>
		
	    
</head>


<body class="home page page-id-5 page-template page-template-page-home-php">
<!--===============================================================header begins===============================================================-->
    <? include("header.php"); ?><!-- header -->
	            <nav class="navigation left">
                <div class="navigation-container">
				
                	<div class="menu-primary-navigation-container">
<ul id="menu-primary-navigation" class="menu">
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5 current_page_item menu-item-264"><a href="index.php">Home</a></li>
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
            
 
			
            <a id="prevslide" class="slideshow-prev load-item"></a>
            <a id="nextslide" class="slideshow-next load-item"></a>
            <div id="searchmain">
               		<div id="searchbox" style="width:auto;float:right;padding:10px; ">
<form action="reserve.php" method="post" name="search">
                    <table width="232" border="0" cellspacing="10" cellpadding="5" align="center" style="color:#fff;">
   
  <tr>
    <td colspan="2">Select a Room Type</td>
    </tr>
  <tr>
    <td colspan="2">
	<select name="RoomType" id="RoomType" class="required" onChange="showUser(this.value)">
      
	  <?php 
	  $rom_type_sql=mysql_query("select * from gt_room_type");
	while($fecth_rom_type=mysql_fetch_array($rom_type_sql))
	{?>
	<option value="<?php echo $fecth_rom_type['room_type'];?>"><?php echo $fecth_rom_type['room_type'];?></option>
	<?php }?>
    </select>
	</td>
    </tr>
	</table>
	<table width="232" border="0" cellspacing="10" cellpadding="5" align="center" style="color:#fff;">
  <tr>
    <td colspan="2">Arrival</td>
	<td colspan="2" align="left">Departure</td>
    </tr>
  <tr>
	<?php
	$tomorrow_epoch = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
	$tomorrow_date = date("d-m-20y", $tomorrow_epoch);
	$today_epoch = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
	$today_date = date("d-m-20y", $today_epoch);?>
	<td colspan="2">
	<input name="arrivaldate_datepicker" readonly type="text" class="required" id="datepicker_checkin" title="Please select a date!" value="<?echo $today_date;?>" size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;"  /></td>
	<td colspan="2" align="left">
	<input name="departuredate_datepicker" readonly type="text" class="required" id="datepicker_checkout" title="Please select a date!" value="<?echo $tomorrow_date;?>" value="<?=$_POST[departuredate_datepicker]?>" size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;" /> </td>
    </tr>
	</table>
	<table width="232" border="0" cellspacing="10" cellpadding="5" align="center" style="color:#fff;">
	 <tr>
    <td align="left">Unit(s)</td>
    <td align="left">Adults/Unit</td>
	
	<td align="left">Children</td>
    <td align="left">Nights</td>
    </tr>
  <tr>
    <td align="left"><select name="units" id="units">
    <? for($u=1;$u<7;$u++)
	{
	?>
      <option value="<?=$u?>" <? if($_POST[units]==$u) echo "selected"; ?>><?=$u?></option>
      <?
	  }
	  ?>
    </select>    </td>
    <td align="left"><select name="adults" id="adults">
      <? for($u=1;$u<7;$u++)
	{
	?>
      <option value="<?=$u?>" <? if($_POST[adults]==$u) echo "selected"; ?>><?=$u?></option>
      <?
	  }
	  ?>
    </select></td>
    <td align="left"><select name="children" id="children">
      <? for($u=0;$u<7;$u++)
	{
	?>
      <option value="<?=$u?>" <? if($_POST[children]==$u) echo "selected"; ?>>
        <?=$u?>
        </option>
      <?
	  }
	  ?>
    </select></td>
    <td>
	<input id="numDays" name="nights" value="1" style="padding: 0px;width: 15px;background-color: #fff;color: #000;text-align: center;" readonly />
	</td>
    </tr>
  </table>
	<table width="240" border="0" cellspacing="10" cellpadding="5" align="center" style="color:#fff;">
  <tr>
    <td align="center"><input type="submit" name="Reserve" id="Reserve" value="Reserve" class="button-index" /></td>
	<td><a href="modify.php?edit_id=1">Modify</a> | <a href="modify.php?view_id=1" >View</a> | <a href="modify.php?cancel_id=1">Cancel</a></td>
  </tr>

</table>

                    </form>
 
<!--<form action="" method="post" name="search">
  <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">Select a Room Type</td>
    </tr>
  <tr>
    <td colspan="4"><select name="RoomType" id="RoomType">
      <option>Select Room Type</option>
      <option value="Standard">Standard Room</option>
      <option value="Deluxe">Deluxe Room</option>
      <option value="Suite">Suite Room</option>
      <option value="GrandSuite">Grand Suite Room</option>
    </select>    </td>
    </tr>
  <tr>
    <td width="50%" colspan="2">Arrival</td>
    <td width="50%" colspan="2">Departure</td>
  </tr>
  <tr>
    <td colspan="2"><input name="arrivaldate_datepicker" type="text" class="required" id="arrivaldate_datepicker" title="Please select a date!" value="" size="20" maxlength="30" style="width:120px;" />      </td>
    <td colspan="2"><input name="departuredate_datepicker" type="text" class="required" id="departuredate_datepicker" title="Please select a date!" value="" size="20" maxlength="30" style="width:120px;" /></td>
  </tr>
  <tr>
    <td align="left">Unit(s)</td>
    <td align="left">Adults/Unit</td>
    <td align="left">Children</td>
    <td align="left">Nights</td>
  </tr>
  <tr>
    <td align="left"><select name="units" id="units">
    <? for($u=1;$u<7;$u++)
	{
	?>
      <option value="<?=$u?>"><?=$u?></option>
      <?
	  }
	  ?>
    </select>    </td>
    <td align="left"><select name="adults" id="adults">
      <? for($u=1;$u<7;$u++)
	{
	?>
      <option value="<?=$u?>"><?=$u?></option>
      <?
	  }
	  ?>
    </select></td>
    <td align="left"><select name="children" id="children">
      <? for($u=0;$u<7;$u++)
	{
	?>
      <option value="<?=$u?>"><?=$u?></option>
      <?
	  }
	  ?>
    </select></td>
    <td align="left"><select name="nights" id="nights">
      <? for($n=0;$n<7;$n++)
	{
	?>
      <option value="<?=$n?>"><?=$n?></option>
      <?
	  }
	  ?>
    </select></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input type="submit" name="Reserve" id="Reserve" value="Reserve"></td>

	<td align="center"><a href="modify.php?edit_id=1" class="modi-reg">Modify</a></td>
	<td align="center"><a href="modify.php?view_id=1" class="modi-reg">View</a></td>

	<td align="center"><a href="modify.php?cancel_id=1" class="modi-reg">Cancel</a></td>

  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</form>-->
                    </div>
               </div>
            <!--<div class="slideshow-caption round">
                <div id="slidecaption" class="slideshow-caption-container round-bottom">
                
                <br class="clear" />
                </div><!-- slideshow-caption-container -->
            <!--</div>--><!-- slideshow-caption -->
            
            <div class="slideshow-overlay round"></div><!-- slideshow-overlay -->
        
        
        <div class="content-home shadow-big-top left">
<div class="content-home-container" style="font-size:12px;">
            
            	<div class="callouts left">
				
					                                
                                <div class="callout-block round shadow left">
                                
									                                    <h2 class="callout-title">
                                    	<a href="about.php">About Hotel	Alankar	Grande</a>
									</h2><!-- callout-title -->
                                                                        
                                                                        <div class="callout-image">
                                        <div class="callout-image-container image-overlay image left">
                                                                                        <a href="about.php">
                                                <img width="316" height="120" src="images/linguini.jpg" class="attachment-callout wp-post-image" alt="hI" title=" HELLO" />                                                <span><span></span></span>
                                            </a>
                                                                                    </div><!-- callout-image-container -->
                                    </div><!-- callout-image -->
                                                                        
                                    <div class="callout-content round-bottom left">
                                    	<div class="callout-content-container">
                                        
											<p style="text-align:justify;">Hotel Alankar grande is the perfect place for the person in search of a luxurious hotel in Coimbatore with 3 star facilities. Set right in the Gandhipuram area which is the heart of the cosmopolitan city of Coimbatore, just 2 km from the railway station and 10 km from the airport, Hotel Alankar Grande is one of the best hotels in Coimbatore. </p>
<div class="button-standard button">
                                                    <a href="about.php">
                                                        More About Us                                                    </a>
                                                </div>
                                                                                        
                                        <br class="clear" />
                                        </div><!-- callout-content-container -->
                                    </div><!-- callout-content -->
                                    
                                </div><!-- callout-block -->
                                
                                            
                                                    
                                <div class="callout-block round shadow left">
                                
									                                    <h2 class="callout-title">
                                    	<a href="restaurant.php">
											Cuisine									</a>
									</h2><!-- callout-title -->
                                                                        
                                                                        <div class="callout-image">
                                        <div class="callout-image-container image-overlay image left">
                                                                                        <a href="restaurant.php">
                                                <img width="316" height="120" src="images/menu.jpg" class="attachment-callout wp-post-image" alt="" title="" />                                                <span><span></span></span>
                                            </a>
                                                                                    </div><!-- callout-image-container -->
                                    </div><!-- callout-image -->
                                                                        
                                    <div class="callout-content round-bottom left">
                                    	<div class="callout-content-container">
                                        
											<p style="text-align:justify;">Hotel Alankar Grande is one of the most popular food destinations in Coimbatore. We have several outlets that are sure to cater to everybody's cravings. Be it sumptuous buffets, fun and frolic with friends, wine and dine or just a casual coffee.</p>
                                            
                                            <p><table width="100%" border="0" cellspacing="6" cellpadding="5">
  <tr>
    <td width="11%" align="left">&nbsp;</td>
    <td width="48%" align="left"><strong><li>	<a href="southeast.php" style="color:#2d1912;">SOUTHEAST&nbsp;</a></li></strong></td>
    <td width="41%" align="left"><strong><li>	<a href="gossip.php" style="color:#2d1912;">GOSSIP&nbsp;</a></li></strong></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left"><strong><li><a href="topaz.php" style="color:#2d1912;">	TOPAZ&nbsp;</a></li></strong></td>
    <td align="left"><strong><li><a href="tiffinys.php" style="color:#2d1912;">	TIFFINYS&nbsp;</a></li></strong></td>
  </tr>
</table>
</p>
											
<div class="button-standard button">
                                                    <a href="restaurant.php">More Details
</a>
                                                </div>
                                                                                        
                                        <br class="clear" />
                                        </div><!-- callout-content-container -->
                                    </div><!-- callout-content -->
                                    
                                </div><!-- callout-block -->
                                
                                            
                                                    
                                <div class="callout-block last round shadow left">
                                
									                                    <h2 class="callout-title">
                                    	<a href="accomodation.php">
											Amenities & Facilities										</a>
									</h2><!-- callout-title -->
                                                                        
                                                                        <div class="callout-image">
                                        <div class="callout-image-container image-overlay image left">
                                                                                        <a href="accomodation.php">
                                                <img width="316" height="120" src="images/reservation.jpg" class="attachment-callout wp-post-image" alt="" title="" />                                                <span><span></span></span>
                                            </a>
                                                                                    </div><!-- callout-image-container -->
                                    </div><!-- callout-image -->
                                                                        
                                    <div class="callout-content round-bottom left">
                                    	<div class="callout-content-container">
                                        
<!--<p style="text-align:left; padding-left:55px;">-->
<div style="text-align:left; padding-left:55px;">
<li>24 hours check in.</li>
<li>24 hours Room Service.</li>
<li>24 Hours AC Backup.</li>
<li>24 hours Generator backup.</li>
<li>Direct Dialling STD / ISD.</li>
<li>Cordless Telephones. </li>
<li>LCD television. </li>
<li>71 Satellite TV Channels.</li>
</div>


                                            
                                                                                            <div class="button-standard button">
                                                    <a href="accomodation.php">
                                                        More Amenities & Facilities                                                    </a>
                                                </div>
                                                                                        
                                        <br class="clear" />
                                        </div><!-- callout-content-container -->
                                    </div><!-- callout-content -->
                                    
                                </div><!-- callout-block -->
                                
                                <br class="clear" />            
                    
                </div><!-- callouts -->

                                                        
                                
                                                        
                
                <div class="list-posts-home list-posts left">
                    
                                            
<div id="SlideItMoo_outer">	
		<div class="SlideItMoo_back"><!--slide back button--></div>
        <div id="SlideItMoo_inner">			
			<div id="SlideItMoo_items">
				<div class="SlideItMoo_element">
                	<strong>Hotel Alankar</strong>
                    	<img src="gallery/thumb/001.jpg" />
                        Hotel Alankar
                </div>	
				<div class="SlideItMoo_element">
                	<strong>Cuisine</strong>
                    	<img src="gallery/thumb/002.jpg" />
                        Cuisine
                </div>
				<div class="SlideItMoo_element">
                	<strong>Gossip</strong>
                    	<img src="gallery/thumb/003.jpg" />
                    Gossip   
                </div>
				<div class="SlideItMoo_element">
                	<strong>Topaz</strong>
                    	<img src="gallery/thumb/004.jpg" />
                        Topaz
                </div>
				<div class="SlideItMoo_element">
                	<strong>South East</strong>
                		<img src="gallery/thumb/005.jpg" />
                        South East
                </div>
				<div class="SlideItMoo_element">
                	<strong>Tiffinys</strong>
                    	<img src="gallery/thumb/006.jpg" />
                        Tiffinys
                </div>
				<div class="SlideItMoo_element">
                	<strong>Facilities</strong>
                    	<img src="gallery/thumb/007.jpg" />
                        Facilities
                </div>
				<div class="SlideItMoo_element">
                	<strong>Restaurants</strong>
                    	<img src="gallery/thumb/008.jpg" />
                        Restaurants
                </div>
				<div class="SlideItMoo_element">
                	<strong>Accomodation</strong>
                    	<img src="gallery/thumb/009.jpg" />
                        Accomodation
                </div>
				<div class="SlideItMoo_element">
                	<strong>Rooms</strong>
                    	<img src="gallery/thumb/010.jpg" />
                        Rooms
                </div>				
			</div>			
		</div>
        <div class="SlideItMoo_forward"><!--slide forward button--></div>
	</div><!-- post -->
                  <!-- post -->
                  <!-- post -->
                  <br class="clear" />
                </div><!-- list-posts -->
        
        	<br class="clear" />          
            </div><!-- content-container -->
        </div><!-- content -->


    <br class="clear" />
    </div><!-- canvas -->
    
    <!--<div class="widget-area-footer left">
        <div class="widget-area-footer-container">
            
		            <div class="widget-area-footer-left widget-area left">
                <div id="widget_about_box-2" class="widget-block left widget_about_box"><h3 class="widget-title">About us</h3><div class="widget-content left">Linguini is a theme perfect fit for the restaurants, pubs, bars, wineries and other companies offering foods and drinks. Linguini theme offers an excellent system for administration menu cards and photogalleries.<br class="clear" /></div>		<div class="button-standard button">
        	<a href="about-linguini/index.html" title="More about us">More about us &rsaquo;</a>
		</div>
        <br class="clear" /></div><div id="widget_testimonial-3" class="widget-block left widget_testimonial"><div class="testimonial"><div class="testimonial-content">Pick some gravy, use good wine or six persons nearly two hours or shallots. When ready some small bunch round.</div></div><div class="testimonial-author">John Doe</div><br class="clear" /></div>            </div>
                
                    <div class="widget-area-footer-center widget-area left">
                <div id="widget_tweets-2" class="widget-block left widget_tweets"><h3 class="widget-title">Latest tweets</h3>		
            <script type="text/javascript">
			//<![CDATA[
                jQuery(document).ready(function(){
                    jQuery("#widget_tweets5020b73cabcc6").tweet({
                        username: "smashingmag",
                        avatar_size: 0,
                        count: 3,
                        loading_text: 'Loading latest tweets ...',
						loading_text: 'Loading latest tweets ...'
						auto_join_text_default: "'we said,'", 
						auto_join_text_ed: "we",
						auto_join_text_ing: "we were",
						auto_join_text_reply: "we replied to",
						auto_join_text_url: "we were checking out",
                    });
                });
			//]]>
            </script>
            <div class="widget-content">
            	<div id="widget_tweets5020b73cabcc6"></div>
			<br class="clear" />
			</div>
            
								<div class="button-standard button">
						<a href="http://twitter.com/smashingmag" title="Follow smashingmag on Twitter">
							Follow us on Twitter &rsaquo;
						</a>
					</div>
						
                
		<br class="clear" /></div>            </div>
                
                    <div class="widget-area-footer-right widget-area left">
                <div id="widget_opening_hours-2" class="widget-block left widget_opening_hours"><h3 class="widget-title">Opening hours</h3>			<div class="day left"><strong class="left">Monday</strong> <span class="right">12:00 AM - 12:00 PM</span></div>
        			<div class="day left"><strong class="left">Tuesday</strong> <span class="right">12:00 AM - 12:00 PM</span></div>
        			<div class="day left"><strong class="left">Wednesday</strong> <span class="right">Closed</span></div>
        			<div class="day left"><strong class="left">Thursday</strong> <span class="right">12:00 AM - 12:00 PM</span></div>
        			<div class="day left"><strong class="left">Friday</strong> <span class="right">12:00 AM - 12:00 PM</span></div>
        			<div class="day left"><strong class="left">Saturday</strong> <span class="right">12:00 AM - 12:00 PM</span></div>
        			<div class="day last left"><strong class="left">Sunday</strong> <span class="right">Closed</span></div>
        <br class="clear" /></div>            </div>
                
                <br class="clear" />
                </div>
    </div>--><!-- footer-areas -->
    
    <? include("footer.php"); ?><!-- footer -->
 <script type='text/javascript' src='js/jquery/ui/jquery.ui.core.mine8d2.js?ver=1.8.20'></script>



</body>

</html>

