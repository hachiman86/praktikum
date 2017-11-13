<?php
$gender
//$gender = (!empty ($_GET('gender')))

switch ($gender){
    case 'gay':
    if ($condition = "girl"){
        echo "tomboy";
    }
    elseif ($condition = "boy"){
        echo "loe aja deh yg bencong";
    }
    else {
        echo "gua natural";
    }
    break;

    case 'girl':
    echo "i am prety, do yyou love me";
    break;

    default :
    if ($condition = "water"){
        echo "i am take a bath";
    }
    else {
        echo "nothing";
    }
    break;
}