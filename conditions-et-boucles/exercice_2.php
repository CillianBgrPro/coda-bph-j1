<?php
$animals = ["chat", "chien", "Lapin", "Souris"];
$i = 0;

while ($i < count($animals)) {
    echo $animals[$i] . " " . $i . "<br>";
    $i++;
}

$numbers = [28, 32, 44, -67, 18, 24, -98];
$x = 0;
while ($x < count($numbers)){
    echo $numbers[$x] . "<br>";
    $x++;
}

$user = [
    "name" => "James",
    "age" => 28
];

foreach ($user as $key => $value) {
    echo "My $key is $value<br>";
}

$users = [
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ],
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ]
];

foreach ($users as $person) {
    echo $person["firstName"] . " " . $person["lastName"] . "<br>";
}
?>
