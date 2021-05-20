<?php
session_start();
if(!$_SESSION['auth']){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            float: left;
        }
    </style>
</head>
<body>
    
</body>
</html>

<h1>Welcome!</h1>
<form action="http://localhost/project/webpages/infection.php" method="POST" class="form">
    <input type="submit" name="infection" id="infection" value="infection" >
</form>

<form action="http://localhost/project/webpages/report.php" method="POST" class="form">
    <input type="submit" name="reports" id="reports" value="reports">
</form>
