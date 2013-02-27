<html>

<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />

	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script src="http://oxygencreations.com/alankar1/js/datepickere735.js?ver=3.4"></script>
	
  <script type="text/javascript">
  $(document).ready(function(){

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
	
</head>

<body>
	
			<?
			$tomorrow_epoch = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
			$tomorrow_date = date("d-m-20y", $tomorrow_epoch);?>
			<input type="text" id="datepicker_checkin" name="arrivaldate_datepicker" readonly />
			<input type="text" id="datepicker_checkout" name="departuredate_datepicker" value="<?echo $tomorrow_date;?>" readonly /><br/>
			<input id="numDays" value="1" readonly='true'/>
	<?php
/*
     $now = time(); // or your date as well
     $your_date = strtotime("2013-02-01");
     $datediff = $now - $your_date;
     echo floor($datediff/(60*60*24));
	 echo "<br>";
	echo $now; 
	echo "<br>";
	echo $your_date;
	*/
?>
	
</body>
</html>
