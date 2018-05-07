<?php
/**
 * Created by PhpStorm.
 * User: Warden Potato
 * Date: 5/7/2018
 * Time: 10:11
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Php Opdracht</title>
</head>
<body>
    <?php
//        for($i = 1; $i <= 9; $i++){
//            echo"<img src='img/aap".$i.".jpg'>";
//        }
        $bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg", "weeping-elm.jpg", "weeping-elm0091.jpg");
        foreach ($bomen as $boom){
            echo"<img src='img2/".$boom."'>";
        }
    ?>
</body>
</html>