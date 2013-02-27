<?
include("common/config.php");
include("common/functions.php");
check_login();

if($_GET[ID]!="")
{
	$RID=$_GET[ID];
	$SelectRole=mysql_fetch_object(mysql_query("select * from gt_itemcategory where ID='$RID'"));	
	$GetClass=$SelectRole->ItemCategory;
}

if($_POST[UpdateClass]=="Update Category")
{
		$RID=$_GET[ID];
		
		mysql_query("UPDATE `gt_itemcategory` SET `ItemCategory` = '$_POST[ItemCategory]' WHERE `ID`=$RID");
		redirect_to("categoryManagement.php?msg=Updated");
		
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
    	<div class="title"><h5>Category Management - Update Item Category</h5></div>
        
        <!-- Statistics -->
        <div class="stats" align="right">
            	<a href="categoryManagement.php" title="Back to Category Management" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/arrowLeft.png" alt="Back to Category Management" class="icon" /><span>Back to Category Management</span></a>
        </div>
        <?
        if($_GET[action]=="err")
		{
		?>
        	<div class="nNote nFailure hideit">
                <p><strong>FAILURE: </strong>Oops sorry. The Category is already in Database.</p>
            </div>
        <?
		}
		?>
        
        <!-- Form with validation -->
        <form action="" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="widget">    
                    <div class="head"><h5 class="iLocked2">Update Category</h5></div>
                    <div class="rowElem noborder">
                        <label>Item Category :</label>
                        <div class="formRight">                           
                           	<input id="ItemCategory" name="ItemCategory" class="validate[required]" type="text" value="<?=$GetClass?>"  />                            
                        </div>
                        <div class="fix"></div>
                    </div>                   
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
