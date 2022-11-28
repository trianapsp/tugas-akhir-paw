<?php
include('partials/header.php');
?>

<div class="register_container">
        <div class="overlay">

        </div>

        <div class="titleDiv">
            <h1 class="title">Register</h1>
            <span class="subTitle">Thanks for choosing us!</span>
        </div>

        <form action="" method="POST">
            <div class="row grid">
                <div class="row">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username"
                    placeholder="Enter User Name" required>
                </div>

                <div class="row">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email"
                    placeholder="Enter Email Address" required>
                </div>

                <div class="row">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone"
                    placeholder="Enter your phone number" required>
                </div>

                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="passWord" name="password"
                    placeholder="Enter Password" required>
                </div>

                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" 
                    value="Register" required>

                    <span class="registerLink">Have an account already? <a href="index.php">Login</a></span>
                </div>
            </div>
        </form>
    </div>

<?php
include('partials/footer.php');
?>

<?php
if(isset($_POST['submit'])) {
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO admin SET
            usernames = '$userName',
            email = '$email',
            passwords = '$password',
            phone = '$phone'
    ";
    $res = mysqli_query($link, $sql);
    if($res == True) {
        $_SESSION['accountCreated'] = '<span class="addedAccount">Account '.$userName.' created!</span>';
        header('location:' .SITEURL. 'index.php');
        exit();
    }
    else {
        $_SESSION['unSuccessfull'] = '<span class="failed">Account '.$userName.' failed!</span>';
        header('location:' .SITEURL. 'register.php');
        exit();
    }
}
?>