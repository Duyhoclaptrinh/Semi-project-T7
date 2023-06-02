<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="web.css">

</head>
<body>
<div class="wrapper">
        <div class="header">
            <div class="logo">
                <img id="logo" src="img/logo.png" width: 40px height: 40px />
            </div>
            <!--/.header_logo-->
            <div id="form_search">
                <form method="get" action="" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="Search a Animal" />
                    <input type="submit" name="search" value="Search" />
                </form>
            </div>
        </div>
        <!-- end header -->
        <div class="menu">
            <ul>
                <li> <a href="web.php"> Home </a> </li>
                <li> <a href="quanli.php">Product Management </a></li>
                <li><a href="add_products.php"> Add Products </a> </li>
                <li><a href="login.php"> Login </a></li>
                <li><a href="register.php"> Register </a></li>
            </ul>
        </div>
        <div class="content">
            <div class="left">
                <p> Species </p>
                <div class="category">
                    <ul>
                        <li> <a href="#">Corgi </a></li>
                        <li> <a href="#">Pit bull </a></li>
                        <li> <a href="#">Husky </a></li>
                        <li> <a href="#">Chihuahua </a></li>
                        <li> <a href="#">Munchkin </a></li>
                    </ul>
                </div>
                <p> Characteristics </p>
                <div class="brand">
                    <ul>
                        <li> <a href="#">Thoroughbred </a></li>
                        <li> <a href="#">Crossbred </a></li>
                        <li> <a href="#">Intelligent </a></li>
                        <li> <a href="#">Tameable </a></li>
                        <li> <a href="#">Cheap </a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <p style="text-align: center;font-size: 20px"> Selling Products </p>
                <div class="products_box">
 
                    <!--Truy vấn từ cơ sở dữ liệu -->
        <?php
                //B1: Kết nối
            $connect = mysqli_connect('localhost', 'root', '', 'demo_db');
            
           
            //B2: Viết câu truy vấn
            $sql = "select * from products";
            //B3: Thực thi truy vấn
            $result = mysqli_query($connect,$sql);
            //Đưa kết quả vào mảng liên kết
            
            while($row_product =mysqli_fetch_array($result)){
                //Hiển thị lần lượt từng sản phẩm
                $product_id = $row_product['product_id'];
                $product_name = $row_product['product_name'];
                $product_price = $row_product['product_price'];
                $product_img = $row_product['product_img'];
                echo"
                <div class='single_product'>
                <h3>$product_name</h3>
                <img src='img/$product_img' width='180' height='180' />
                <p><b> Price:$product_price </b></p>
                <a href='detail.php?id=$product_id'>Details</a>
                <a href='index.php?add_cart=$product_id'>
                <button style='float:right'>Add to Cart</button>
                </a>          
        
                </div>       
                ";
 
            }
        ?>
        </div>
 
        </div>
        </div>
    </div>
    <div class="footer">
    <header>
        <h2><span></span></h2>
    </header>
   
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Sagar<span>Developer</span></h3>
            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
                |
                <a href="#">Blog</a>
                
            </p>
            <p class="footer-company-name">Copyright 2021 <strong>Sagardeveloper</strong> All rights reserved</p>
            
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-market"></i>
                <p><span>Ghaziabab</span> Delhi</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+91 74**9**258</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">xyz@gamil.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>Sagar Developer</strong> is a YouTube channel where you can find more creative CSS Animation and
                Effects along with HTML, JavaScript and projects Using C/C++.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
	</div>
    
    </div>
</body>
</html>

    