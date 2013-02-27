<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />

	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script src="http://oxygencreations.com/alankar1/js/datepickere735.js?ver=3.4"></script>
	
  <script type="text/javascript">
  jQuery(function (){

      $("#datepicker_checkin").datepicker({
			dateFormat: "dd-mm-yy",
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
</script> 
<form action="reserve.php" method="post" name="search">
                    <table width="232" border="0" cellspacing="10" cellpadding="5" align="center">
  <tr>
    <td colspan="2"><strong></strong></td>
  </tr>
  
  <tr>
    <td colspan="2">Select a Room Type</td>
    </tr>
  <tr>
    <td colspan="2">
	<select name="RoomType" id="RoomType" onchange="showUser(this.value)">
      <option>Select Room Type</option>
	  <?php 
	  $rom_type_sql=mysql_query("select * from gt_room_type");
	while($fecth_rom_type=mysql_fetch_array($rom_type_sql))
	{?>
	<option value="<?php echo $fecth_rom_type['room_type'];?>"><?php echo $fecth_rom_type['room_type'];?></option>
	<?php }?>
    </select>
	</td>
    </tr>
	
  <tr>
    <td colspan="2">Arrival</td>
	<td colspan="2" align="left">Departure</td>
    </tr>
  <tr>
	<?php
	$tomorrow_epoch = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
	$tomorrow_date = date("d-m-20y", $tomorrow_epoch);?>
	<td colspan="2">
	<input name="arrivaldate_datepicker" type="text" class="required" id="datepicker_checkin" title="Please select a date!"  size="20" maxlength="30" style="width:70px;padding:0px;"  /><img src="images/icon_cal_start.gif" style="margin-top:5px;margin-left:5px;" /></td>
	<td colspan="2" align="left">
	<input name="departuredate_datepicker" type="text" class="required" id="datepicker_checkout" title="Please select a date!" value="<?echo $tomorrow_date;?>" value="<?=$_POST[departuredate_datepicker]?>" size="20" maxlength="30" style="width:70px;padding:0px;" /> <img src="images/icon_cal_start.gif" style="margin-top:5px;margin-left:5px;" /></td>
    </tr>
	 <tr>
    <td width="50%" align="left">Unit(s)</td>
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
	<input id="numDays" value="1" readonly='true' style="padding: 0px;width: 15px;background-color: #fff;color: #000;text-align: center;"/>
	</td>
    </tr>
  
  <tr>
    <td align="center"><div class="button-standard button"><input type="submit" name="Reserve" id="Reserve" value="Reserve" /></div></td>

	<td align="center"><div class="button-standard button"><a href="modify.php?edit_id=1" class="modi-reg">Modify</a></div></td>

  	<td align="center"><div class="button-standard button"><a href="modify.php?view_id=1" >View</a></div></td>

	<td align="center"><div class="button-standard button"><a href="modify.php?cancel_id=1" class="modi-reg">Cancel</a></div></td>
  </tr>

</table>

                    </form>
