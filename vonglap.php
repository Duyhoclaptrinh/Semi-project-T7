<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Tổng các số từ 1 đến 10
    $sum = 0;
    for($x = 1; $x <= 10; $x++) {
        $sum += $x;
    }
        echo "Tổng các số từ 1 đến 10 bằng ".$sum;


    echo "<br>";    
    //Tính giai thừa của 1 số
    $n = rand(1,20);
    echo "n = "."$n";
    $giaithua = 1;
    for($a = 1; $a <= $n; $a++) {
        $giaithua *= $a;
    }
        echo " "."Giai thừa của n bằng ".$giaithua;


    echo "<br>";
    //Tính tổng S=1+2+3+4+...+n
    $n = rand(5,100);
    echo "n = "."$n";
    $sum = 0;
    for($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
        echo "  "."Tổng của dãy số S = ".$sum;


    echo "<br>";
    //Tính tổng số nguyên chẵn từ 1-->n
    $n = rand(1,100);
    echo "n = "."$n";
    $sum = 0;
    for($i = 2; $i <= $n; $i += 2) {
        $sum += $i;
    }
        echo "  ". "Tổng các số nguyên chẵn từ 1 đến n = ".$sum;


    echo "<br>";
    //Tính tổng số nguyên lẻ từ 1-->n
    $n = rand(1,100);
    echo "n = "."$n";
    $sum = 0;
    for($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
        echo "  ". "Tổng các số nguyên lẻ từ 1 đến n = ".$sum;


    echo "<br>";
    //In ra tam giác sao
    for($i = 0; $i <= 4; $i++) {
        for($a = 0; $a < $i; $a++) {
            echo "*";
        }
            echo "<br>";
    }


    echo "<br>";
    //In ra tam giác số
    for($i = 1; $i <= 4; $i++) {
        for($a = 1; $a <= $i; $a++) {
            echo $a;
        }
            echo "<br>";
    }


    echo "<br>";
    //In ra bảng cửu chương của 1 số
    $n = rand(1,9);
    echo "n = "."$n";
    echo " "."Bảng cửu chương của n là: "."<br>";
    for($i = 1; $i <= 10; $i++) {
        echo $n."*".$i."=".($n*$i);
        echo "<br>";
    }
    ?>
</body>
</html>