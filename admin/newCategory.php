<?
include("common/config.php");
include("common/functions.php");
check_login();

if($_POST[AddClass]=="Add Category")
{
	$SelectRole=mysql_num_rows(mysql_query("select * from gt_itemcategory where ItemCategory='$_POST[ClassRoom]'"));
	if($SelectRole=="0")
	{	
		mysql_query("INSERT INTO `gt_itemcategory` (`ItemCategory`, `Approval`, `CreatedDate`) VALUES ('$_POST[ClassRoom]', '1', now())");
		redirect_to("categoryManagement.php?action=inserted");	
	}
	else
	{
		redirect_to("newCategory.php?action=err");
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
    	<div class="title"><h5>Category Management - Add New Item Category</h5></div>
        
        <!-- Statistics -->
        <div class="stats" align="right">
            	<a href="categoryManagement.php" title="Back to Category Management" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/arrowLeft.png" alt="Back to Class Management" class="icon" /><span>Back to Category Management</span></a>
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
        <form action="" name="class" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="widget">    
                    <div class="head"><h5 class="iLocked2">Add New Category</h5></div>
                    <div class="rowElem noborder">
                        <label>Item Category Name :</label>
                        <div class="formRight">                           
                           	<input id="ClassRoom" name="ClassRoom" class="validate[required]" type="text" value="<?=$_POST[ClassRoom]?>"  />                            
                        </div>
                        <div class="fix"></div>
                    </div>                   
                    <input name="AddClass" type="submit" class="greyishBtn submitForm" id="AddClass" value="Add Category" />
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
