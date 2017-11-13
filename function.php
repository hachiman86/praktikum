<?php

class profile
{
    public function myName(
        $fullname, 
        $callname
        )
        {
        echo "nama saya adalah", $fullname
        . ", anda bisa memanggil saya dengan"
        . $callname;
        }
}

/* function sum($x, $y){
    $z = $x + $y;
    return $x;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4); */