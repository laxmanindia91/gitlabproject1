<?php
$con = mysql_connect('localhost' , 'root' , 'mysql');
$db = mysql_select_db('prjct1');

if(!$con) {
echo "could not connected " . mysql_error();
}

//$sql = 'select * from contacts';

$sql = 'SELECT * FROM contacts JOIN members USING(id)';
$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
{
$row['contact'];
}
?>
