<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="post" action="register.php">
<input type="text" name="user" placeholder="User" required /> <br/>
<input type="password" name="password" placeholder="Password" required /> <br/>
<input type="password" name="r-password" placeholder="Repeat password" required /> <br/>
<input type="submit" value="Register" />
</form> 

    <?php 
    include "connect.php";
    if(isset($_POST['user'],$_POST['password'])){
    $a=$_POST['user'];
    $b=md5(md5($_POST['password']."#?*&#"));
    $c=md5(md5($_POST['r-password']."#?*&#"));;
        if($b==$c){
        $register="INSERT INTO tb_users VALUES (NULL,'$a', '$b')";
        $result=mysqli_query($connect, $register);
            if ($result) {
            header('location:logout.php');
        }
    }
    else {
        echo "Passwords do not match";
        }
    }

    mysqli_close($connect);
    ?>
</body>
</html>