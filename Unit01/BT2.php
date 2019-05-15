<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giải PT bậc 1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Giải PT Bậc 1</h1>
	<?php 
	if (isset($_POST['ketqua'])) {
		$result='';
		$a=isset($_POST['a']) ? (float)trim($_POST['a']) : '';;
		$b=isset($_POST['b']) ? (float)trim($_POST['b']) : '';;
		if ($a==0) {
			if ($b==0) {
				echo 'Phương trình vô số nghiệm';
			}else {
				echo 'Phương trình vô nghiệm';
			}
		}else {
			$result = 'x='.(-($b)/($a));
			echo $result;
		}
	}
	
	?>
	<form action="" method="post" accept-charset="utf-8">
		<input type="text" name="a" value="">x
		+
		<input type="text" name="b" value="">= 0
		<br><br>
		<input type="submit" name="ketqua" value="Kết Quả">
	</form>
	
</body>
</html>

