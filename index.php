<?php
include('partials/header.php');
?>
    <?php
    if(isset($_SESSION['accountCreated'])) {
        echo $_SESSION['accountCreated'];
        unset ($_SESSION['accountCreated']);
    }
    ?>
    <div class="form_container">
        <div class="overlay">

        </div>

        <div class="titleDiv">
            <h1 class="title">Login</h1>
            <span class="subTitle">Welcome back!</span>
        </div>

        <?php
        if(isset($_SESSION['noAdmin'])) {
            echo $_SESSION['noAdmin'];
            unset ($_SESSION['noAdmin']);
        }
        ?>

        <form action="" method="POST">
            <div class="row grid">
                <div class="row">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="userName"
                    placeholder="Enter User Name" required>
                </div>

                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="passWord"
                    placeholder="Enter Password" required>
                </div>

                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" 
                    value="Login" required>

                    <span class="registerLink">Don't have an account? <a href="register.php">Register</a></span>
                </div>
            </div>
        </form>
    </div>

<?php
include('partials/footer.php');
?>

<?php

if(isset($_POST['submit'])) {
    // echo 'Yes data submited';

$userName = $_POST['userName'];
$passWord = $_POST['passWord'];

$sql = "SELECT * FROM admin WHERE usernames = '$userName' AND passwords = '$passWord' ";

$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);

if($count == 1){
    $_SESSION['loginMessage'] = '<span class="success">Welcome ' .$userName.' </span>';
    header('location: ' .SITEURL. 'dashboard.php');
    exit();
}
else {
    $_SESSION['noAdmin'] = '<span class="failed">' .$userName.' is not registered! </span>';
    header('location: ' .SITEURL. 'index.php');
    exit();
}
}