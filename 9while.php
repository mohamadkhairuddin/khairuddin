<?php
$haiwan = ["kambing","kerbau","lembu","arnab"];

$i = 1;
while ($i<count($haiwan))
  {
    echo $haiwan[$i]."<br>";
    $i++;
  }


do{
  echo $haiwan[$i]."<br>";
  $i++;
}while ($i < count ($haiwan));
  ?>
