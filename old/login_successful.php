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
<html>
<body>
Login Successful!
<br/>
<br/>
<hr/>
<br/>

<?php

echo "Username:<b>" . $_SESSION['usr'] . "</b>";
echo "<br/>Username:<b>" . $_SESSION['pss'] . "</b>";
?>

<hr/>
<br/><br/><a href="main_login.php" onclick="<?php session_destroy();?>"/>Logout</a>
</body>
</html>