<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap');
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body{
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .container{
        max-width: 700px;
        width: 100%;
        background: #fff;
        padding:25px 30px;
        border-radius:5px;
    }
    .container .title{
        font-size:25px;
        font-weight:500;
        position: relative;
    }
    .container .title::before{
        content: '';
        position: absolute;
        left:0;
        bottom:0;
        height: 3PX;
        width:30px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .container form .user-details{
        display: flex;
        flex-wrap:wrap;
        justify-content: space-between;
    }
    form .user-details .input-box{
        margin-bottom:15px;
        width: calc(100% / 2 - 20px);
    }
    .user-details .input-box .details{
        display:block;
        font-weight:500;
        margin-bottom:5px;
    }
    .user-details .input-box input{
        height:45px;
        width:100%;
        outline: none;
        border-radius:5px;
        border:1px solid #ccc;
        padding-left:15px;
        font-size: 16px;
        border-bottom-width:2px;
        transition: all 0.3s ease;
    }
    .user-details .input-box input[type="file"]{
        padding-top: 8px;
    }
    .user-details .input-box input:focus,
    .user-details .input-box input:valid{
        border-color:#9b59b6;
    }
    form .button{
        height:45px;
        margin: 45px 0;
    }
    form .button input{
        height: 100%;
        width:100%;
        otline: none;
        color: #fff;
        border:none;
        font-size:18px;
        font-weight:500;
        border-radius:5px;
        letter-spacing:1px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    form .button input:hover{
        background: linear-gradient(-135deg, #71b7e6, #9b59b6);
    }
    @media (max-width: 584px) {
        .container{
        max-width: 100px;
        }
        form .user-details .input-box{
        margin-bottom:15px;
        width: 100%;
        }
        .container form .user-details{
        max-height: 300px;
        overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar{
        width:0;
        }
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">ADD PRODUCTS</div>
        <form action="" method="POST" enctype = "multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Product ID</span>
                    <input type="text" name="product_id" placeholder="Enter product ID" required >
                </div>
                <div class="input-box">
                    <span class="details">Product Name</span>
                    <input type="text" name="product_name" placeholder="Enter product name" required>
                </div>
                <div class="input-box">
                    <span class="details">Product IMG</span>
                    <input type="file" name="product_img" placeholder="Enter product img" required>
                </div>
                <div class="input-box">
                    <span class="details">Quantity</span>
                    <input type="text" name="product_price" placeholder="Enter product price" required>
                </div>
                <div class="input-box">
                    <span class="details">Product Price</span>
                    <input type="text" name="quantity" placeholder="Enter quantity" required>
                </div>
                <div class="input-box">
                    <span class="details">Description</span>
                    <input type="text" name="product_des" placeholder="Enter description" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" name = "add_product" value= "Add Product">
            </div>
        </form>
    </div>


<?php
    $connect = mysqli_connect('localhost','root','','demo_db');
    if (isset($_POST['add_product'])) {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $quantity = $_POST['quantity'];
        $product_des = $_POST['product_des'];
        $product_img = $_FILES['product_img']['name'];
        $product_img_tmg = $_FILES['product_img']['tmp_name'];
        move_uploaded_file($product_img_tmg,"test/$product_img");
        $sql = "INSERT INTO products VALUES('$product_id','$product_name','$product_img','$product_price','$quantity','$product_des')";
        $result = mysqli_query($connect,$sql);
        if ($result) {
            echo "<script>alert('Added new successfully.')</script>";
            echo"<script> window.open('web.php','_self') </script>";
        } else {
            echo "<script>alert('Add new failed.')</script>";
        }
    }
    ?>  
</body>
</html>