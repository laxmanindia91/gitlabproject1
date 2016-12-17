<?php
$con = mysql_connect('localhost','root','mysql');
$db = mysql_select_db('prjct1') or die(mysql_error());  
if (!$con) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
}
else
{
echo "Connected<br>";
}

$username = $_POST['user'];
$password = $_POST['pass'];
$usertype = $_POST['utype'];	
//$image1 = $_FILES['fname'];
//$image = realpath($_FILES['$image1']["tmp_name"]);
//$image = basename($_FILES["fname"]["name"]);
//print_r($_POST);
//echo $image . "<br>";

if(!$con) {
echo "could not connected: " , mysql_error();
}

//$sql = "insert into members (username , password , usertype) values('$username' , '$password' , '$usertype')";

$sql = "insert into members (username , password , usertype) values('$username' , '$password' , '$usertype')";

$result = mysql_query($sql , $con);

//$num_rows= mysql_num_rows($result);
//echo "<br/>Number of records: " . $num_rows;
echo "<a href='login_successful.php'> " . "Home" . "</a>";
if(!$result)
{
echo "<br>" . mysql_error();
}
else
{
header('Location:login_successful.php');
//echo "submitted successfully";
//echo "<br><a href= 'listuser.php'>List</a>";
}
//$con.close();

?>