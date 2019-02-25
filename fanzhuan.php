<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/25
 * Time: 10:26
 */
function ReverseSentence($str){
    $arr=explode(" ",$str);
    $arr=array_reverse($arr);
    return implode($arr,' ');
}
$str="student. a am I";
echo ReverseSentence($str);
?>