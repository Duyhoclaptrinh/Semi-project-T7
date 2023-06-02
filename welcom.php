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
        n = <input type="text" name = "n">
        <br>
        <input type="submit" name = "submit" value = "Tính tổng số chẵn">
    </form>
    <?php
    $n = $_GET["n"];
    $sum = 0;
    for($i = 2; $i<= $n; $i +=2) {
        $sum += $i;
    }
    echo "Tổng các số chẵn từ 1 đến n bằng ".$sum;
    ?>
</body>
</html>