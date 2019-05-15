<?php 
	$arr = [1,4,2,6,9,100,45,8,20, 101, 23,150];
	$max = $arr[0];
	for ($i = 0; $i < count($arr); $i++) {
		if ($arr[$i]>$max) {
			$max=$arr[$i];
		}
	}
	echo 'Mảng ban đầu là :';
	foreach ($arr as $key=>$value) {
		echo $value.' ';
	}
	echo '<br>Phần tử lớn nhất của mảng là:'.$max;
 ?>