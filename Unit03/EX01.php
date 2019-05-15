<?php 
	function kiem_tra_chan_le($num){
		if ($num % 2==0) {
			echo $num.' là số chẵn <br>';
		}else {
			echo $num.' là số lẻ  <br>';
		}
	}

	kiem_tra_chan_le(10);
	function tinh_tong_hai_so($a,$b){
	//	$tong = $a + $b;
		return  $a +  $b;
	}
	echo tinh_tong_hai_so(10,30);

	function tinh_tong_3($a,$b,$c=false){
		$tong = $a + $b;
		if ($c!=false) {
			$tong=$tong + $c;
		}
		return $tong;
	}
	echo '<br>Tổng 3: '.tinh_tong_3(1,2,10);
 ?>