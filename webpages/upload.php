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
            echo "Sorry, the file already exists";
            $uploadok=0;
        }
        if($file_type != "application/pdf"){
            echo "Sorry, only pdf file are allowed";
            $uploadok=0;
        }
        if($uploadok==0){
            echo "Sorry, the file could not be uploaded";
    }  
    else{
        if (move_uploaded_file($file_loc, $folder.$final_file)) {
            $query = "INSERT INTO report VALUES ('$email', '$final_file', '$file_type', '$new_size')";
        mysqli_query($conn, $query);
                echo "Your report has been uploaded successfully";
            }
            else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>File Name</th>
                <th>File Size(KB)</th>
                <th>View</th>
            </tr>
            <?php
            
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
                    <td><a href="upload/<?php echo $row["file"]?>" target="_blank">View file</a></td>
                    <!-- <td><a href="http://localhost/project/download.php?file=<?php $_FILES['file']['name']?>" target="_blank">Download</a></td> -->
                </tr>
                <?php
            }
        
                ?>
            
        </table>
    </div>
    <h4>Upload more files <a href="report.php">here</a></h4>
    <h3><a href="logout.php">Logout</a></h3>
</body>
</html>
