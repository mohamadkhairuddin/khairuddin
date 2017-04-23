<?php
//simplexml_load_string
//tipe data
$x1 = "sekolah koding";
$sx2 ="belajar";

echo "<h1>$x1 </h1>";
echo "jom $sx2.$x1 <br>";

/*integer,float*/

$n1 =100;
$n2 =10.1;
//round,min,max
echo  round($n1+$n2);
echo "<br>";

$text ="hai kamu ";
//strlen,str_replace,str_repeat
echo str_repeat( str_replace("hai","apa khabar",$text ),2);
echo "<br>";

?>
