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
     //Khai báo biến
  
     // Nối chuỗi
     $x1="English";
     $x2="is Tiếng Anh";
     echo "<br>".$x1." ".$x2."<br>";

     $x=10;
     $y=11;
     echo "x+y=".($x+$y);
     echo "<br>";
     echo "x-y=".($x-$y);
     echo "<br>";
     echo "x*y=".($x*$y);
     echo "<br>";
     echo "x/y=".($x/$y);
     echo "<br>";
     echo "x%y=".($x%$y);
     echo "<br>";
     echo "x++=".($x++);
     echo "<br>";
     echo "++x=".(++$x);
     echo "<br>";
     echo "y--=".($y--);
     echo "<br>";
     echo "--y=".(--$y);
     echo "<br>";
    //Tìm số lớn nhất trong 3 số
     $a=3;
     $b=5;
     $c=8;
     if($a >= $b && $a>= $c) {
        echo "Số lớn nhất là a";
     }
     else if ($b >= $c) {
        echo "Số lớn nhất là b";
     }
     else {
        echo "Số lớn nhất là c";
     }
    
     echo "<br>";
     //Kiểm tra 1 số là chẵn hay lẻ
     $d=7;
     if($d % 2 == 0) {
        echo "d là số chẵn";
     }
     else {
        echo "d là số lẻ";
     }
 

     echo "<br>";
     //Giải phương trình bậc 1
     $a=10;
     $b=17;
     if($a==0) {
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


     echo "<br>";
     //Nghiệm của phương trình bậc 2
     $a=10;
     $b=20;
     $c=7;
     echo "Phương trình: ".$a."x2 + ".$b."x + ".$c." = 0";
     echo "<br>";
     if($a == 0) {
      if($b ==0 ) {
         echo "Phương trình vô nghiệm";
      } else {
         echo "Phương trình có 1 nghiệm: "." x = ".(-$c/$b);
      }
     }
     $delta = $b*$b-4*$a*$c;
     if($delta >0) {
         $x1 = (-$b +sqrt($delta)) / (2 * $a);
         $x2 = (-$b -sqrt($delta)) / (2 * $a);
         echo "Phương trình có 2 nghiệm là: x1 = ".$x1." và x2 = ".$x2;
     } else if ($delta == 0) {
         $x = -$b / (2 * $a);
         echo "Phương trình có nghiệm kép: x1 = x2 = ".$x;
     } else {
         echo "Phương trình vô nghiệm";
     }











    ?>
</body>
</html>