<?
include("common/config.php");
include("common/functions.php");
check_login();

if($_GET[action]=="delete")
{
	
	mysql_query("delete from booking where ID='$_GET[ID]'");
	redirect_to("BookedRooms.php?msg=Deleted");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$AdminTitle?></title>
<script type="text/javascript">
function check_del()
{
	var check_result=confirm("Deleting... This Field will be deleted from the DataBase .  Are You sure want to delete?");
	if(check_result==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>
<link href="css/main.css" rel="stylesheet" type="text/css" />

<? include("common/javascript.php"); ?>

</head>

<body>

<!-- Top navigation bar -->
<? include("topNav.php"); ?>

<!-- Header -->
<? include("header.php"); ?>


<!-- Content wrapper -->
<div class="wrapper">
	
	<!-- Left navigation -->
    <? include("leftNav.php"); ?>    
    
    <!-- Content -->
    <div class="content">
    	<div class="title"><h5>Booked Room Management</h5></div>
        
        <!-- Large buttons with icons and text -->
         <!--<div class="stats" align="right">
            	<a href="newRoom.php" title="Add New Room" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/pencil.png" alt="Add New Item" class="icon" /><span>Add New Room</span></a>
        </div>-->
        
    <?php /*?>    <?
        if($_GET[action]=="inserted")
		{
		?>
        	<div class="nNote nSuccess hideit">
                <p><strong>SUCCESS: </strong>Room has been Successfully Added to the Database!</p>
            </div>
        <?
		}
		?>
        <?
        if($_GET[msg]=="Updated")
		{
		?>
        	<div class="nNote nSuccess hideit">
                <p><strong>SUCCESS: </strong>Room has been Successfully Updated in the Database!</p>
            </div>
        <?
		}
		?>
        <?
        if($_GET[msg]=="Deleted")
		{
		?>
        	<div class="nNote nSuccess hideit">
            <p><strong>SUCCESS: </strong>Room has been Successfully Deleted from Database!</p>
            </div>
        <?
		}
		?><?php */?>
                
        <!-- Dynamic table -->
        <div class="table">
            <div class="head"><h5 class="iFrames">Booked Room Details</h5></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Reservation ID</th>
                        <th>Name</th>
						<th>Email</th>
						<th>Telephone</th>
						<th>Arrival</th>
						<th>Departure</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?
				$roomSelect=mysql_query("select * from booking");
				$roomNo=mysql_num_rows($roomSelect);
				if($roomNo!="0")
				{
					$s=1;
					while($roomFetch=mysql_fetch_object($roomSelect))
					{
				?>
                    <tr class="gradeA">
                        <td><?=$s?></td>
                        <td><?=$roomFetch->rid?></td>
                        <td><?=$roomFetch->Title?>.<?=$roomFetch->Firstname?><?=$roomFetch->Lastname?></td>
						<td><?=$roomFetch->Email?></td>
						<td><?=$roomFetch->Telephone?></td>
						<td><?=$roomFetch->Arrival?></td>
						<td><?=$roomFetch->Departure?></td>
                        <td>                        
                        <a href="viewBookedRoom.php?ID=<?=$roomFetch->ID?>" title="View" class="btn14 mr5">View</a> 
                        <!--<a href="BookedRooms.php?ID=<?=$roomFetch->ID?>&action=delete" title="Delete this Class" onClick="return check_del();" class="btn14 mr5"><img src="images/icons/dark/close.png" alt="" /></a>-->
                        </td>
                    </tr> 
                <?
					$s++;
					}
				}
				?>
                </tbody>
            </table>
        </div>
        
        
        <!-- Widgets -->
        
    </div>
    <div class="fix"></div>
</div>

<!-- Footer -->
<? include("footer.php"); ?>

</body>
</html>