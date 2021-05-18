<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT * FROM signup WHERE email = '$email' and password = '$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION["auth"] = 'true';
    header('location:index.php');
}
else{
    echo "Invalid username or password";
}
?>