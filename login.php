<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic-A - Login</title>
    <link rel="stylesheet" href="assets/css/styles2.css">
</head>
<body>
    <?php
    if(isset ($_SESSION['accountCreated'])) {
        echo  $_SESSION['accountCreated'];
        unset ($_SESSION['accountCreated']);
    }
    ?>

    <?php
    if(isset ($_SESSION['noUser'])) {
        echo  $_SESSION['noUser'];
        unset ($_SESSION['noUser']);
    }
    ?>

    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>Login</h1>
                <hr>
                <p>Comic-A</p>
                <label for="">Username</label>
                <input type="text" name='username' placeholder="Enter Username">
                <label for="">Password</label>
                <input type="password"  name='password' placeholder="********">
                <button type='submit' name='submit' >Login</button>
                <p>Don't have an account?
                    <a href="register.php">Register</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/images/banyaknovel.jpg" alt="Gambar Tumpukan Buku">
        </div>
    </div>
</body>
</html>


<?php

if(isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";

$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);

if($count == 1){
    $_SESSION['loginMessage'] = '<span class="success">Welcome ' .$username.' </span>';
    $_SESSION['username'] = $username;
    header('location: home.php');
    exit();
}
else {
    $_SESSION['noAdmin'] = '<span class="failed">' .$username.' is not registered! </span>';
    header('location: login.php');
    exit();
}
}

?>