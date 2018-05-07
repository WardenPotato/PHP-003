<?php
/**
 * Created by PhpStorm.
 * User: Warden Potato
 * Date: 5/7/2018
 * Time: 10:27
 */
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            text-align: center;
        }
    </style>
    <title>Php Opdracht</title>
</head>
<body>
    <?php
        for($i = 0; $i <= 9; $i++){
            for($j = 0; $j<$i; $j++){
                echo"*";
            }
            echo"*<br>";
        }
    ?>
</body>
</html>