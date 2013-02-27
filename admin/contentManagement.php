<?
include("common/config.php");
include("common/functions.php");
check_login();
	
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
    	<div class="title"><h5>Content Management</h5></div>
        
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
        <form action="" name="frmuser" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="widget first">
                    <div class="head opened" id="opened"><h5>Update <?=$Title?> Content</h5></div>
                    <div>
                    
                    <div class="rowElem"><label>Page Title :</label><div class="formRight"><input type="text" id="Ptitle" name="Ptitle"  value="<?=$_POST[Ptitle]?>"  /></div><div class="fix"></div></div>
                    <div class="rowElem"><label>Content Title :</label><div class="formRight"><input type="text" id="Ctitle" name="Ctitle" value="<?=$_POST[Ctitle]?>"  /></div><div class="fix"></div></div>  
                    <div class="rowElem"><label>Meta Keywords :</label><div class="formRight">
                      <textarea name="Mkeyword" id="Mkeyword"><?=$_POST[Mkeyword]?></textarea>                      
                    </div><div class="fix"></div></div>
                    <div class="rowElem"><label>Meta Description :</label><div class="formRight">
                      <textarea name="Mdescription" id="Mdescription"><?=$_POST[Mdescription]?></textarea>
                    </div><div class="fix"></div></div>
                    <div class="rowElem"><label>Page Content :</label><div class="formRight">
                      <textarea name="Content" id="Content" class="auto"><?=$_POST[Content]?></textarea>
                    </div><div class="fix"></div></div>                 
                    
                        
                          
                  	<input name="ID" type="hidden" value="<?=$_POST[ID]?>" /><input name="UpdateContent" type="submit" class="greyishBtn submitForm" id="UpdateContent" value="Update Content" />
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
