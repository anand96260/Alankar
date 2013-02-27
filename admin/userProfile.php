<?
include("common/config.php");
include("common/functions.php");
check_login();
	


if($_POST[UpdateUser]=="Update User")
{
		$RID=$_GET[ID];
		mysql_query("update gts_users set user_login='$_POST[User_Name]',first_name='$_POST[User_First_Name]',last_name='$_POST[User_Last_Name]',display_name='$_POST[User_First_Name]',user_pass=PASSWORD('$_POST[Pass_Word]'), user_email='$_POST[User_Email]' WHERE `ID`='$RID'");
		redirect_to("userProfile.php?msg=Updated");
}
else
{
	$RID=$_SESSION['user_data']['user_id'];
	$UserDetail=mysql_fetch_object(mysql_query("select * from gts_users where ID='$RID'"));
	$_POST[User_First_Name]=$UserDetail->first_name;
	$_POST[User_Last_Name]=$UserDetail->last_name;
	$_POST[User_Email]=$UserDetail->user_email;
	$_POST[User_Name]=$UserDetail->user_login;
	$_POST[Pass_Word]=$UserDetail->user_pass;
	
	
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
    	<div class="title"><h5>User Profile</h5></div>
        
        <?
        if($_GET[msg]=="Updated")
		{
		?>
        	<div class="nNote nSuccess hideit">
                <p><strong>SUCCESS: </strong>User Profile has been Successfully Updated in the Database!</p>
            </div>
        <?
		}
		?>
      
 
          
        <!-- Statistics -->
        <div class="stats" align="right">
            	
        </div>
        
        
        <!-- Form begins -->
        <form action="userProfile.php?ID=<?=$RID?>" name="frmuser" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="widget first">
                    <div class="head opened" id="opened"><h5>Update User Profile</h5></div>
                    <div>
                    
                    <div class="rowElem"><label>* First Name :</label><div class="formRight"><input type="text" id="User_First_Name" name="User_First_Name"  value="<?=$_POST[User_First_Name]?>" class="validate[required,custom[onlyLetterSp]]" /></div><div class="fix"></div></div>
                    <div class="rowElem"><label>* Last Name :</label><div class="formRight"><input type="text" id="User_Last_Name" name="User_Last_Name" value="<?=$_POST[User_Last_Name]?>" class="validate[required,,custom[onlyLetterSp]]" /></div><div class="fix"></div></div>  
                    <div class="rowElem"><label>* Username :</label><div class="formRight"><input type="text" id="User_Name" name="User_Name" value="<?=$_POST[User_Name]?>" class="validate[required]" /></div><div class="fix"></div></div>
                    <div class="rowElem"><label>* Password :</label><div class="formRight"><input type="text" id="Pass_Word" name="Pass_Word" value="<?=$_POST[Pass_Word]?>" class="validate[required]" /></div><div class="fix"></div></div>
                    <div class="rowElem"><label>* E-Mail :</label><div class="formRight"><input type="text" id="User_Email" name="User_Email"  value="<?=$_POST[User_Email]?>" class="validate[required,custom[email]]" /></div><div class="fix"></div></div>                 
                    
                        
                          
                  	<input name="UpdateUser" type="submit" class="greyishBtn submitForm" id="UpdateUser" value="Update User" />
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
