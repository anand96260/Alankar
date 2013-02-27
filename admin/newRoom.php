<?
include("common/config.php");
include("common/functions.php");
check_login();

if($_POST[AddClass]=="Add Room")
{
		
	$SelectRole=mysql_num_rows(mysql_query("select * from gt_room where room='".$_POST['room_no']."' "));
	if($SelectRole=="0")
	{	
		mysql_query("INSERT INTO `gt_room` (`room_cat_id`,`room`,`CreatedDate`) VALUES ('$_POST[room_type]', '$_POST[room_no]',now())");
		redirect_to("rooms.php?action=inserted");
	}
	
	else
	{
	redirect_to("newroom.php?action=err");
	}
	
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
    	<div class="title"><h5>Room Management - Add New Room</h5></div>
        
        <!-- Statistics -->
        <div class="stats" align="right">
            	<a href="rooms.php" title="Back to Item Management" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/arrowLeft.png" alt="Back to Room Management" class="icon" /><span>Back to Room Management</span></a>
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
                    <div class="head"><h5 class="iLocked2">Add New Room</h5></div>
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
                                <option value="<?=$Fetchcategory->room_type?>"><?=$Fetchcategory->room_type?></option>
                            <?    
							}
							?>	
                               
                            </select>
                        </div>
                        <div class="fix"></div>
                    
                        <label>Room No :</label>
                        <div class="formRight">                           
                           	<input id="room_no" name="room_no" class="validate[required]" type="text" value="<?=$_POST[room_no]?>"  />                            
                        </div>
                        <div class="fix"></div>
                    </div>                  
                    <input name="AddClass" type="submit" class="greyishBtn submitForm" id="AddClass" value="Add Room" />
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