<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/18
 * Time: 8:39
 */
/*
 * 水仙花
 */
function flower($min,$max){
    $arr=[];
    for($i=$min;$i<=$max;$i++){
        $b=floor($i/100);
        $s=floor(($i-$b*100)/10);
        $g=$i-$b*100-$s*10;
        if($b*$b*$b+$s*$s*$s+$g*$g*$g==$b*100+$s*10+$g){
            $arr[]=$i;
        }
    }
    return implode('、',$arr);
}
$min=100;$max=999;
echo $min."-".$max."的水仙花数：".flower($min,$max);
echo "<br>";

/*
 * 字符串中首先出现三次的英文字符
 */
function res($str){
    for ($i=0;$i<strlen($str)-1;$i++){
        if(substr_count($str,$str[$i])==3){
            return $str[$i];
        }
    }
}
$str="I have aa good excrisize";
echo $str."中首先出现三次的英文字符：".res($str);
echo "<br>";

/*
 * 回文字符串
 */
function hui($str){
    $len=strlen($str);
    $rev='';
    for($i=$len-1;$i>=0;$i--){
        $rev.=$str[$i];
    }
    if($rev==$str){
        return 'yes';
    }
    else{
        return 'no';
    }
}
$str="12421";
echo $str."是否为回文字符串(yes/no)：".hui($str);
echo "<br>";

/*
 * 斐波那契
 */
function fei($num){
    $arr[0]=$arr[1]=1;
    for($i=2;$i<$num;$i++){
        $arr[]=$arr[$i-1]+$arr[$i-2];
    }
    return implode('、',$arr);
}
$num=10;
echo $num."项斐波那契：".fei($num);
echo "<br>";

/*
 * 数字转字母
 */
function num_zimu($num){
    $arr=range('a','z');
    $count=count($arr);
    $list=[];
    while($num){
        $shang=floor($num/$count);
        $mo=$num%$count;
        if($mo==0){
            array_unshift($list,$arr[$count-1]);
        }
        else{
            array_unshift($list,$arr[$mo-1]);
        }
        $num=$shang;
    }
    return implode('',$list);
}
$num=703;
echo $num."对应的字母：".num_zimu($num);
echo "<br>";

/*
 * 台阶问题
 */
function fang($num){
    $a=1;$b=1;
    if($num==1||$num==2){
        return 1;
    }
    for($i=3;$i<=$num;$i++){
        $t=$a+$b;
        $a=$b;
        $b=$t;
    }
    return $b;
}
$num=10;
echo $num."个台阶有多少种走法：".fang($num);
?>