<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/19
 * Time: 8:43
 */
function one_app($min,$max){
    $arr=range($min,$max);
    $str=implode('',$arr);
    return substr_count($str,'1');
}
$min=100;$max=1300;
echo $min.'到'.$max.'之间1出现的次数：'.one_app($min,$max);
?>