<?php 
	function palindrome($name)
	{
		echo 'Chuỗi ban đầu: '.$name;
		if ($name==strrev($name)) {
			echo '<br>Là chuỗi palindrome';
		}
		else {
			echo '<br>Không là chuỗi palindrome';
		}
	}
	$result = palindrome("ZenttneZ");
	echo $result;
 ?>
