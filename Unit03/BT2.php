<?php 
	function chuanHoaChuoi($name){
		echo 'Chuỗi ban đầu :'.$name;
		$cut = trim($name);
		echo '<br>Chuỗi sau khi cắt khoảng trắng đầu và cuối: '.$cut;
		$data = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
		echo '<br>Chuỗi sau khi chuẩn hóa,viết hoa chữ cái đầu và dấu chấm kết thúc chuỗi: '.$data.'.';
	}
	$result = chuanHoaChuoi('vŨ văN thƯơNg ');
	echo $result;
 ?>
