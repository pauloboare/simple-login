<?php include "header.php"; ?>


<?php include "session.php"; ?>

<h1> HOME </h1>

<?php
	echo "Hello, ".$_SESSION['user-checked'];
?>
    <p>  
    This page is only accessed if the user is verified. <br>

    It is not possible to access only through the url.
    </p>

    <p>
    <a href="logout.php"> Logout </a>
    </p>

    <?php include "footer.php"; ?>
