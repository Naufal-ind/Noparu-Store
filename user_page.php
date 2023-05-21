<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])){
header('location:login_form.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page| Noparu Store</title>
    <!----- css file ------>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<div class="navbar">
                <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="noparu-store" width="125px"></a> 
        </div>
        <nav>
            <ul id="MenuItems">
                <a href="index.php"> <li>Home</li></a>
                <a href="products.php"><li>Produk</li></a>
                <a href="about.php"><li>Tentang</li></a>
                <a href="contacts.php"> <li>Kontak</li></a>
                <a href="user_page.php" or href="admin_page.php"><li>Akun</li></a>
            </ul>
        </nav>
       <a href="cart.php"> <img src="images/cart.png" alt="keranjang" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
                </div>
        </div>    



    <div class="kontoiner">
<div class="konten">
<h3>Halo, <span>Nopakers</span></h3>
<h1>Selamat Datang <span><?php echo $_SESSION['user_name']?></span></h1>
<p>Ini adalah Halaman Pengguna</p>
<a href="login_form.php" class="tmbl">Login</a>
<a href="register_form.php" class="tmbl">Register</a>
<a href="logout.php" class="tmbl">Logout</a>

</div>




    </div>



    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Semua Aplikasi</h3>
                        <p>Download Aplikasi untuk Android dan IOS Mobile Phone</p>
                        <div class="app-logo">
                            <img src="images/play-store.png" alt="">
                            <img src="images/app-store.png" alt="">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="images/logo-white.png" alt="">
                        <p>Temukan Tujuan Baru, Hal Baru dan Keinginan serta Harapan Baru</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Link Serbaguna</h3>
                      <ul>
                          <li>Kupon</li>
                          <li>Postingan Blog</li>
                          <li>Pengembalian</li>
                          <li>Komunitas</li>
                      </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Ikuti Kita</h3>
                      <ul>
                          <li>Facebook</li>
                          <li>Twitter</li>
                          <li>Instagram</li>
                          <li>Youtube</li>
                      </ul>
                    </div>
                </div>
        
        <hr>
        <p class="copyright">Copyright 2022 - Muhammad Naufal Indiarto/21/XI RPL 3 </p>
        
            </div>
        </div>



        <!--------------------js for toggle menu-------------------->
        <script>
        var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
        
        
        </script>
        
    </div>

</body>
</html>