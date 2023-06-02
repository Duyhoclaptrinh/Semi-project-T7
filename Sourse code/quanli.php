<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .wrapper {
    width: 1000px;
    height: auto;
    margin: auto;
}

.header {
    height: 55px;
    margin: auto;
    border: 1px solid black;
}

.logo {
    float: left;
    width: 150px;
    padding: 10px
}
#logo {
    width: 30%;
    height: 30%;
}

#form_search {
    margin-top: 10px;

}

#form_search input[type=text] {
    width: 250px;
    height: 30px
}

#form_search input[type=submit] {
    height: 30px
}

.login {
    float: right;
    right: 30px;
    height: 35px;
    line-height: 35px;
    color: gray;
    position: relative;
    display: inline;
}

.login a {
    text-decoration: none;

}

.register {
    float: right;
    margin-right: 50px;
    height: 35px;
    line-height: 35px;
    color: gray;
}

.register a {
    text-decoration: none;

}

.menu {
    width: 100% ;
    height: 50px;
    background: #446084;
    border: 1px solid black
}

.menu ul li {
    list-style: none;
    text-align: center;
    display: inline-table;
}

.menu ul li a {
    text-decoration: none;
    font-size: 16px;
    margin: 30px;
    padding: 5px;
    text-transform: uppercase;
    color: white;
    font-weight: bold;
}





.right {
    width: 100%;
    float: center;
}
.right p {
    color: #446084;
    text-transform: uppercase;
    
}

.footer {
    width: 1000px;
    height: 100px;
    background: #f0f0f0;
    clear: both;
}



.products_box {
    width: 100%;
    text-align: center;
    margin-left: 30px;
    margin-bottom: 10px;
}

.single_product {
    float: left;
    margin-left: 30px;
    padding: 10px;
}

.single_product img {
    border: 2px solid black;
}
    </style>
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
        
            <div class="right">
                <p style="text-align: center;font-size: 20px"> All Products </p>
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
</body>
</html>