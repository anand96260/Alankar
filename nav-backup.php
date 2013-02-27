<div class="rail-left sidebar left">
                    
                        <div class="widget-area-sidebar widget-area left">
	<!--<div id="nav_menu-2" class="widget-block left widget_nav_menu"><div class="menu-secondary-navigation-container"><ul id="menu-secondary-navigation" class="menu"><li id="menu-item-265" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-204 current_page_item menu-item-265"><a href="index.html">About Linguini</a></li>
<li id="menu-item-269" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-269"><a href="../food-menu/index.html">Food menu</a></li>
<li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268"><a href="../drink-menu/index.html">Drink menu</a></li>
<li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267"><a href="../reservation/index.html">Reservation</a></li>
<li id="menu-item-271" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-271"><a href="../photogallery/index.html">Photogallery</a></li>
<li id="menu-item-270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-270"><a href="../blog/index.html">Blog</a></li>
<li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="../contact-us/index.html">Contact us</a></li>
</ul></div><br class="clear" /></div>-->


<h3 class="widget-title">Quick Reservation</h3>
<div id="searchboxleft">
                    
                    <form action="" method="post" name="search">
                    <table width="232" border="0" cellspacing="10" cellpadding="5" align="center">
  <tr>
    <td width="5" rowspan="14" ></td>
    <td colspan="2"><strong></strong></td>
  </tr>
  
  <tr>
    <td colspan="2">Select a Room Type</td>
    </tr>
  <tr>
    <td colspan="2"><select name="RoomType" id="RoomType">
      <option>Select Room Type</option>
      <option value="Standard" <? if($_POST[RoomType]=="Standard") echo "selected"; ?>>Standard Room</option>
      <option value="Deluxe" <? if($_POST[RoomType]=="Deluxe") echo "selected"; ?>>Deluxe Room</option>
      <option value="Suite" <? if($_POST[RoomType]=="Suite") echo "selected"; ?>>Suite Room</option>
      <option value="GrandSuite" <? if($_POST[RoomType]=="GrandSuite") echo "selected"; ?>>Grand Suite Room</option>
    </select></td>
    </tr>
  <tr>
    <td colspan="2">Arrival</td>
    </tr>
  <tr>
    <td colspan="2"><input name="arrivaldate_datepicker" type="text" class="required" id="arrivaldate_datepicker" title="Please select a date!"  size="20" maxlength="30" style="width:160px;" value="<?=$_POST[arrivaldate_datepicker]?>" /></td>
    </tr>
  <tr>
    <td colspan="2" align="left">Departure</td>
    </tr>
  <tr>
    <td colspan="2" align="left"><input name="departuredate_datepicker" type="text" class="required" id="departuredate_datepicker" title="Please select a date!" value="<?=$_POST[departuredate_datepicker]?>" size="20" maxlength="30" style="width:160px;" /></td>
    </tr>
  <tr>
    <td width="50%" align="left">Unit(s)</td>
    <td align="left">Adults/Unit</td>
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
    </tr>
  <tr>
    <td align="left">Children</td>
    <td align="left">Nights</td>
    </tr>
  <tr>
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
    <td align="left"><select name="nights" id="nights">
      <? for($n=0;$n<7;$n++)
	{
	?>
      <option value="<?=$n?>" <? if($_POST[nights]==$n) echo "selected"; ?>>
        <?=$n?>
        </option>
      <?
	  }
	  ?>
    </select></td>
    </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    </tr>
  <tr>
    <td align="center"><input type="submit" name="Reserve" id="Reserve" value="Reserve" /></td>
    <td align="center"><input type="button" name="Modify" id="Modify" value="Modify" /></td>
  </tr>
  <tr>
    <td align="center"><input type="button" name="View" id="View" value="View" style="width:75px;" /></td>
    <td align="center"><input type="button" name="Cancel" id="Cancel" value="Cancel" /></td>
  </tr>
  <tr>
    <td ></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
</table>

                    </form>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
	<div id="widget_contact-2" class="widget-block left widget_contact"><h3 class="widget-title">Quick contact</h3><p></p>    
        
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
						contact_quick_phone: 'Please fill the message!'
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
			
			<form action="#" id="form-contact-quick" class="form form-widget" method="post">
				
				<fieldset>
					
					<div class="form-block left">
                        
                        <div class="input-box-quick left">
                            <input name="contact_quick_name" id="contact_quick_name" title="Please fill your name!" class="required" type="text" value="Name" />
                        </div>
                        
                        <div class="input-box-quick left">
                            <input name="contact_quick_phone" id="contact_quick_phone" title="Please fill your phone number!" type="text" value="Phone" />
                        </div>

                        
                        <div class="input-box-quick left">
                            <input name="contact_quick_email" id="contact_quick_email" title="Please fill your email address!" class="required email" type="text" value="Email" />
                        </div>
                        
                        <div class="input-box-quick left">
                            <textarea name="contact_quick_message" id="contact_quick_message" class="required" cols="110" rows="5" title="Please fill the message!">Message</textarea>
                        </div><!-- input-box-wide -->
                        
                    </div>

                    <div class="buttons left">
                        <button type="submit" name="button-submit" class="button-standard left" title="Send email">Send email</button>
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