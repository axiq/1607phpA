<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/28
 * Time: 10:23
 */
function FindNumbersWithSum($arr,$s){
    $count=count($arr);
    $return=[];
    for ($i=0;$i<$count;$i++){
        for ($j=0;$j<$count;$j++){
            $sum=$arr[$i]+$arr[$j];
            if($sum==$s){
                $return[]=$arr[$i].' '.$arr[$j];
            }
        }
    }
    if(count($return)>2){
        foreach ($return as $key=>$val){
            $array=explode(' ',$val);
            $ji=$array[0]*$array[1];
            $r[]=$ji;
        }
        sort($r);

        return array_shift($r);
    }

}
$arr=[1,2,4,5,8,10,13,22];
$s=6;
echo '数组中两数相加等于'.$s.'且两数乘积最小的是：'.FindNumbersWithSum($arr,$s);
?>