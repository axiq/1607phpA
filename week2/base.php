<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/26
 * Time: 8:38
 */
/*
 * 下一个元素开始数，数到m就删除，求最后剩下的数字
 */
function sheng($n,$m){
    $arr=range(1,$n);
    $k=0;
    $i=0;
    $sh=[];
    while (count($arr)>1){
        if(!isset($arr[$i])){
            $arr=$sh;
            $i=0;
            $sh=[];
        }
        $k++;
        if($k==$m){
            unset($arr[$i]);
            $k=0;
        }
        else{
            $sh[]=$arr[$i];

        }
        $i++;
    }
    return implode($arr,'');
}
$n=10;
$m=5;
echo '最后剩下的数字是：'.sheng($n,$m);
echo "<br>";

/*
 * 数组内包含n个数字，要求将数组分为三组，每组的和尽量相近
 */
function fen($arr){
    rsort($arr);
    $array=[
        [array_shift($arr)],
        [array_shift($arr)],
        [array_shift($arr)]
    ];
    for ($i=0;$i<count($arr);$i++){
        $array[2][]=$arr[$i];
        $sum=array_sum($array[2]);
        if($sum>array_sum($array[0])){
            $array=[
                $array[2],
                $array[0],
                $array[1]
            ];
        }
        else if ($sum>array_sum($array[1])){
            $array=[
                $array[0],
                $array[2],
                $array[1]
            ];
        }
    }
    return $array;
}
$arr=[1,2,3,9,5,6,7,8,10];
echo "<pre>";
print_r(fen($arr));
echo "<br>";

/*
 * 组内包含n个正整数数字，返回数组内数字可以组成的最大值
 */
function max_zhi($arr,$pow=0){
    static $return=[];
    $t=[];//定义一个桶
    for ($i=0;$i<10;$i++){//在里边定义十个桶
        $t[]=[];
    }
    $tt=[];//定义一个临时桶
    $count=count($arr);
    for ($k=0;$k<$count;$k++){
        $index=((string)$arr[$k]);
        if(isset($index[$pow])){
            $t[$index[$pow]][]=$arr[$k];
        }
        else{
            $tt[$index[$pow-1]][]=$arr[$k];
        }
    }

    for ($j=0;$j<10;$j++){
        if(count($t[$j])==1){
            array_unshift($return,array_pop($t[$j]));
        }
        else if(count($t[$j])>1){
            max_zhi($t[$j],$pow+1);
        }
        if(isset($tt[$j])){
            $return=array_merge($tt[$j],$return);
        }
    }
    return implode($return,'');
}
$arr=[32,3,9,5,99];
print_r(max_zhi($arr));
echo "<br>";

/*
 * 使用算法计算出每一个用户的平均等待时间
 */
function deng($active_time,$process_time){
    $count=count($active_time);
    $windows=[];
    $wait=0;
    for($i=0;$i<$count;$i++){
        if(count($windows)<4){
            $windows[]=$active_time[$i]+$process_time[$i];
            sort($windows);
        }
        else{
            $first=array_shift($windows);
            if($first>$active_time[$i]){
                $wait=$first-$active_time[$i];
                $windows[]=$first+$process_time[$i];
            }
            else{
                $windows[]=$active_time[$i]+$process_time[$i];
            }
        }

    }
    return $wait/$count;
}
$active_time =  [9.01, 9.10, 9.20, 9.21, 9.22];
$process_time = [0.30, 0.18, 0.22, 0.47, 0.11];
echo "平均等待时间：".deng($active_time,$process_time);
?>