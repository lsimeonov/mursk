<?php
// rain, sunshine, clouds, hail, sleet, snow, wind

/* 
 * We've seen all kinds of weather this month. At the beginning of the month,
 * we had snow and wind. Then came sunshine with a few clouds and some rain. 
 * At least we didn't get any hail or sleet
 */

 $a = ['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];

// echo "We've seen all kinds of weather this month. At the beginning of the month,
//  we had ".$a[5]." and wind. Then came sunshine with a few ".$a[2]." and some ".$a[0].". 
//  At least we didn't get any ".$a[3]." or ".$a[4];

//  echo sprintf("We've seen all kinds of weather this month. At the beginning of the month,
//  we had %s and %s. Then came %s with a few %s and some %s. 
//  At least we didn't get any %s or %s",$a[5],$a[6],$a[1],$a[2], $a[0], $a[3], $a[4]);

 $b = [
     12,
     4,
     7, 
 [
     4,6,8, 
     [
         0,2,3 
     ]
 ]
];

$string  = "lucy12345";
$length = strlen($string);

for($i=0; $i<$length; $i++){
   echo $string[$i];
}

$i =0;

while($i<10){
echo 'liucy'.PHP_EOL;
$i++;
}

$arrSum =[1,2,3,4,5,6,7,8,9];

echo array_sum($arrSum);