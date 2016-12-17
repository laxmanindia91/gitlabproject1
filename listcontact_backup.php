<?php
session_start();
?>

<?php
$con = mysql_connect('localhost' , 'root' , 'mysql');
$db = mysql_select_db('prjct1');

if(!$con) {
echo "could not connected " . mysql_error();
}
$username = $_POST['chklist'];

print_r($username);
//$sql = 'select * from contacts';

$sql = 'SELECT * FROM contacts JOIN members USING(id)';
//print_r($_POST);	//working
$result = mysql_query($sql);

$usrarray = array();

if(isset($_POST['chklist'])) {

//echo "You chose the following user(s): <br>";

/*foreach ($username as $user){
//echo $user . "<br />";
//$_SESSION['uu'] = $user;
array_push($usrarray, $user);
}
$_SESSION['arr']=$usrarray;

}*/
//print_r($_SESSION['arr']);
?>

<?php
//echo "Welcome User: <b>" . $_SESSION['usr'] . "</b>";
?>

<form method='post' action='sharedcontact.php'>
<div align='center'>
<input type="submit" name="btnShare" value="Share" /><br></div>
<table border='1' align='center'>
<tr>
<td>Choose<!--input type="checkbox" name="hdrchk" id="hdrchk" /></td><td>Username</td><td>Contact</td-->
</tr>

<?php
while($row = mysql_fetch_array($result))
{
?>

<tr>
<td><input type="checkbox" name="chklist[]" id="chklist" value="<?php echo $row['id']; ?>"/></td>
<td>
<?php echo $row['username']; ?>
</td>
<td>
<?php echo $row['contact']; ?>
</td>
</tr>
<?php
}
?>
</table>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['btnShare'])) {
		header("location:sharedcontact.php");
	   }
}

?>

<?php 
  //} 

?>

<br/><br/><a href="main_login.php" onclick="<?php session_destroy();?>"/>Logout</a>
