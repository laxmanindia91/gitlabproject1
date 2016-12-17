<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$_SESSION['users'] = array();
//$_SESSION['tmpusr'] = array();
//$usertemp['usr'] = $_SESSION['usr'];

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="mysql"; // Mysql password 
$db_name="prjct1"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];

$usertemp['usr'] = $myusername;

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

//$_SESSION['pss']=$mypassword;
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count){

//$_SESSION['loggedin'] = true;	// to check user is logged in or not
//$_SESSION['tmpusr']=$myusername;

//array_push($_SESSION['users'] , $myusername);

header("location:login_successful.php");
}
else
{

header("location:main_login.php");
echo "Login Failed<br/>Try Again....";
}
?>

</body>
</html>