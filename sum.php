<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/27
 * Time: 10:23
 */

function add($a,$b){
    $sum=0;
    while ($b) {
        $a = $a ^ $b;
        $b = ($a & $b) << 1;
        $sum=$a;
    }
    return $sum;
}
$a=21;$b=5;
echo $a."与".$b.'的和是：'.add($a,$b);
?>