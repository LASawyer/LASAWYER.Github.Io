<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enigmainc";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handling login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];

    // Check if the username and password match with a username and password already in the database
    $loginQuery = "SELECT * FROM user WHERE username='$loginUsername' AND password='$loginPassword'";
    $loginResult = mysqli_query($conn, $loginQuery);

    if (mysqli_num_rows($loginResult) > 0) { //If login is successful then they are sent to the mainpage
        header("location: Home.php");
    } else {
        echo "Invalid username or password.";// No mathes with BOTH username and password, one may be correct
    }
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS.css">
</head>
<header>
         <h1><u>Enigma Inc.</u></h1>  
</header>
<body>
    <div class="form">
        <form action="login.php" method="post">
            <h1>LOGIN HERE</h1>
            <input type="text" name="username" placeholder="Enter Username Here">
            <br>
            <input type="password" name="password" placeholder="Enter Password Here">
            <br>
            <button class=" btnn" type="submit" value="login">LOG IN</button>
            <p class="link">Don't have an account? <!-- Sends the user back to Signin -->
                <br>
                <a href="Signin.php">Sign up</a> Here </a>
            </p>
        </form>
    </div>
<div style="height: 410px;"></div> <!-- This is to create space between the content and the bottom of the page -->

<?php require("Footer.php");?>
</body>
</html>

