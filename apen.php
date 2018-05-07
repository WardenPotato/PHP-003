<?php
/**
 * Created by PhpStorm.
 * User: Warden Potato
 * Date: 5/7/2018
 * Time: 10:39
 */?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            text-align: center;
        }

        .rood{
            border: red solid 5px;
        }
        .groen{
            border: green solid 5px;
        }
    </style>
    <title>Php Opdracht</title>
</head>
<body>
    <?php
        for($i = 1; $i <= 9; $i++){
            if($i % 2 == 0){
                $class = "class='rood'";
            }else{
                $class = "class='groen'";
            }
            echo"<img ".$class. "src='img/aap".$i.".jpg'>";
        }
    ?>
</body>
</html>