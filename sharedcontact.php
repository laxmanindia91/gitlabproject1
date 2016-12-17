<?php
session_start();

//print_r($_POST);
$cc = $_POST['chklist'];

foreach($cc as $c)
{
echo $c . " - ";
}

/*if(isset($_SESSION['usr']))
{
// user is login, direct to the job page
}
else
{
  // no login, go to the login page
}*/

?>

<br/><br/><a href="login_successful.php"/>Home</a>
<hr/>
<br/><br/><a href="main_login.php" onclick="<?php session_destroy();?>"/>Logout</a>