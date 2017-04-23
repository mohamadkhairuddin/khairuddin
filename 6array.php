<?php
//print=echo
//print_r
//array()=[]
$kotak=array("tikus","semut","lipas","kucing");
print_r ($kotak);
echo "<br>";
echo $kotak[3];

echo "<br>" ,"Assosiated Array","<br>";

$data= array("nama"=> "khairul","umur"=> "23","kerja"=> "programmer");
echo "umurnya adalah ". $data["umur"];

echo "<br>" ,"Contoh2 Assosiated Array","<br>";

$data["nama"]="yoo";
echo"Nama adalah " . $data["nama"];

?>
