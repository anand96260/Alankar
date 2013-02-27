<?
session_start();
ob_start();
error_reporting(E_ALL & ~E_NOTICE);

/*Database Connection*/

/*define("ACSQL_DB_USER","oxygencr_alankar");
define("ACSQL_DB_PASSWORD","Alankar123@");
define("ACSQL_DB_NAME","oxygencr_alankar");
define("ACSQL_DB_HOST","localhost");*/

define("ACSQL_DB_USER","root");
define("ACSQL_DB_PASSWORD","");
define("ACSQL_DB_NAME","alankar");
define("ACSQL_DB_HOST","localhost");
$ConDB=mysql_connect(ACSQL_DB_HOST,ACSQL_DB_USER,ACSQL_DB_PASSWORD);
$DB=mysql_select_db(ACSQL_DB_NAME,$ConDB);

/*Database Connection*/
/*$username="oxygencr_o2cr";
$password="o2creation123@";
$hostname="localhost";
$connection=mysql_connect($hostname, $username, $password);
$db=mysql_select_db('oxygencr_aduro',$connection);*/
//echo mysql_error();

////////////////////////////////////////////////////
// End of Database Connection
////////////////////////////////////////////////////

/*Global Variables*/
$WebsiteTitle="-::- Hotel Alankar Grande -::-";
$AdminTitle="-::- Hotel Alankar Grande - Control Panel -::-";
$WebsiteUrl="http://localhost/alankar";
////////////////////////////////////////////////////
// End of Global Varialbles
////////////////////////////////////////////////////
?>