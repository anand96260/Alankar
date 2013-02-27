<?php
echo $q=$_GET["q"];
include("admin/common/config.php");
?>  
<select class="text-input" style="text-transform:capitalize" name="Room" id="Room">
<option value="">Select Room</option>
<?php
$sql="SELECT * FROM gt_room WHERE room_cat_id = '".$q."'";
echo "SELECT * FROM gt_room WHERE room_cat_id = '".$q."'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
?>
<option value="<?php echo $row['room'];?>"><?php echo $row['room'];?></option>
<?php } ?>
                  
</select>