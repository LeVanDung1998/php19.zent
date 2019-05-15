<?php 
	function tachChuoi($name){
		echo 'Chuỗi ban đầu: '.$name;
		$data = explode(" ",$name);
		$n = count($data);
		echo '<br>Họ: '.$data[0];
		for ($i = 0; $i < $n; $i++) {
			if ($i>0&&$i<($n-1)) {
			$Dem[] = $data[$i];
			}
		}
		echo '<br>Đệm: ';
		foreach ($Dem as $key=>$value) {
			echo $value.' ';
		}
		echo '<br>Tên: '.$data[$n-1];
	}
	$result = tachChuoi('Dương Vũ Văn Quá');
	echo $result;
 ?>