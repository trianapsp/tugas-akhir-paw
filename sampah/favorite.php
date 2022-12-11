<?php
include('./config.php');
$user = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username='$user'";
$res = mysqli_query($link, $sql);
$data = mysqli_fetch_assoc($res);
$id_user = $data['id'];
$title = $_GET['title'];
$id_comic = $_GET['id_comic'];

$insert_favorite = "INSERT INTO favorite SET
id_user = '$id_user',
id_comic = '$id_comic',
tittle= '$title'
";
 mysqli_query($link, $insert_favorite);
$sql = "SELECT * FROM favorite WHERE id_user='$id_user'";
$res = mysqli_query($link, $sql);
$data = mysqli_fetch_assoc($res);
$id_comic = $data['id_comic'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Comic</title>
    <link rel="stylesheet" href="assets/css/styles4.css">
    <script src="assets/js/favorite.js"></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">Comic-A</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#favorite">Favorite</a></li>
                    <!-- <li><a href="#history">History</a></li> -->
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="login.php" class="tbl-biru">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section id="history">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">List of most read comics</p>
                    <h2>Favorite</h2>
                    <p>The following are the comics that have the most interest in reading the comics is included in the most favorite comics</p>
                </div>
                <?php var_dump($user)?>

                <div class="histori-list">
                 
                    <div class="gambar" id='getComic' comic-id=<?=$id_comic ?>>
                        <img src="https://scoopadm.apps-foundry.com/ebook-covers/45496/image_highres/ID_FITE2018MTH12.jpg" />
                        <p>Filosofi Teras</p>
                    </div>
                   
                    // <!-- <div class="gambar">
                    //     <img src="https://scoopadm.apps-foundry.com/ebook-covers/45496/image_highres/ID_FITE2018MTH12.jpg" />
                    //     <p>Filosofi Teras</p>
                    // </div>
                    // <div class="gambar">
                    //     <img src="https://scoopadm.apps-foundry.com/ebook-covers/40678/big_covers/ID_KPG2017MTH10LBER_B.jpg" />
                    //     <p>Laut Bercerita</p>
                    // </div>
                    // <div class="gambar">
                    //     <img src="https://scoopadm.apps-foundry.com/ebook-covers/42171/image_highres/ID_HU2018MTH04HU.jpg" />
                    //     <p>Hujan</p>
                    // </div>
                    // <div class="gambar">
                    //     <img src="https://www.bukukita.com/babacms/displaybuku/117225_f.jpg" />
                    //     <p>Pulang</p>
                    // </div> -->

                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="footer">
            <!-- <div class="footer-section">
                <h3>E-Novel</h3>
                <p>Berikut adalah contact untuk menghubungi e-novel</p>
            </div> -->
            <div class="footer-section">
                <h3>About</h3>
                <p>Comic-A is a digital comic designed to make it easy for readers, so they read anywhere and anytime</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Line : @ComicA</p>
                <p>Email : comica@gmail.com</p>
            </div>
            <div class="footer-section">
                <h3>Social Media</h3>
                <p>Youtube : Comic-A</p>
                <p>Instagram : @comic.a</p>
                <p>Twitter : @comica</p>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>E-Novel</b> All Right Reserved
        </div>
    </div>
</body>
</html>