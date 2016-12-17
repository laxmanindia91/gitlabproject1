<?php
$con = mysql_connect('localhost' , 'root' , 'mysql');
$db = mysql_select_db('prjct1');

//$tt = $_GET['id'];
//echo $tt;
if(!$con)
{
echo "Could not connected " . mysql_error();
}

//$sql = "select * from members";
//$sql_new1 = 'select c.id from contacts c LEFT JOIN on members m on c.id = m.id where c.id is null';

?>
<form method='post' action='<?php $PHP_SELF; ?>'>
<br>Enter contact to user:
<input type='text' name='cont' size='20'/>

<?php

?>

<input type="submit" name="btnSave" value="Submit" />
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['btnSave'])) {
        // btnDelete
//echo "save clicked";
//$sql_new = 'SELECT * FROM members m LEFT JOIN contacts c on m.id = c.id where c.id is null';

//$sql_new2 = 'SELECT * FROM members m LEFT JOIN contacts c on m.id = c.id where c.id is null';
$tt = $_GET['id'];
$cont = $_POST['cont'];
$sql_new3 = "insert into contacts (id , contact) values ('$tt' , '$cont')";
//$result = mysql_query($sql_new2);

$result = mysql_query($sql_new3);
if($result)
{
echo '<script>alert("Contact Saved")</script>';
header('Location:login_successful.php');
}
else
{
echo mysql_error();
}    
}
}

?>