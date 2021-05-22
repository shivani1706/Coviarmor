<?php
session_start();

if(isset($_POST['submit'])){
$email = $_SESSION["email"];    
    
$file = $_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder = "upload/";
$server = "localhost";
$user = "root";
$password = "";
$database = "login";
$uploadok=1;

$conn = mysqli_connect($server, $user, $password, $database);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$new_size = $file_size/1024;
$new_file_name = strtolower($file);
$final_file = str_replace(' ', '-', $new_file_name);

        if(file_exists($folder.$final_file)){
            ?>
            <script>
                alert("Sorry, the file already exists");
            </script>    
            <?php 
            $uploadok=0;
        }
        if($file_type != "application/pdf"){
            ?>
            <script>
                alert("Sorry, only pdf file are allowed");
            </script>
            <?php
            $uploadok=0;
        }
        if($uploadok==0){
            echo " ";
    }  
    else{
        if (move_uploaded_file($file_loc, $folder.$final_file)) {
            $query = "INSERT INTO report VALUES ('$email', '$final_file', '$file_type', '$new_size')";
            mysqli_query($conn, $query);
            ?>
            <script>
                alert("Your report has been uploaded successfully");
            </script>
            <?php    
            }
            else {
             ?>   
            <script>    
                alert("Sorry, there was an error uploading your file.");
            </script>
            <?php    
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload files</title>
</head>

<style>
    body{
             margin: 0;
             background-color: rgba(205, 250, 206,0.5);
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
        
        table, th, td{
            border: 1px solid black;
        }

        table{
            margin-top: 20px;
            border-collapse: collapse;
            width: 90%;
            position: center;
            margin-left: auto;
            margin-right: auto;
        }

        th,td{
            padding: 15px;
            text-align: left;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}

        th {
            background-color: #4CAF50;
            color: white;
            }
           
.covirise{
   text-decoration: none;
   text-align: center;
   color: white;
  
 }
    
</style>
<body>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="infection.php">Infection</a></li>
        <li><a href="report.php" class="active">Reports</a></li>
        <li><a href="cowin2.html">Cowin</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="symptoms.html">Symptoms</a></li>
        <li class="covirise"><a href="mychart.html">Covid-Rise</a></li>
        <li><a href="covidFAQs.html"  class="covirise">Covid-FAQs</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>

    </ul>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>File Name</th>
                <th>File Size(KB)</th>
                <th>View</th>
            </tr>
            <?php
            $server = "localhost";
            $user = "root";
            $password = "";
            $database = "login";
            
            
            $conn = mysqli_connect($server, $user, $password, $database);
            if(!$conn){
                die("Connection failed: " . mysqli_connect_error());
            }
            $email = $_SESSION["email"];
            $query = "SELECT file, size FROM report WHERE name = '$email'";
            $result = mysqli_query($conn, $query);
            ?>
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)){
                ?>    
                
                <tr>
                    <td><?php echo $row["file"]?></td>
                    <td><?php echo $row["size"]?></td>
                    <td><a style="text-decoration:none;" href="upload/<?php echo $row["file"]?>" target="_blank">View file</a></td>
                </tr>       
                <?php
            }
        
                ?>
            
        </table>
    </div>
    <h2 style="text-align:center;">Upload more files <a style="text-decoration:none;" href="report.php">here</a></h2>
</body>
</html>
