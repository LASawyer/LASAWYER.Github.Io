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


if (isset($_POST['username']) && isset($_POST['password'])) {
    $regUsername = $_POST['username']; //Registers Username
    $regPassword = $_POST['password']; //Registers Password

    // Checks if the password meets the requirements
    if (strlen($regPassword) < 8 || !preg_match("/\d/", $regPassword)) { //Error will appear if the password is less than 8 characters or if there is no number
        echo "Password must be at least 8 characters long and contain at least one number.";
    } else {
        // Checks if the username already exists in the database
        $checkQuery = "SELECT * FROM user WHERE username='$regUsername'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            echo "Username already exists.";

        } else {
            // Insert the new user into the database
            $insertQuery = "INSERT INTO user (username, password) VALUES ('$regUsername', '$regPassword')";
            $insertResult = mysqli_query($conn, $insertQuery);

            if ($insertResult) {
                echo "Registration successful!";

            } else {
                echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
            }
        }
    }
}

mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="css.css" />
</head>
<header>
         <h1><u>Enigma Inc.</u></h1>  
</header>
<body>
    <div class="form">
        <form action="signin.php" method="post">
            <h1>Sign In page</h1>
            <input type="text" name="username" placeholder="Enter Username Here">
            <br>
            <input type="password" name="password" placeholder="Enter Password Here">
            <br>
            <button class="btnn" type="submit" value="register">SIGN UP</button>
            <p class="link">Already have an account?
                <br>
                <a href="Login.php">Log In</a> Here </a>
            </p>
        </form>
    </div>
<div style="height: 410px;"></div> <!-- This is to create space between the content and the bottom of the page -->

<?php require("Footer.php");?>
</body>
</html>
