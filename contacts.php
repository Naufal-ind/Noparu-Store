<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | Hubungi Saya</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        
        <div class="container">
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
        
    <div class="cantoiner">
<form action="https://formspree.io/f/mpzbjqee" method="POST" class="form">
<h3 style="text-align:center;">
    HUBUNGI SAYA
</h3>
<input type="text" name="Name" placeholder="Nama Lengkap" required>
<input type="email" name="Email" placeholder="ID Email" required>
<input type="text" name="Phone" placeholder="Nomor Telephone" required>
<textarea name="Message" id="message" rows="4" placeholder="Apa yang bisa Dibantu?" requier></textarea>
<button type="submit">Kirim</button>
</form>
    </div>



        <!----------------footer----------------->
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