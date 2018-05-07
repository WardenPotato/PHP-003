<?php
/**
 * Created by PhpStorm.
 * User: Warden Potato
 * Date: 5/7/2018
 * Time: 10:48
 */
$leeftijd = 90;
$price = 10;
switch($leeftijd){
    case $leeftijd<3:
        echo "0 euro";
        break;
    case $leeftijd<=12:
    case $leeftijd>65:
        echo $price / 100 * 50 . " euro";
        break;
    default:
        echo "$price euro";
}