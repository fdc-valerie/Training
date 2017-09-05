ACITIVY #1 

<?php 
$string = "HELLO WORLD";

for($i=strlen($string)-1; $i>=0 ;$i--){
  
  echo $string[$i];

}



$num1=0;
$num2=1;


for($i=2; $i<=10; ++$i){

  $num3 = $num1+$num2;

  echo '<br/>';
  echo $num3.'  </br>';

  $num1=$num2;
  $num2=$num3;
}

function checkArray($array1, $array2){

print_r(array_intersect($array1,$array2));

}

$array1 = array("alpha","beta", "charlie", "delta", "foxtrot","golf", "india");
$array2 = array("alpha", "charlie", "india", "hotel", "test");

// var_dump(array_intersect($array1,$array2));
// var_dump(array_intersect($array2,$array1));

checkArray($array1,$array2);





$data = array(100,'Hello World',0/0,array('delta'));
foreach ($data as $value) {
	echo ' <br/>';
    echo gettype($value), "\n";
}
 ?>