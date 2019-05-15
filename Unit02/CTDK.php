<?php
	// in số nguyên tố
	// for ($i = 1; $i <=100; $i++) {
	// 	$flag=true;
	// 	for ($j = 2; $j <= ceil(sqrt($i)) ; $j++) {
	// 		if($i%$j==0){
	// 			$flag =false;
	// 			break;
	// 		}
	// 	}
	// 	if ($flag) {
	// 		echo $i."<br>";
	// 	}
	// }
	// while
	// $i=1;
	// while ($i<=10) {
	//     echo 'hello<br>';
	//     $i+=2;
	// }
 //    echo "<br><br>";
 //    do while
	// $j=0;
	// do{
	// 	echo 'hello<br>';
	// 	$j+=2;
	// }while ($j<=10) 
// while in số nguyên tố
	$a=1;
	 
	while ($a<=100) {
		$flag=true;
	    $j=2;
		while ($j<= ceil(sqrt($a))) {
		    if($a%$j==0){
			$flag =false;
				break;
			}
			$j++;
		}
		if ($flag) {
				echo $a."<br>";
			}
		$a+=2;
}

 ?>