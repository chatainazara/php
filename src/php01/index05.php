<?php
$a = 7;

if($a===5){
    echo "\$aは5です";
}elseif($a===8){
    echo "aは8です";
}else{
    echo "aは7です";
}

echo "<br />";

$people = "Saburou";

switch ($people){
    case "Jirou":
    echo "二郎";
    break;
    case "Saburou":
    echo "三郎";
    break;
    default:
    echo "不明です";
    break;
}

echo "<br />";
$b = ($a===7)? "TRUE": "FALSE";
echo $b;