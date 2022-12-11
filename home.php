
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic-A - Home</title>
    <link rel="stylesheet" href="assets/css/styles3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.2/axios.min.js" integrity="sha512-bHeT+z+n8rh9CKrSrbyfbINxu7gsBmSHlDCb3gUF1BjmjDzKhoKspyB71k0CIRBSjE5IVQiMMVBgCWjF60qsvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">Comic-A</a></div>
            <div class="menu">
                <ul>
                    <li>
                        <form>
                            <input type="text" placeholder="Enter tittle..." id="search">	
                            <button onclick="cari(event)">Search</button>	
                        </form>
                    </li>
                    <li><a href="index.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <p>
            Hello, Readers! Happy reading...
        </p>
        <div class="histori">
        </div>
    </div>
    <div id="contact">
        <div class="footer">
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
            &copy; 2022. <b>Comic-A</b> All Right Reserved
        </div>
    </div>
    <script src="assets/js/script1.js"></script>
</body>
</html>