<?
include("common/config.php");
include("common/functions.php");
check_login();

if($_POST[AddClass]=="Add Room Type")
{
	$SelectRole=mysql_num_rows(mysql_query("select * from gt_room_type where room_type='".$_POST['roomCat']."' "));
	if($SelectRole=="0")
	{	
		mysql_query("INSERT INTO `gt_room_type` (`room_type`, `room_content`, `room_visible`, `CreatedDate`) VALUES ('$_POST[roomCat]', '$_POST[visible]', '$_POST[roomContent]', now())");
		redirect_to("roomTypes.php?action=inserted");	
	}
	else
	{
		redirect_to("newroomType.php?action=err");
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
    	<div class="title"><h5>Room  anagement - Add New Room Type</h5></div>
        
        <!-- Statistics -->
        <div class="stats" align="right">
            	<a href="roomTypes.php" title="Back to Category Management" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/arrowLeft.png" alt="Back to Class Management" class="icon" /><span>Back to Room Management</span></a>
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
        <form action="" name="class" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="widget">    
                    <div class="head"><h5 class="iLocked2">Add New Room Type</h5></div>
					<div class="rowElem">
                        <label>Visible :</label>
                        <div class="formRight">                           
                           	<input id="visible" name="visible" type="radio" value="yes" checked="checked"/>                            Yes<div class="fix"></div>
							<input id="visible" name="visible" type="radio" value="no"/>
							No
                        </div>
						<div class="fix"></div></div>
						
                    <div class="rowElem">
                        <label>Room Category Name :</label>
                        <div class="formRight">                           
                           	<input id="roomCat" name="roomCat" class="validate[required]" type="text" value="<?=$_POST[roomCat]?>"  />                            
                        </div>
						<div class="fix"></div></div>
						
						<div class="rowElem"><label>Room Content :</label><div class="formRight">
                      <textarea name="roomContent" id="roomContent" rows="30" class="auto"><?=$_POST[roomContent]?></textarea>
                    </div><div class="fix"></div></div>                  
                    <input name="AddClass" type="submit" class="greyishBtn submitForm" id="AddClass" value="Add Room Type" />
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
