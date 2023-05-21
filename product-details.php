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
                <a href="user_page.php" or href="admin_page.php"><li>Akun</li></a>
            </ul>
        </nav>
       <a href="cart.php"> <img src="images/cart.png" alt="keranjang" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
</div>    

<!-------------------- single product details ------------------->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
<img src="images/gallery-1.jpg" alt="" width="100%" id="ProductImg">
<div class="small-img-row">
<div class="small-img-col">
    <img src="images/gallery-1.jpg" alt="" width="100%" class="small-img">
</div>
<div class="small-img-col">
    <img src="images/gallery-2.jpg" alt="" width="100%" class="small-img">
</div>
<div class="small-img-col">
    <img src="images/gallery-3.jpg" alt="" width="100%" class="small-img">
</div>
<div class="small-img-col">
    <img src="images/gallery-4.jpg" alt="" width="100%" class="small-img">
</div>
</div>

        </div>
        <div class="col-2">
            <p>Home / T-shirt</p>
            <h1>Mikasa Ackerman T-shirt by Noparu</h1>
            <h4>IDR 350.000</h4>
            <select name="" id="">
                <option value="">Select Size</option>
                <option value="">XXL</option>
                <option value="">XL</option>
                <option value="">Large</option>
                <option value="">Medium</option>
                <option value="">Small</option>
            </select>
            <input type="number" value="1">
            <a href="" class="btn">Tambah Ke Keranjang</a>
              
            <h3>Detail Produk <i class="fa fa-indent"></i></h3>
            <br>
            <p>Memberimu Pakaian dengan Rasa Ekslusif, Sebuah Persembahan dari Noparu, Terinspirasi dari Karakter Anime Mikasa Ackerman dari Serial Attack on Titan, Bahan yang Ekslusif serta Desain Terbaik.</p>
        </div>
    </div>
</div>


<!----------------title --------------->
<div class="small-container">
    <div class="row row-2">
<h2>Produk Terkait</h2>
<p>Lihat Lainnya</p>
    </div>
</div>


<!----------------products --------------->


<div class="small-container">

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



<!-------------------js for product gallery---------------------->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function()
    {
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function()
    {
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function()
    {
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function()
    {
        ProductImg.src = SmallImg[3].src;
    }

</script>

    
</body>
</html>