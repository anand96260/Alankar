<?
include("common/config.php");
include("common/functions.php");
check_login();

if($_GET[action]=="delete")
{
	
	mysql_query("delete from gt_item where ID='$_GET[ID]'");
	redirect_to("itemManagement.php?msg=Deleted");
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
    	<div class="title"><h5>Item Management</h5></div>
        
        <!-- Large buttons with icons and text -->
         <div class="stats" align="right">
            	<a href="newItem.php" title="Add New Item Category" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/pencil.png" alt="Add New Item" class="icon" /><span>Add New Item</span></a>
        </div>
        
        <?
        if($_GET[action]=="inserted")
		{
		?>
        	<div class="nNote nSuccess hideit">
                <p><strong>SUCCESS: </strong>Item has been Successfully Added to the Database!</p>
            </div>
        <?
		}
		?>
        <?
        if($_GET[msg]=="Updated")
		{
		?>
        	<div class="nNote nSuccess hideit">
                <p><strong>SUCCESS: </strong>Item has been Successfully Updated in the Database!</p>
            </div>
        <?
		}
		?>
        <?
        if($_GET[msg]=="Deleted")
		{
		?>
        	<div class="nNote nSuccess hideit">
            <p><strong>SUCCESS: </strong>Item has been Successfully Deleted from Database!</p>
            </div>
        <?
		}
		?>
                
        <!-- Dynamic table -->
        <div class="table">
            <div class="head"><h5 class="iFrames">Manage Item</h5></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Item Category</th>
                        <th>Item </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?
				$roleSelect=mysql_query("select * from gt_item");
				$roleNo=mysql_num_rows($roleSelect);
				if($roleNo!="0")
				{
					$s=1;
					while($roleFetch=mysql_fetch_object($roleSelect))
					{
				?>
                    <tr class="gradeA">
                        <td><?=$s?></td>
                        <td><?=$roleFetch->ItemCategory?></td>
                        <td><?=$roleFetch->Item?></td>
                        <td>                        
                        <a href="updateItem.php?ID=<?=$roleFetch->ID?>" title="Edit" class="btn14 mr5"><img src="images/icons/dark/pencil.png" alt="Edit" /></a> 
                        <a href="itemManagement.php?ID=<?=$roleFetch->ID?>&action=delete" title="Delete this Class" onClick="return check_del();" class="btn14 mr5"><img src="images/icons/dark/close.png" alt="" /></a>
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
