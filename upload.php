<?php

session_start();




if(isset($_POST['submit'])){
    $name = $_SESSION['name'];    
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder = "upload/";
$server = "localhost";
$user = "root";
$password = "";
$database = "login";

$conn = mysqli_connect($server, $user, $password, $database);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$new_size = $file_size/1024;
$new_file_name = strtolower($file);
$final_file = str_replace(' ', '-', $new_file_name);
$query = "INSERT INTO report VALUES ('$name', '$final_file', '$file_type', '$new_size')";
        mysqli_query($conn, $query);
    if (move_uploaded_file($file_loc, $folder.$final_file)) {
        
            echo "Your report has been uploaded successfully";
         }
         else {
        echo "Sorry, there was an error uploading your file.";
      }
      $conn->close();
}

?>