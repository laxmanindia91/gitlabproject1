<?php
//session_start();
?>

<?php
$con = mysql_connect('localhost' , 'root' , 'mysql');
$db = mysql_select_db('prjct1');

$imagepath = "C:/wamp/www/authentation";
if(!$con) {
echo "could not connected " . mysql_error();
}

$sql = 'select * from members';

$result = mysql_query($sql);
?>
<form method='post' action='listcontact.php'>
<table border='1'>
<tr>
<th bgcolor="Yellow"><!--input type="checkbox" name="hdrchk" id="hdrchk" /-->Select</th>
<!--td>Username</td><td>Password</td><td>User Type</td><td>Picture</td><td>Profile</td-->
<th bgcolor="Yellow">User</th>
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
<!--td>
<?php echo $row['password']; ?>
</td>
<td>
<?php echo $row['usertype']; ?>
</td>

<td>
<?php echo $row['imagepath']; ?>
</td>

<td>
<img src = " <?php echo $row['imagepath']; ?>" width="50" height="50"/>
</td-->
</tr>
<div id="showcon"></id>
<?php
}
?>
</table>

<input type='submit' name='btnSubmit' value='Show'/><br>
</form>
<?php
//echo "Welcome User: <b>" . $_SESSION['usr'] . "</b>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['btnSubmit'])) {
header("location:listcontact.php");
    }
}

?> 