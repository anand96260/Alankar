<?
include("common/config.php");
include("common/functions.php");
/*check_login();
	
    $SelectP=mysql_query("select * from gt_content where ID='$_GET[p]'");
	$FetchP=mysql_fetch_object($SelectP);
	$Title=$FetchP->PageTitle;	
if($_POST[UpdateContent]=="Update Content")
{	
	
	mysql_query("update gt_content set PageTitle='$_POST[Ptitle]', ContentTitle='$_POST[Ctitle]', Mkeywords='$_POST[Mkeyword]', MDescription='$_POST[Mdescription]', Content='$_POST[Content]' where ID='$_POST[ID]'");
	redirect_to("contentManagement.php?p=$_GET[p]&msg=Updated");	
}
else
{
    $SelectC=mysql_query("select * from gt_content where ID='$_GET[p]'");
	$FetchC=mysql_fetch_object($SelectC);
	$_POST[Ptitle]=$FetchC->PageTitle;
	$_POST[Ctitle]=$FetchC->ContentTitle;
	$_POST[Mkeyword]=$FetchC->Mkeywords;
	$_POST[Mdescription]=$FetchC->MDescription;
	$_POST[Content]=$FetchC->Content;
	$_POST[ID]=$FetchC->ID;
	
	
}
if($_POST[Cancel]=="Cancel")
{
	redirect_to("index.php");	
}*/


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
    	<div class="title"><h5>User Management</h5></div>
        
        <?
        if($_GET[msg]=="Updated")
		{
		?>
        	<div class="nNote nSuccess hideit">
                <p><strong>SUCCESS: </strong><?=$Title?> Page Content has been Updated Successfully.</p>
            </div>
        <?
		}
		?>
      
 
          
        <!-- Statistics -->
        <div class="stats" align="right">
            	
        </div>
        
        
        <!-- Form begins -->
		<?php 
		$roomSelect=mysql_query("select * from booking where ID='".$_GET['ID']."' ");
		$roomNo=mysql_fetch_array($roomSelect);
		?>
        <form action="" name="frmuser" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="widget first">
                    <div class="head opened" id="opened"><h5>Update <?=$Title?> Content</h5></div>
					<h3>Customer Details:</h3>
                    <div>
                    <div class="viewrow"><label>Name :</label><div class="viewRight"><?php echo $roomNo['Title'].'.'.$roomNo['Firstname'].'&nbsp;'.$roomNo['Lastname'];?></div><div class="fix"></div></div>
                    <div class="viewrow"><label>Address :</label><div class="viewRight"><?php echo $roomNo['Address'];?></div><div class="fix"></div></div>  
                    <div class="viewrow"><label>City :</label><div class="viewRight"><?php echo $roomNo['City'];?>                                   
                    </div><div class="fix"></div></div>
                    <div class="viewrow"><label>Country :</label><div class="viewRight"><?php echo $roomNo['Country'];?>
                      
                    </div><div class="fix"></div></div>
                    <div class="viewrow"><label>Postal Code :</label><div class="viewRight"><?php echo $roomNo['PostalCode'];?>
                    </div><div class="fix"></div></div>                 
                    <div class="viewrow"><label>Email :</label><div class="viewRight"><?php echo $roomNo['Email'];?>
                    </div><div class="fix"></div></div>
					<div class="viewrow"><label>Phone Number :</label><div class="viewRight"><?php echo $roomNo['Telephone'];?>
                    </div><div class="fix"></div></div>
					<div class="viewrow"><label>Fax :</label><div class="viewRight"><?php echo $roomNo['Fax'];?>
                    </div><div class="fix"></div></div>
					</div>
					
					<div>
					<h3>Room Details:</h3>
					
					<div class="viewrow"><label>Room Type :</label><div class="viewRight"><?php echo $roomNo['RoomType'];?>
                    </div><div class="fix"></div></div>
					<div class="viewrow"><label>Room Number :</label><div class="viewRight"><?php echo $roomNo['Rooms'];?>
                    </div><div class="fix"></div></div>
					<div class="viewrow"><label>Date :</label><div class="viewRight"><?php echo $roomNo['Arrival'].'-'.$roomNo['Departure'];?>
                    </div><div class="fix"></div></div>
					<div class="viewrow"><label>Nights :</label><div class="viewRight"><?php echo $roomNo['Nights'];?>
                    </div><div class="fix"></div></div>
					<div class="viewrow"><label>Units :</label><div class="viewRight"><?php echo $roomNo['Units'];?>
                    </div><div class="fix"></div></div>
					<div class="viewrow"><label>Adults :</label><div class="viewRight"><?php echo $roomNo['Adults'];?>
                    </div><div class="fix"></div></div>
					<div class="viewrow"><label>Children :</label><div class="viewRight"><?php echo $roomNo['Children'];?>
                    </div><div class="fix"></div></div>
                        
                          
                  <div class="stats" align="right">
            	<a href="BookedRooms.php" title="Back" class="btnIconLeft mr10 mt5"><img src="images/icons/dark/arrowLeft.png" alt="Back" class="icon" /><span>Back</span></a>
        </div>
                        <div class="fix"></div>
                        </div>

                </div>
            </fieldset>
        </form>
        </div>
    </div>
    <div class="fix"></div>

</div>

<!-- Footer -->
<? include("footer.php"); ?>

</body>
</html>
