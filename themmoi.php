<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Tạo form để thêm mới sản phẩm -->
    <form action="" method = "POST" enctype = "multipart/form-data" >
    <table>
        <tr>
            <td>Mã sản phẩm:</td>
            <td><input type="text" name = "product_id"></td>
        </tr>
        <tr>
            <td>Tên sản phẩm:</td>
            <td><input type="text" name = "product_name"></td>
        </tr>
        <tr>
            <td>Ảnh sản phẩm:</td>
            <td><input type="file" name = "product_img"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm:</td>
            <td><input type="text" name = "product_price"></td>
        </tr>
        <tr>
            <td>Số lượng sản phẩm:</td>
            <td><input type="text" name = "quantity"></td>
        </tr>
        <tr>
            <td>Mô tả sản phẩm:</td>
            <td><input type="text" name = "product_des"></td>
        </tr>
        <tr>
            <td><input type="submit" name = "add_product" value= "Thêm mới"></td>
        </tr>
    </table>
    </form>

    <?php
    $connect = mysqli_connect('localhost','root','','demo_db');
    if(!$connect) {
        echo "Kết nối thất bại";
    } else {
        echo "Kết nối thành công";
    }
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
            echo "<script>alert('Thêm mới thành công')</script>";
        } else {
            echo "<script>alert('Thêm mới thất bại')</script>";
        }
    }
    ?>  
</body>
</html>