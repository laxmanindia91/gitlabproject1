<html>
<body>
<form method="post" action="#">
<input type="submit" name="btnDelete" value="Delete" /><br>
<input type="submit" name="btnSubmit" value="Submit" /><br>

<p></p>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['btnDelete'])) {
        // btnDelete
echo "deleted clicked";
    } else if (isset($_POST['btnSubmit'])) {
        //assume btnSubmit
echo "submit clicked";
    }
else
{
//echo "choose one option";
echo "<script>document.location.href.reload();</script>";
}
}

?>