<?php
function go(){
    echo "5";
}
go();

echo "<br />";
function test($score1,$score2,$score3){
    $total = $score1+$score2+$score3;
    if($total > 210){
        echo "合計点は".$total."なので合格です";
    }else{
        echo "合計点は".$total."なので不合格です";
    }
}
test(100,50,22);


// 三角形の面積
function triangle($a , $b){
    $TS = $a * $b * 1/2;
    echo $TS;
}
triangle(10,10)."\n";

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

