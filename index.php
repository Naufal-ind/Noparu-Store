<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Noparu | E-commerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
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
        <div class="row">
            <div class="col-2">
<h1>
    Temukan Hal Baru<br> Untuk Hobimu Yang Seru!
</h1>
<p>
    Dunia ini sangatlah luas, banyak hal menarik dan baru diluar sana,<br> Ini bukan tentang dirimu atau aku ini tentang kita, Komunitas yang berharga!
</p>
<a href="" class="btn">Jelajahi Sekarang &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/image1.png" alt="haikyuu">
            </div>
        </div>
</div>    
</div>

<!-------- featured categories -------->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="images/category-1.jpg" alt="">
            </div>
            <div class="col-3">
                <img src="images/category-2.jpg" alt="">
            </div>
            <div class="col-3">
                <img src="images/category-3.jpg" alt="">
            </div>
        </div>
    </div>
   
</div>

<!-------- featured products -------->
<div class="small-container">
<h2 class="title">Produk Unggulan</h2>
<div class="row">
    <div class="col-4">
       <a href="product-details.php"><img src="images/product-1.jpg" alt="">
        <h4>Mikasa Ackerman T-shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>IDR 350.000</p></a>
    </div>

   
        <div class="col-4">
            <img src="images/product-2.jpg" alt="">
            <h4>Sarung Tomioka Giyuu</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>IDR 150.000</p>
        </div>
        
            <div class="col-4">
                <img src="images/product-3.jpg" alt="">
                <h4>Levi Ackerman Hodie</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>IDR 420.000</p>
            </div>
            
                <div class="col-4">
                    <img src="images/product-4.jpg" alt="">
                    <h4>Sakurajima Mai Hodie</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>IDR 490.000</p>
                </div>
</div>
<h2 class="title">Produk Terbaru</h2>
<div class="row">
    <div class="col-4">
        <img src="images/product-5.jpg" alt="">
        <h4>Zenitsu Agatsuma Sweater</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>IDR 470.000</p>
    </div>

   
        <div class="col-4">
            <img src="images/product-6.jpg" alt="">
            <h4>Ryoumen Tsukuna T-shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>IDR 250.000</p>
        </div>
        
            <div class="col-4">
                <img src="images/product-7.jpg" alt="">
                <h4>Haikyuu! Totebag</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>IDR 90.000</p>
            </div>
            
                <div class="col-4">
                    <img src="images/product-8.jpg" alt="">
                    <h4>Jiyuu no Tsubasa T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>IDR 130.000</p>
                </div>
</div>

<div class="row">
    <div class="col-4">
        <img src="images/product-9.jpg" alt="">
        <h4>Jiyuu no Tsubasa Bag</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>IDR 330.000</p>
    </div>

   
        <div class="col-4">
            <img src="images/product-10.jpg" alt="">
            <h4>Figure Monkey Dluffy</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>IDR 550.000</p>
        </div>
        
            <div class="col-4">
                <img src="images/product-11.jpg" alt="">
                <h4>Manga Haikyuu! Vol 44</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>IDR 130.000</p>
            </div>
            
                <div class="col-4">
                    <img src="images/product-12.jpg" alt="">
                    <h4>Nedoroid Kageyama Tobio</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>IDR 290.000</p>
                </div>
</div>



</div>
<!---------------- offer ----------------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/exclusive.png" alt="" class="offer-img">



            </div>
            <div class="col-2">
<p>T-shirt Exlusif Sekarang Tersedia di Noparu Store!</p>
<h1>Rengoku T-shirt</h1>
<small>Baju Rengoku Kyojuro dari Serial Anime Kimetsu no Yaiba, adalah Produk Exlusif karena dibuat dengan bahan Cotton yang nyaman untuk menemani harimu dan memiliki Print desain yang Unik. Dapatkan Long Lasting tee dengan warna cantik ini untuk merasa muda selamanya!.</small>
<br>
<a href="" class="btn">Beli Sekarang &#8594;</a>
            </div>
        </div>
    </div>
</div>

<!--------------- testimonial ------------->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                    Banyak hal baru yang saya ketahui tentang dunia dan komunitas, saya menjadi tertarik untuk mempelajarinya lebih lanjut!
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="images/user-1.png" alt="">
                <h3>Dian Reish</h3>

            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                    Seperti di Judul, Ini bukan tentang aku, kamu atau dia, Ini adalah Tentang Kita, Kita adalah Semangat Komunitas itu Sendiri!
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="images/user-2.png" alt="">
                <h3>Robert Banner</h3>
                
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                    Barang yang ditawarkan sangat banyak dan bermacam-macam, saran saya anda harus mengkategorikannya dengan benar :)
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user-3.png" alt="">
                <h3>Diana Jhonson</h3>
                
            </div>
        </div>
    </div>
</div>


<!--------------brands------------->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png" alt="">
            </div> 
            <div class="col-5">
                <img src="images/logo-oppo.png" alt="">
            </div> 
            <div class="col-5">
                <img src="images/logo-coca-cola.png" alt="">
            </div> 
            <div class="col-5">
                <img src="images/logo-paypal.png" alt="">
            </div> 
            <div class="col-5">
                <img src="images/logo-philips.png" alt="">
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

    
</body>
</html>