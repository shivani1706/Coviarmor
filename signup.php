<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup1.css">
</head>
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'login';

if(isset($_POST['submit'])){
$conn = mysqli_connect($server, $user, $password, $database);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$name = $email = $phone = $password = '';
$name = $_POST['name'];
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
}




$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
}
$phone = $_POST['phone'];
$password = $_POST['password'];

$query = "INSERT INTO signup VALUES ('$name', '$email', '$phone', '$password')";
if(mysqli_query($conn, $query)){
    echo "You have been registered successfully";
 }
 else{
     echo "Error:" . $query . "" . mysqli_error($conn);
 }
 $conn->close();
}
   ?>
<body>
    <div>
    <h1>Patient Care</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="signup">
            <table>
            <tr>
                    <th>
                        <p id="ult">Signup</p></th>
                </tr>
            
                <tr>
                    <th>
                        <p>Name <input type="text" name="name" id="name" required></p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>Email <input type="email" name="email" id="email" required></p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>Phone <input type="text" name="phone" id="phone" required>
                            </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>DOB <input type="date" name="dob" id="dob"></p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>Password <input type="password" name="password" id="password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            </span></p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <button onclick="reset" name="submit">Submit</button>
                    </th>
                </tr>
                <tr>
                    <td>
                        <p>
                            Already have an account? <a href="login.html">Login</a>
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
        function reset() {
            document.getElementById("signup").reset();
        }
    </script>
</body>
</html>