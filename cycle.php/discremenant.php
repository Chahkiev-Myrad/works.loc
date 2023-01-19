<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dacument</title>
</head>
<body>
    <?php
        function calc($a,$b,$c){
            $dis = ($b*$b)-(4*$a*$c);
                echo $dis. '<br>';
            if ($dis > 0) {
                $x1 = (-$b - sqrt($dis) / (2 * $a));
                $x2 = (-$b + sqrt($dis) / (2 * $a));
                echo $x1.'<br>'.$x2;
        }elseif($dis == 0){
            $x1 = -$b / 2 * $a;
            echo $x1;
        }else{
            echo 'Нет корней';
        }

        calc(1,11,1);
    ?>
</body>
</html>