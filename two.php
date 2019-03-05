<?php
function pro($num){
	$count=0;
	$cc=0;
	$nums=$num;
	while ($nums>0) {
		$cc++;
		$nums=floor($nums/2);
	}
	
	for($i=0;$i<$cc;$i++){
		if($num%2==1){
			$count++;
		}
		$num=floor($num/2);
	}
	return $count;
}
$num=21;
echo pro($num);
/*
	6转化为二进制  
	6/2   0
	3/2   1
	1/2   1
	 0                    3


	7/2   1
	3/2   1
	1/2   1
	 0


	10/2  0
	5/2   1
	2/2   0
	1/2   1
	 0                    4


	21/2  1
	10/2  0
	5/2   1
	2/2   0
	1/2   1
	 0
*/
?>