
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>All Products - Noparu</title>
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
                <a href="account.php"><li>Akun</li></a>
            </ul>
        </nav>
       <a href="cart.php"> <img src="images/cart.png" alt="keranjang" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
</div>    

<!---------------Account Page------------->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.png" alt="" width="100%">
            </div>
            <div class="col-2" >
                <div class="form-container">
                <div class="form-btn">
                    <span onclick="login()">Login</span>
                </span>
                    <span onclick="register()">Register</span>
                    <hr id="Indicator">
                </div>
                
                <form action="" id="LoginForm" method="POST" >
                    <input type="text" placeholder="Email" required>
                    <input type="password" placeholder="Password"required>
                    <button type="submit" class="btn">Login</button>
                    <a href="">Lupa Password</a>
                </form>

                <form action="" id="RegForm" method="POST">
                    <input type="text" placeholder="Username" name="nama" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" >
                    <button type="submit" class="btn">Register</button>
                </form>
                </div>
            </div>
        </div>
    </div>
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

<!-------- login menu -------->
<script>

var LoginForm = document.getElementById("LoginForm");
var RegForm = document.getElementById("RegForm");
var Indicator = document.getElementById("Indicator");

function register(){
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform =" translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
}

function login(){
    RegForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(0px)";
}

</script>
    
</body>
</html>