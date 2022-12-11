<?php
include('./config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic-A - Register</title>
    <link rel="stylesheet" href="assets/css/styles2.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>Register</h1>
                <hr>
                <p>Comic-A</p>
                <label for="">Username</label>
                <input type="text" name='username' placeholder="Enter Username">
                <label for="">Email</label>
                <input type="text" name='email' placeholder="Enter Email">
                <label for="">Phone Number</label>
                <input type="text" name='phone' placeholder="Enter Phone Number">
                <label for="">Password</label>
                <input type="password"  name='password' placeholder="********">
                <button type='submit' name='submit' >Register</button>
                <p>Have an account already?
                    <a href="login.php">Login</a>
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
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO user SET
            username = '$username',
            email = '$email',
            password = '$password',
            phone = '$phone'
    ";
    $res = mysqli_query($link, $sql);
    if($res == True) {
        $_SESSION['accountCreated'] = '<span class="addedAccount">Account '.$username.' created!</span>';
        header('location: home.php');
        exit();
    }
    else {
        $_SESSION['unSuccessfull'] = '<span class="failed">Account '.$username.' failed!</span>';
        header('location: register.php');
        exit();
    }
}
?>