<?php 
	$name = array('Nam', 'Khánh', 'Bình', 'Hậu' , 'Tuấn'); 
	// var_dump(in_array('Nam',$name));

	// echo count($name);
// kiểm tra xem key có tồn tại tr mảng k , trả về value của key đó nếu có 
	$info = array(
        'ID'   =>  '20092671',
        'NAME'   =>  'Dinh Hoai Nam',
        'PHONE'   =>  '012346567899',
        'EMAIL'   =>  'namdinhhoai@gmail.com',

    );
    if(array_key_exists('ID',$info)){
          echo "ID: " . $info['ID'];
    }else{
          echo "Không tồn tại key";
    }
//tìm kiếm phần tử có tr mảng hay k , trả về index của phần tủ đó 
     $index = array_search('Hậu', $name);    
     
     if($index !== FALSE){
         echo "<br>Vị trí phần tử là: " . $index;
     }else{
         echo "<br>Không tìm thấy phần tử";
     }
//đếm sô lượng ptu trong mảng , trả về mảng mới với key là giá trị của mảng cũ , value là số lần xuất hiện của key đó tr mảng cũ 
    $arr = array(1,3,1,5,"zent",1,5,"zent");

	$arr_result = array_count_values($arr);

    echo "<pre>";        print_r($arr_result);     echo "</pre>"; //thêm ptu
vào cuối mảng     array_push($arr,"new 1","new 2","abc");     echo '<pre>';
print_r($arr);     echo '</pre>';     var_dump($arr);  ?>
