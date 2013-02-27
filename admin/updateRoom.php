<?
include("common/config.php");
include("common/functions.php");
check_login();

if($_GET[ID]!="")
{
	$RID=$_GET[ID];
	$SelectRole=mysql_fetch_object(mysql_query("select * from gt_room where room_id='$RID'"));	
	$GetRoomType=$SelectRole->room_cat_id;
	$GetRoom=$SelectRole->room;
}

if($_POST[UpdateClass]=="Update Room")
{
		$RID=$_GET[ID];
		
		//echo "UPDATE `gt_room` SET `room_cat_id` = '".$_POST['room_type']."', `room`='".$_POST['room_no']."' WHERE room_id=$RID";
		
		mysql_query("UPDATE `gt_room` SET `room_cat_id` = '".$_POST['room_type']."', `room`='".$_POST['room_no']."'' WHERE room_id=$RID");
		redirect_to("rooms.php?msg=Updated");
		
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$AdminTitle?></title>

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
    	<div class="title"><h5>Room Management - Update Room</h5></div>
        
        <!-- Statistics -->
        <div class="stats" align="right">
            	<a href="rooms.php" title="Back to Item Management" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/arrowLeft.png" alt="Back to Item Management" class="icon" /><span>Back to Room Management</span></a>
        </div>
        <?
        if($_GET[action]=="err")
		{
		?>
        	<div class="nNote nFailure hideit">
                <p><strong>FAILURE: </strong>Oops sorry. The Room is already in Database.</p>
            </div>
        <?
		}
		?>
        
        <!-- Form with validation -->
        <form action="" name="class" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="widget">    
                    <div class="head"><h5 class="iLocked2">Update Room</h5></div>
                    <div class="rowElem noborder">
                        <label>Select Room Type :</label>
                        <div class="formRight">                           
                           	<select name="room_type">
                             <option value="None">None</option>
                            <?
							$selc=mysql_query("select * from gt_room_type");
							while($Fetchcategory=mysql_fetch_object($selc))
							{
							?>
                                <option value="<?=$Fetchcategory->room_type?>" <? if($GetRoomType=="$Fetchcategory->room_type") echo "selected"; ?>><?=$Fetchcategory->room_type?></option>
                            <?    
							}
							?>	
                               
                            </select>
                        </div>
                        <div class="fix"></div>
                    
                        <label>Room No :</label>
                        <div class="formRight">                           
                           	<input id="room_no" name="room_no" class="validate[required]" type="text" value="<?=$GetRoom?>"  />                            
                        </div>
                        <div class="fix"></div>
                    </div>                  
                    <input name="UpdateClass" type="submit" class="greyishBtn submitForm" id="UpdateClass" value="Update Room" />
                    <div class="fix"></div>
                        
                </div>
            </fieldset>
        </form> 
                
        <!-- Charts -->
        
        
        <!-- Calendar -->
        
        
        <!-- Full width tabs --> 
        
        
        <!-- Dynamic table -->
        
        
        
        <!-- Widgets -->
        
    </div>
    <div class="fix"></div>
</div>

<!-- Footer -->
<? include("footer.php"); ?>

</body>
</html>
