<script type="text/javascript">
function showUser(str)
{
//alert("hello");
if (str=="")
  {
  document.getElementById("Room").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Room").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getroom.php?q="+str,true);
xmlhttp.send();
}
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
.ui-datepicker-trigger{
background-color:rgba(0,0,0,0);
padding:0px;
margin-left:5px;
margin-bottom:-5px;
margin-top:4px;
background-image:url("icon.png");
box-shadow:0 1px 1px rgba(0,0,0,0);
}
		</style>
<div class="rail-left sidebar left">
                    
 <div class="widget-area-sidebar widget-area left">
	

<h3 class="widget-title">Quick Reservation</h3>
<div id="searchboxleft">
                    
                    <form action="reserve.php" method="post" name="search" >
                    <table width="232" border="0" cellspacing="10" cellpadding="5" align="center" style="color:#fff;">
   
  <tr>
    <td colspan="2">Select a Room Type</td>
    </tr>
  <tr>
    <td colspan="2">
	<select name="RoomType" id="RoomType" onchange="showUser(this.value)">
      
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
	$tomorrow_date = date("d-m-20y", $tomorrow_epoch);?>
	<td colspan="2">
	<input name="arrivaldate_datepicker" readonly type="text" class="required" id="datepicker_checkin" title="Please select a date!"  size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;"  /></td>
	<td colspan="2" align="left">
	<input name="departuredate_datepicker" readonly type="text" class="required" id="datepicker_checkout" title="Please select a date!" value="<?echo $tomorrow_date;?>" value="<?=$_POST[departuredate_datepicker]?>" size="20" maxlength="30" style="width:70px;padding:0px;background-color: #fff;color: #000;" /> </td>
    </tr>
	</table>
	<table width="232" border="0" cellspacing="5" cellpadding="5" align="center" style="color:#fff;">
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
    <td align="center" style="color:#fff;">
	<input type="submit" name="Reserve" id="Reserve" value="Reserve" class="button"/></td>
	<td align="center"><a href="modify.php?edit_id=1">Modify</a> | <a href="modify.php?view_id=1" >View</a> | <a href="modify.php?cancel_id=1">Cancel</a></td>
  </tr>

</table>

                    </form>

                    </div>
                    
	<div id="widget_contact-2" class="widget-block left widget_contact"><h3 class="widget-title">Quick contact</h3><p></p>    
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
	<script src="http://oxygencreations.com/alankar1/js/datepickere735.js?ver=3.4"></script>
		 <script type="text/javascript">
		  ;(function($) {
  $("document").ready(function() {

      $("#datepicker_checkin").datepicker({
			dateFormat: "dd-mm-yy",
			minDate:0,
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

      $("#datepicker_checkin").datepicker('setDate', new Date());
		
  });
    })(jQuery);
</script> 
		
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

		<div class="form-contact-quick">
			
			<form action="#" id="form-contact-quick" class="form form-widget" method="post" style="padding-left:7px">
				
				<fieldset>
					
					<div class="form-block left">
                        
                        <div class="input-box-quick left">
                            <input name="contact_quick_name" id="contact_quick_name" title="Please fill your name!" class="required" type="text" value="Name" style="padding:0px;" required />
                        </div>
                        
                        <div class="input-box-quick left">
                            <input name="contact_quick_phone" id="contact_quick_phone" title="Please fill your phone number!" type="text" value="Phone" style="padding:0px;"/>
                        </div>

                        
                        <div class="input-box-quick left">
                            <input name="contact_quick_email" id="contact_quick_email" title="Please fill your email address!" class="required email" type="text" value="Email" style="padding:0px;" required />
                        </div>
                        
                        <div class="input-box-quick left">
                            <textarea name="contact_quick_message" id="contact_quick_message" class="required" cols="110" rows="5" title="Please fill the message!" required style="padding:0px;">Message</textarea>
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
			
			</div><!-- form-contact-quick -->

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
    
    <br class="clear" /></div></div>
                        
					<br class="clear" />
                    </div>