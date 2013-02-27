<?
include("common/config.php");
include("common/functions.php");
check_login();

if($_GET[ID]!="")
{
	$RID=$_GET[ID];
	$SelectRole=mysql_fetch_object(mysql_query("select * from gt_room_type where room_id='$RID'"));	
	$GetRoom=$SelectRole->room_type;
	$GetVisible=$SelectRole->room_visible;
	$GetContent=$SelectRole->room_content;
}

if($_POST[UpdateClass]=="Update Category")
{
		$RID=$_GET[ID];
		//echo "UPDATE `gt_room_type` SET `room_type` = '$_POST[roomCat]', `room_visible` ='$_POST[room_visible]', `room_content` = '$_POST[roomContent]' WHERE `room_id`=$RID";
		
		mysql_query("UPDATE `gt_room_type` SET `room_type` = '$_POST[roomCat]', `room_visible` ='$_POST[room_visible]' ,`room_content` = '$_POST[roomContent]' WHERE `room_id`=$RID");
		redirect_to("roomTypes.php?msg=Updated");
		
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
    	<div class="title"><h5>Room Management - Update Room Type</h5></div>
        
        <!-- Statistics -->
        <div class="stats" align="right">
            	<a href="roomTypes.php" title="Back to Room Management" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/arrowLeft.png" alt="Back to Category Management" class="icon" /><span>Back to Room Management</span></a>
        </div>
        <?
        if($_GET[action]=="err")
		{
		?>
        	<div class="nNote nFailure hideit">
                <p><strong>FAILURE: </strong>Oops sorry. The Room Type is already in Database.</p>
            </div>
        <?
		}
		?>
        
        <!-- Form with validation -->
        <form action="" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="widget">    
                    <div class="head"><h5 class="iLocked2">Update Room Type</h5></div>
					<div class="rowElem">
                        <label>Visible :</label>
                          <div class="formRight">                     
                           	<input id="room_visible" name="room_visible" type="radio" value="yes" <?php if($GetVisible == "yes"){ echo "checked='checked'";}?>/>Yes<div class="fix"></div>
							<input id="room_visible" name="room_visible" type="radio" value="no" <?php if($GetVisible == "no"){ echo "checked='checked'";}?>/>No
                       </div>
						<div class="fix"></div></div>
						
                    <div class="rowElem">
                        <label>Room Type :</label>
                        <div class="formRight">                           
                           	<input id="roomCat" name="roomCat" class="validate[required]" type="text" value="<?=$GetRoom?>"  />                            
                        </div><div class="fix"></div></div>   
						
						<div class="rowElem"><label>Room Content :</label><div class="formRight">
                      <textarea name="roomContent" id="roomContent" class="auto"><?=$GetContent?></textarea>
                    </div><div class="fix"></div></div>
             
                    <input name="UpdateClass" type="submit" class="greyishBtn submitForm" id="UpdateClass" value="Update Category" />
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
