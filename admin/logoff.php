<?
include("common/config.php");
include("common/functions.php");
session_unset($_SESSION['user_data']);
//session_destroy();
redirect_to("login.php");
exit;
?>