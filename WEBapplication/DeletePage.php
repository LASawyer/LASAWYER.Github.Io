<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enigma Inc.</title>
    <link rel="stylesheet" href="CSS.css">
    <link href="php.php">
</head>
<body>
    <header>
         <h1><u>Enigma Inc.</u></h1>  
         <li class="nav-item">
		    <a class="nav-link text-dark" href="Home.php">Home</a>
		</li>
         <li class="nav-item">
		    <a class="nav-link text-dark" href="MainPage.php">Read</a>
		</li>
         <li class="nav-item">
		    <a class="nav-link text-dark" href="Insertpage.php">Insert</a>
		</li>
		<li class="nav-item">
		    <a class="nav-link text-dark" href="Deletepage.php">Delete</a>
		</li>
        <li class="nav-item">
		    <a class="nav-link text-dark" href="Signin.php">SignOut</a>
		</li>
    </header>
<br>
<?php require("Delete.php");?>
<div style="height: 410px;"></div> <!-- This is to create space between the content and the bottom of the page -->

<?php require("Footer.php");?>
</body>
</html>