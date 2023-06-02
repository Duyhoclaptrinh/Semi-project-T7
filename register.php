<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">    
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap');
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body{
        height:100vh;
        display: flex;
        align-items: center;
        justify-content:center;
        background: url("img/background.png") center;
        background-size: 100% 100%;
    }
    .container{
        position: relative
        max-width: 430px;
        width:100%;
        background:#fff;
        border-radius:10px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .container .form{
        padding:30px;
    }
    .container .form .title{
        position: relative;
        font-size: 27px;
        font-weight:600;
    }
    .form .title::before{
        content: '';
        position: absolute;
        left:0;
        bottom:0;
        height:3px;
        width:30px;
        background-color:#4070f4;
        border-radius: 25px;
    }
    .form .input-field{
        position: relative;
        height:50px;
        width:100%;
        margin-top:30px;
    }
    .input-field input{
        position: absolute;
        height:100%;
        width:100%;
        padding:0 35px;
        border:none;
        outline:none;
        font-size:16px;
        border-bottom:2px solid #ccc;
        border-top:2px solid transparent;
        transition: all 0.2s ease;
    }
    .input-field input:is(:focus, :valid){
        border-bottom-color: #4070f4;
    }
    .input-field i{
        position: absolute;
        top:50%;
        left:0;
        transform:translateY(-50%);
        color:#999;
        font-size:23px;
        transition: all 0.2s ease;
    }
    .input-field input:is(:focus, :valid) ~ i{
        color: #4070f4;
    }
    .input-field i .icon{
        left:0;
    }
    .input-field i .showHidePw{
        right:0;
    }
    .form .button{
        margin-top:35px;
    }
    .form .button input{
        border: none;
        color:#fff;
        font-size:17px;
        font-weight:500;
        letter-spacing:1px;
        border-radius:6px;
        background-color:#4070f4;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .button input:hover{
        background-color:#265df2;
    }
    .login_link{
    margin:30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
    }
    .login_link a{
    color:#2692d9;
    text-decoration: none;
    }
    .login_link a:hover{
    text-decoration:underline;
    }
    
    </style>
</head>
<body>
     <!--Tạo form đăng nhập tài khoản-->
    <div class="container" style= "max-width:430px">
        <div class="forms">
            <div class="form register">
                <span class="title">Registration</span>
                <form action="" method="POST">
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Enter your name" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Enter your password" required>
                        <i class="uil uil-padlock icon"></i>
                        
                    </div>
                    <div class="input-field button">
                        <input type="submit" name="register" value = "Register">
                    </div>
                    <div class="login_link">
                    Already have an account? Login <a href="login.php">here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    //B1: Kết nối đến MySQL
    $connect = mysqli_connect('localhost','root','','demo_db');
    if ($connect == true) {
    if(isset($_POST['register'])) {
    //Nhận dữ liệu từ form
    $email = $_POST['email'];
    $check = "SELECT * FROM users WHERE email = '$email'";
    $check_result = mysqli_query($connect, $check);
    if(mysqli_num_rows($check_result) > 0) {
        ?>
        <script>
            alert{'Connected successfully'};
        </script>
        <?php
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
    //b2: xây dựng câu truy vấn
    $sql = "INSERT INTO users VALUES ('$email','$username','$password')";
    //b3: thực thi truy vấn
    $result = mysqli_query($connect, $sql);
    //b4: Xử lí kết quả
   
    echo "<br>";
    
    if($result) {
        echo "<script>alert('Registered successfully')</script>";
        echo"<script> window.open('web.php','_self') </script>";
    } else {
        echo "<script>alert('Registration failed')</script>";
    }
    }
    }
    } else {
        echo "Failed";
    }
    ?>
</body>
</html>