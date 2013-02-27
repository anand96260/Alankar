<?
/* Functions */
function redirect_to($location = null)
{
    if ($location != null) {
        header("Location: $location");
        exit;

    }

}
function get_page_name($currentFile)
{
	$parts = Explode('/', $currentFile);
	$Pagename=$parts[count($parts) - 1];
	return $Pagename;
}

function check_loggedin()
{
    return isset($_SESSION['user_data']['user_id']);

}
function check_login()
{
    if (!check_loggedin()) {
        redirect_to("login.php");

    }
}
?>