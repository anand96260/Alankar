<?
include("common/config.php");
include("common/functions.php");
if($_SESSION['user_data']['user_id']!="")
{
	redirect_to("index.php");
}

if($_POST[Login]=="Log Me In")
{
	
	$Select=mysql_query("select * from gts_users where user_login='$_POST[user_login]' and user_pass=password('$_POST[user_pass]') and user_status='1'");
	$NoRows=mysql_num_rows($Select);	
	if($NoRows=="0")
	{
		redirect_to("login.php?action=err");
	}
	else
	{
		$FetchAdmin=mysql_fetch_object($Select);
		$_SESSION['user_data']=array();			
		$_SESSION['user_data']['user_id']=$FetchAdmin->ID;
		$_SESSION['user_data']['user_login']=$FetchAdmin->user_login;
		$_SESSION['user_data']['display_name']=$FetchAdmin->display_name;
		$_SESSION['user_data']['user_email']=$FetchAdmin->user_email;
		$_SESSION['user_data']['user_role']=$FetchAdmin->user_role;
		redirect_to("index.php");	
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
<div id="topNav">
    <div class="fixed">
        <div class="wrapper">
            <div class="backTo"><a href="http://oxygencreations.com" title="Main Website"><img src="images/icons/topnav/mainWebsite.png" alt="Main Website" /><span>Main website</span></a></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="images/icons/topnav/register.png" alt="" /><span>Register Aduro Package</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/topnav/contactAdmin.png" alt="" /><span>Contact Oxygen Creations Online Support</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/topnav/help.png" alt="" /><span>Help</span></a></li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </div>
</div>


<!-- Login form area -->
<div class="loginWrapper">
	<div class="loginLogo"><img src="images/loginLogo.png" alt="" /></div>
    <div class="loginPanel">
        <div class="head"><h5 class="iUser">Login</h5></div>
        <form action="login.php" id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="loginRow noborder">
                    <label for="user_login">Username:</label>
                    <div class="loginInput"><input type="text" name="user_login" class="validate[required]" id="user_login" /></div>
                    <div class="fix"></div>
                </div>
                
                <div class="loginRow">
                    <label for="user_pass">Password:</label>
                    <div class="loginInput"><input type="password" name="user_pass" class="validate[required]" id="user_pass" /></div>
                    <div class="fix"></div>
                </div>
                
                <div class="loginRow">
                    <div class="rememberMe"><input type="checkbox" id="chbox" name="chbox" /><label>Remember me</label></div>
                    <input type="submit" name="Login" value="Log Me In" class="greyishBtn submitForm" />
                    <div class="fix"></div>
                </div>
            </fieldset>
        </form>
        <?
            if($_GET[action]=="err")
			{
            ?>
			<div class="nNote nFailure hideit">
                <p><strong>Oops Sorry:</strong> Invalid Username (or) Password.</p>
            </div>
            <?
			}
			?>
    </div>    
</div>

			

<!-- Footer -->
<div id="footer">
	<div class="wrapper">
    	<span>&copy; Copyright 2012. All rights reserved. Alankar International By <a href="#" title="Oxygen Creations">Oxygen Creations</a></span>
    </div>
</div>

</body>
</html>
