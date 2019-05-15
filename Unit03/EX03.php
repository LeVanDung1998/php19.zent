<?php 
	 $name ="Zent Group - Be all you can be !";
	 $data = explode(" ",$name);
	echo "<pre>";
		print_r($data);
	echo "</pre>";

	$name = implode(" ",$data);
	echo $name;

	echo "<br> - Độ dài chuỗi: ".strlen($name);

	echo "<br> - Đếm số từ trong chuỗi: ".str_word_count($name);

	echo "<br>".str_repeat("<br>Anh yeu em em <br>",5);

	echo "<br>".str_replace("all","tat ca",$name);

	echo "<br> Hàm băm dữ liệu:" .md5('123456');

	echo "<br> Hàm băm dữ liệu: " .sha1('123456');

	echo "<br> Cắt chuỗi con:".substr($name,2,10); // cat tu vi tri 2, chuoi con co do dai 10

	echo "<br>".strstr($name,"Be");//cắt chuỗi con bắt đầu từ chữ Be

	// Tim vi tri cua chuoi Con
	echo "<br>".strpos($name,"Be");
 ?>