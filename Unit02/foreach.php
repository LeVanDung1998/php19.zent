<?php 
 $std=[];
 $std1["name"]="Dũng";
 $std1["age"]="21";
 $std['std1']=$std1;
  
 $std2["name"]="Dũng2";
 $std2["age"]="212";
 $std['std2']=$std2;
 foreach ($std as $key=>$value) {
 	echo $value.'-'.$std['age'].'<br>';
 }
 ?>