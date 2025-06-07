<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo $people[0];

$people2 = array(
    "person1" => "Taro",
    "person2" => "Jiro",
    "person3" => "Saburo",
);

var_dump($people2);
echo $people2["person1"];

$people3 = [
  [
    "last_name" => "Yamada",
    "first_name" => "Taro",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "last_name" => "Suzuki",
    "first_name" => "Jiro",
    "age" => 20,
    "gender" => "men"
  ],
  [
    "last_name" => "Sato",
    "first_name" => "Hanako",
    "age" => 16,
    "gender" => "women"
  ]
];
echo $people3[2]["last_name"];

echo "<br />";

$people4 = array("umi1"=>"aza","umi2"=>"mana","umi3"=>"todo");

foreach($people4 as $umi => $name){
print $umi."は".$name."です"."<br />";
}

foreach($people3 as $person4){
    print $person4["first_name"]."(".$person4["age"]."歳".$person4["gender"].")"."<br />";
}