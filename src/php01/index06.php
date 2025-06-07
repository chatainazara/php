<?php
for ($i = 1; $i<4 ;$i++){
    echo $i;
}

echo "<br />";

for ($h = 1; $h <= 5; $h++){
    echo $h*2 . "<br ?>";
}

$n = 0;
while($n < 10){
    echo 'n='.$n."<br />";
    $n += 1;
}

$count = 0;
while($count < 100){
    if($count%3 == 0){
    $count += 1;
    continue;
    }
    echo $count."<br />";
    $count += 1;
}

$num = 0;
do {
    echo "num=".$num."<br />";
    $num += 1;
} while($num < 3);

$s = 1;
for($s = 1; $s <= 50; $s+=1){
    if($s%15 === 0){
        echo "FizzBuzz"."<br />";
    }elseif($s%5 === 0){
        echo "Buzz"."<br />";
    }elseif($s%3 === 0){
        echo "Fizz"."<br />";
    }else{
        echo $s."<br />";
    }
}

for($m=1; $m<6; $m+=1){
    for($b=1;$b<6; $b+=1){
        echo "🦭";
    }
    echo "<br />";
}