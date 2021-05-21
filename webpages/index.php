<?php
session_start();
if(!$_SESSION['auth']){
    header('location:login.html');
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
        body{
             margin: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        
        li {
            float: left;
        }
        
        li a, #infection, #reports {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            background-color: #333;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .form:hover {
            background-color: #111;
        }
            
        
        .active {
            background-color: #4CAF50;
        }

        li {
            border-right: 1px solid #bbb;
        }
        
        li:last-child {
            border-right: none;
        }
        
    </style>
</head>
<body>
    <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><div>
                <form action="http://localhost/project/webpages/infection.php" method="POST" class="form">
                    <input type="submit" name="infection" id="infection" value="Infection" >
                </form>
            </div>
        </li>
        <li><div>
                <form action="http://localhost/project/webpages/report.php" method="POST" class="form">
                    <input type="submit" name="reports" id="reports" value="Reports">
                </form>
            </div>    
        </li>
        <li><a href="cowin2.html">Cowin</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="symptoms.html">Symptoms</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>

    </ul>
</body>
</html>

<h1 style="text-align: center;">Welcome to Coviarmour</h1>
