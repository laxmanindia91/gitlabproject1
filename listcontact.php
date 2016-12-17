<?php
session_start();
?>
<p>You are seeing that contacts which you have selected...</p>
<hr>
<?php
$con = mysql_connect('localhost' , 'root' , 'mysql');
$db = mysql_select_db('prjct1');

if(!$con) {
echo "could not connected " . mysql_error();
}

$username = $_POST['chklist'];

//print_r($username);
$chk = implode(",",$username);
$sql = 'select * from contacts2';
//echo $chk . "<br>";
//$sql = 'SELECT * FROM contacts JOIN members USING($chk)';
//$sql = 'SELECT * FROM contacts JOIN members where members.id ="" ';
//SELECT * FROM employee INNER JOIN employee_details ON employee.employee_id=employee_details.employee_id
//$sql_new1 = SELECT * FROM employee INNER JOIN employee_details ON employee.employee_id=employee_details.employee_id;

$sql_new2 = "SELECT * FROM contacts WHERE id in ($chk)";
$result = mysql_query($sql_new2);

$test = mysql_query($sql);

if(!$test)
{
echo "result is empty";
}

?>
<br/><br/><a href="addcontact.php?id=<?php echo $chk; ?>">Add Contact</a>
<br/><br/><a href="login_successful.php">Home</a>
<table border='1' align='center'>

<?php
while($row = mysql_fetch_array($result))
{
?>

<tr>
<!--td> <?php //echo $row['username']; ?> </td-->
<td> <?php echo $row['contact']; ?> </td>
</tr>

<?php
}
?>

</table>

<?php
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['btnShare'])) {
		header("location:sharedcontact.php");
	   }
}*/

?>

<?php 
  //} 

?>

<br/><br/><a href="main_login.php" onclick="<?php session_destroy(); ?>"/>Logout</a>