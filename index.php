<?php
session_start();
if(!$_SESSION['auth']){
    header('location:login.php');
}
?>

<h1>Welcome!</h1>
<form action="http://localhost/project/infection.php" method="POST">
    <input type="submit" name="infection" id="infection" value="infection" >
</form>

<form action="http://localhost/project/report.php" method="POST">
    <input type="submit" name="reports" id="reports" value="reports">
</form>