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
   

<style>
        h1{
            font-size: 3rem;
            font-weight: 800;
            text-align: center;
        }
        p{
            text-align: center;
            font-size: 2.5rem;
        }
        h2{
            text-align: center;
            font-size: 2.5rem;
        }
        .report{
            align-items:center;
            text-align: center;
            font-size: 1rem;
        }
        
    </style>
    
    
</head>

<body>
    
    <h1>Your medical reorts are now one click away!</h1>
    <p>Are you also used to not taking care of keeping the medical reports safely and are left with no option at the time of need?</p>
    <h2>BUT NOT FROM NOW!</h2>
    <p>Upload all your reports here and download them 24/7.</p>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <div>
         <input type="file" class="report" accept="pdf/*" name="file" required>
    </div>
    <div>
      <input class="report" type="submit" name="submit">
    </div>
    <h4>View your uploaded files <a href="http://localhost/project/upload.php">here</a></h4>



    </form>

</body>
</html