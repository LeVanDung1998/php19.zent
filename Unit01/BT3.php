<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giải PT bậc 2</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Giải PT Bậc 2</h1>
	<?php 
	if (isset($_POST['ketqua'])) {
		$result='';
		$a=isset($_POST['a']) ? (float)trim($_POST['a']) : '';;
		$b=isset($_POST['b']) ? (float)trim($_POST['b']) : '';;
		$c=isset($_POST['c']) ? (float)trim($_POST['c']) : '';;
		if ($a==0) {
			if ($b==0&&$c!=0) {
				echo 'Phương trình vô nghiệm';
			}else if($b==0&&$c==0){
				echo 'Phương trình vô số nghiệm';
			}else{
				echo 'Phương trình có nghiệm x='.((-$c)/$b);
			}
		}else {
			$delta= ($b*$b-4*$a*$c)/(2*$a);
			if ($delta<0) {
				echo 'Phương trình vô nghiệm';
			}elseif ($delta==0) {
				echo 'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);;
			}else{
			$result = 'Phương trình có hai nghiệm phân biệt, x1 = '.((-$b + sqrt($delta))/2*$a).'và x2 = '.((-$b - sqrt($delta))/2*$a);
				echo $result;
			}
		}
	}
	?>
	<!-- ax^2 + bx +c = 0-->
	<form action="" method="post" accept-charset="utf-8">
		<input type="text" name="a" value="">x<sup>2</sup>
		+
		<input type="text" name="b" value="">x
		+
		<input type="text" name="c" value="">= 0
		<br><br>
		<input type="submit" name="ketqua" value="Kết Quả">
	</form>
	<?php 
		
	?>
</body>
</html>