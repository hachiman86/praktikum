<?php
$nilai = ("70");
if($nilai >= "90" && $nilai <= "100"){
    echo "LULUS dengan predikat A\n";
}elseif($nilai >= "70" && $nilai <= "89"){
    echo "LULUS dengan predikat B\n";
}elseif($nilai >= "60" && $nilai <= "69"){
    echo "LULUS dengan predikat C\n";
}elseif($nilai >= "50" && $nilai <= "59"){
    echo "TIDAK LULUS dengan predikat D\n";
}elseif($nilai >= "0" && $nilai <= "49"){
    echo "TIDAK LULUS dengan predikat E\n";
}elseif($nilai > "100"){
    echo "CURANG\n";
}elseif($nilai <= "-0"){
    echo "TIDAK LULUS dengan predikat TIDAK MENGIKUTI UJIAN";
}else{
    echo "nilai kosong";
}
?>