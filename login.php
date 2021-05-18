<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="login.css"> -->
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

if(isset($_POST['login'])){
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST["email"];
$password = $_POST["password"];
$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];

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

$conn->close();
}
?>
<body>
    <div>
        <form action="http://localhost/project/login.php" method="POST">
            <table>
                <tr>
                    <th>
                        <p>
                            Name <input type="text" name="name" id="name">
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>
                            Email <input type="email" name="email" id="email">
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>
                            password <input type="password" name="password" id="password">
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <button id="login" onclick="re" name="login">Login</button>
                    </th>
                </tr>
                <tr>
                    <td>
                        <p>
                            Don't have an account? <a href="signup.php">Sign up</a>
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script>
        function re(){
        document.getElementById("login").reset();
        }
    </script>
</body>
</html>