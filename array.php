<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/3/6
 * Time: 10:25
 */

function ss($num){
    $arr=range(1,25);
    foreach ($arr as $key=>$val){
        if($val==$num){
            return $key;
        }
    }
}
$num=23;
echo ss2($num);
function ss2($num,$p=0){
    $arr=range(1,25);
    if($num==$arr[$p]){
        echo $p;
    }
    else{
        ss2($num,$p+1);
    }

}
?>