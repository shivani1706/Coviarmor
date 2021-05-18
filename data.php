<?php
//setting header to json
session_start();
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}
if(isset($_GET['name']) && isset($_GET['password'])){
$name = $_SESSION['name'];
$password = $_SESSION['password'];
//query to get data from the table

$query = sprintf("SELECT day, temp FROM $password ORDER BY day");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();

foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();


  print json_encode($data);
}
  ?>
