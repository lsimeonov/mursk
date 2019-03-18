<?php

$usera_e_lognat = true;
$greshka = false;

if($usera_e_lognat){
    echo 'Hello user';
}else{
    echo 'You must login';
}


if($usera_e_lognat && $greshka){
    echo 'Hello user ima greshka';
}else{
    echo 'You must login nqma greshka';
}

if($usera_e_lognat || $greshka){
    echo "User-a e lognat ili ima greshka";
}else{
    echo "Ili user ne e lognat ili niama greshka";
}

// Switch control statement
$a = 5;
switch ($a){
    case 1:
        echo 1;
        break;
    case 100:
        echo 'sto bate';
        break;
    case 5:
    case 10:
        echo '5 ili 10';
        break;
    default:
        echo 'Default';
        break;
}

