<?
include("common/config.php");
include("common/functions.php");
check_login();

if($_GET[ID]!="")
{
	$RID=$_GET[ID];
	$SelectRole=mysql_fetch_object(mysql_query("select * from gt_item where ID='$RID'"));	
	$_POST[ItemCategory]=$SelectRole->ItemCategory;
	$_POST[Item]=$SelectRole->Item;
}

if($_POST[UpdateClass]=="Update Item")
{
		$RID=$_GET[ID];
		
		mysql_query("UPDATE `gt_itemcategory` SET `ItemCategory` = '$_POST[ItemCategory]', `Item`='$_POST[Item]' WHERE `ID`=$RID");
		redirect_to("itemManagement.php?msg=Updated");
		
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
    	<div class="title"><h5>Item Management - Update Item</h5></div>
        
        <!-- Statistics -->
        <div class="stats" align="right">
            	<a href="itemManagement.php" title="Back to Item Management" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/arrowLeft.png" alt="Back to Item Management" class="icon" /><span>Back to Item Management</span></a>
        </div>
        <?
        if($_GET[action]=="err")
		{
		?>
        	<div class="nNote nFailure hideit">
                <p><strong>FAILURE: </strong>Oops sorry. The Item is already in Database.</p>
            </div>
        <?
		}
		?>
        
        <!-- Form with validation -->
        <form action="" name="class" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="widget">    
                    <div class="head"><h5 class="iLocked2">Add New Item</h5></div>
                    <div class="rowElem noborder">
                        <label>Select Item Category :</label>
                        <div class="formRight">                           
                           	<select name="ItemCategory">
                             <option value="None">None</option>
                            <?
							$selc=mysql_query("select * from gt_itemcategory");
							while($Fetchcategory=mysql_fetch_object($selc))
							{
							?>
                                <option value="<?=$Fetchcategory->ItemCategory?>" <? if($_POST[ItemCategory]=="$Fetchcategory->ItemCategory") echo "selected"; ?>><?=$Fetchcategory->ItemCategory?></option>
                            <?    
							}
							?>	
                               
                            </select>
                        </div>
                        <div class="fix"></div>
                    
                        <label>Item Name :</label>
                        <div class="formRight">                           
                           	<input id="Item" name="Item" class="validate[required]" type="text" value="<?=$_POST[Item]?>"  />                            
                        </div>
                        <div class="fix"></div>
                    </div>                  
                    <input name="AddClass" type="submit" class="greyishBtn submitForm" id="AddClass" value="Update Item" />
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
