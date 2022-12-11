<?php
include('./config.php');
$id_comic = $_GET['id'];
$title = $_GET['title'];
$user = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username='$user'";
$res = mysqli_query($link, $sql);
$data = mysqli_fetch_assoc($res);
$id_user = $data['id'];
var_dump($id_user);
$insert_favorite = "INSERT INTO favorite SET
id_user = '$id_user',
id_comic = '$id_comic',
tittle= '$title'
";
 mysqli_query($link, $insert_favorite);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic-A</title>
    <link rel="stylesheet" href="assets/css/styles2.css">
    <script src="assets/js/script3.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- <nav>
        <div class="wrapper">
            <div class="logo"><a href="">Comic-A</a></div>
            <div class="menu">
                <ul>
                    <li>
                        <form>
                            <input type="text" placeholder="Enter title..." id="search">	
                            <button onclick="cari(event)">Search</button>	
                        </form>
                    </li>
                    
                    <li><a href="#profil">My Profil</a></li>
                    <li><a href="index.php" class="tbl-biru">Logout</a></li>

                </ul>
            </div>
        </div>
    </nav> -->

    <div class="container">

        <div class="login">
            <p id="isi_sinopsis">
            <i class="fa-solid fa-heart" style='color:red'></i>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi architecto vel ex voluptate non esse commodi minus dolores corporis nulla necessitatibus ea, a, optio nam itaque ipsum placeat eos quia vitae quibusdam accusantium ipsa sunt tenetur! Corrupti repudiandae et iure?
            </p>
        </div>
        <div class="right" id="pict_book">
        </div>
    </div>

</body>
</html>