<?php
	$arr = [2,3,8,1,7,9,6,12,15,13];
	$chan = array();
	$le = array();
	for ($i = 0; $i < count($arr) ; $i++) {
		if ($arr[$i]%2==0) {
			$chan[] = $arr[$i];

		}else {
			$le[] = $arr[$i];
		}
	}
	echo 'Mảng đầu vào:';
	foreach ($arr as $key=>$value) {
		echo $value.' ';
	}
	echo '<br>Mảng chẵn:';
	foreach ($chan as $key=>$value) {
		echo $value.' ';
	}
	
	echo '<br>Mảng lẻ:';
	foreach ($le as $key=>$value) {
		echo $value.' ';
	}
  ?>