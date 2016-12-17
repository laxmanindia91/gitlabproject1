<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
function showUser(str) {
 if (str == "true") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtUser").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","listuser.php",true);
        xmlhttp.send();
    }
}

function showContacts()
{
alert('show contacts');
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtUser").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","notification.php",true);
        xmlhttp.send();
    }



</script>
</head>

<body>	<!--onload="showContacts()" -->
<html>
<body>
Login Successful!
<br/>
<?php
//echo "Welcome User: <b>" . $_SESSION['usr'] . "</b><br>";
//echo ($_SESSION['users'].length);
//echo "Total Logged in users: " . count($_SESSION['users']);
?>
<br>
<a href="signup.html"> Add User</a>
<br/>
<div id="txtContact"></div>
<hr/>
<!--form method="post" action="#"-->
<form>
<!--input type="submit" name="btnShare" value="Share" / -->
<input type="button" name="btnShow" id="btnShow" value="Show User" onClick="showUser(true)"><br>
<p></p>
</form>

<br>
<div id='txtUser'></div>
<?php
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    //if (isset($_POST['btnShare'])) {
//include ('listuser.php');
//echo "<input type='submit' name='btnSubmit' value='Submit' /><br>";  
  //}
//}
?>

<hr/>
<br/><br/><a href="main_login.php" onclick="<?php //if(($key = array_search($usertemp['usr'], $_SESSION['users'])) !== false) {
    //unset($_SESSION['users']); }
	session_destroy();?>"/>Logout</a>
</body>
</html>