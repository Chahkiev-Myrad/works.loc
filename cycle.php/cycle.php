<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php
            $b = 0;
            while ($b <= 11){
            echo $b++ . '<br>';
            };
        ?>
    </ol>
    <ol>
        <?php
            for($i = 0; $i <= 11; $i++){
                echo $i . '<br>';
            }
        ?>
    </ol>
    <ol>
        <?php
            $d = 0;
            do {
                $d++;
                echo $d;
            }while ($d <= 10);
        ?>
    </ol>
</body>
</html>