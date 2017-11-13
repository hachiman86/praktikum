<?php
$pilihan = ("1");
$nilaia = 1;
$nilaib = 10;

if($pilihan == "1"){
    echo "kecil ke besar\n";
    while ($nilaia <= $nilaib) {
        echo $nilaia;
        $nilaia ++;
    }
}elseif($pilihan == "2"){
    echo "besar ke kecil\n";
    while ($nilaib >= $nilaia){
        echo $nilaib;
        $nilaib --;
    }
}else{
    echo "input salah";
}