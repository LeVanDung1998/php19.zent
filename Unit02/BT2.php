<?php 
	$arr = [1,3,5,7,9,11];
	echo 'Mảng ban đầu:';
	foreach ($arr as $key=>$value) {
		echo $value.' ';
	}
	$temp ;
	$j= count($arr)-1;
	for ($i = 0,$j ; $i <= $j; $i++, $j--) {
		$temp = $arr[$i];
		$arr[$i] = $arr[$j];
		$arr[$j] = $temp;
	}
	echo '<br>Mảng sau khi đảo ngược:';
	foreach ($arr as $key=>$value) {
		echo $value.' ';
	}
 ?>