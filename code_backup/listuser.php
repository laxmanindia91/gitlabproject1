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
<table border='1'>
<tr>
<td>Username</td><td>Password</td><td>User Type</td><td>Picture</td>
</tr>
<?php
while($row = mysql_fetch_array($result))
{
?>

<tr>
<td>
<?php echo $row['username']; ?>
</td>
<td>
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
</td>
</tr>

<?php
}
?>
</table>
<?php

//echo "<br><a href='signup.html'>Add user</a>";

?>