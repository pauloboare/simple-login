<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
    p {
        margin: auto;
        width: 300px;
        font-size: 20px;
        text-align: center;
    }
    </style>


<body>
<?php include "session.php"; ?>

<h1> HOME </h1>

<?php
	echo "Olá, ".$_SESSION['user-checked'];
?>
    <p>  
    This page is only accessed if the user is verified. <br>

    It is not possible to access only through the url.
    </p>

    <p>
    <a href="logout.php"> Logout </a>
    </p>
</body>
</html>
