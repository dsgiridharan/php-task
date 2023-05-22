<?php
function giri(&$value)
{
    $value *= 5;
}
$addnum = 5;
giri($addnum);
echo "My valuable is " . $addnum . "<br>";

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
$arrlength = count($cars);
echo "I like a cars " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br>";

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x] . "<br>";
}

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

foreach ($age as $x => $value) {
    echo "My name " . $x . "I am " . $value . "years old" . "<br>";
}

$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Audi", 14, 12],
    ["Land Rover", 17, 15],
];
$arrlength = count($cars);
for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x] . "<br>";
}
