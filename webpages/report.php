<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
   

<style>

        *{
            align-items:center;
            text-align: center;
        }
        html{
            height: 100%;
        }

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
        
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        li a:hover:not(.active) {
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
        

        h1{
            font-size: 3rem;
            font-weight: 800;
            text-align: center;
            font-family: 'Concert One', cursive;
        }
        p{
            text-align: center;
            font-size: 1.9rem;
            
        }
        h2{
            text-align: center;
            font-size: 2.1rem;
            font-family: 'Concert One', cursive;
        }
        .report{
            align-items:center;
            text-align: center;
            
        }
       h4{
        font-size: 1.5rem;
       }
    

        
    </style>
    
    
</head>

<body>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="infection.php">Infection</a></li>
        <li><a href="report.php" class="active">Reports</a></li>
        <li><a href="cowin2.html">Cowin</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="symptoms.html">Symptoms</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>

    </ul>

    
    <h1>Your medical reports are now one click away!</h1>
    <p>Are you also used to not taking care of keeping the medical reports safely and are left with no option at the time of need?</p>
    <h2>BUT NOT FROM NOW!</h2>
    <p>Upload all your reports here and download them 24/7.</p>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <div class="repo">
         <input  type="file" class="report" accept="pdf/*" name="file" required><br><br>
    </div>
    <div class="sub">
      <input class="report" type="submit" name="submit"><br><br>
    </div>
    <h4>View your uploaded files <a href="http://localhost/project/webpages/upload.php">here</a></h4>



    </form>

</body>
</html>
