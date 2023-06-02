<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "GET">
    namsinh = <input type="date" name = "namsinh">
        <br>
    namhientai = <input type="date" name = "namhientai">
        <br>
    <input type="submit" name = "submit" value = "Tính tuổi của tôi">
    </form>
    
    <?php
    $namsinh = $_GET["namsinh"];
    $namhientai = $_GET["namhientai"];
    $tuoi = 0;
    $tuoi = ($namhientai - $namsinh);
    echo "Tuổi của tôi bằng $tuoi";
    ?>

    <form action="" method = "GET">
        n1 = <input type="text" name = "n1">
        <br>
        n2 = <input type="text" name = "n2">
        <br>
        n3 = <input type="text" name = "n3">
        <br>
        <input type="submit" name = "submit" value = "Số lớn nhất là">
    </form>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    if ($n1 >= $n2 && $n1 >= $n3) {
        echo "Số lớn nhất là $n1";
    } else if ($n2 >= $n3) {
        echo "Số lớn nhất là $n2";
    } else {
        echo "Số lớn nhất là $n3";
    }
    ?>

    <form action="" method = "GET">
        a = <input type="text" name = "a">
        <br>
        b = <input type="text" name = "b">
        <br>
        <input type="submit" name = "submit" value = "Nghiệm của phương trình là ">
    </form>
    <?php
    $a = $_GET["a"];
    $b = $_GET["b"];
    if ($a == 0) {
        if($b==0) {
            echo "Phương trình có vô số nghiệm";
         }
         else {
            echo "Phương trình có vô nghiệm";
         }
        }
        else {
         echo "Nghiệm của phương trình là x = ".(-$b/$a);
    }
    ?>








</body>
</html>