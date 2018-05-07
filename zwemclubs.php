<?php
/**
 * Created by PhpStorm.
 * User: Warden Potato
 * Date: 5/7/2018
 * Time: 11:06
 */


$teams = ['De spartelkuikens' => '25', 'De waterbuffels' => '32', 'Plonsmderin' => '11', 'Bommetje' => '23'];
foreach($teams as $key => $value){
    echo"$key $value";
    for($i = floor($value/5); $i>0; $i--){
        echo"<img src='img/swim.png'>";
    }
    echo"<br>";
}
?>
<style>img{
        height: 50px;
        width: 50px;
    }</style>
