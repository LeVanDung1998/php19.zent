<?php 
	$arr = array();
	$arr['name']="Dũng";
	$arr['age']="21";
	echo '<pre>';
	print_r($arr);
	echo '</pre>';

	$b=[2,4,5,6,8,4];
	echo '<pre>';
	print_r($b[3]);
	echo '</pre>';

	$student =[];
	$std1['name']="Dũng";
	$std1["age"]="21";
	$student[]= $std1;
	$std2['name']="Dũng2";
	$std2["age"]="212";
	$student[]= $std2;
	echo '<pre>';
	print_r($student);
	echo '</pre>';
	for ($i = 0; $i < count($student) ; $i++) {
		echo $student[$i]['name'].'<br>';
	}

 ?>