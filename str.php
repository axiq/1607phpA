<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/3/1
 * Time: 10:25
 */
function FirstNotRepeatingChar($str){
    $len=strlen($str);
    for ($i=0;$i<$len;$i++){
        $count=substr_count($str,$str[$i]);
        if($count==1){
            $st=$i;
            return $st;
        }

    }
    return -1;
}

$str='gfffgggddD';
echo FirstNotRepeatingChar($str);
?>