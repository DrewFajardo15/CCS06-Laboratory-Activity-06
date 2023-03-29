<?php
$name = $argv[1];
$age = $argv[2];


$age_compute = 2023 - $age;


echo "Your name is $argv[1] and you are $age_compute years old.";




if ($age_compute >= 18){
    echo "\nYou are a voter";
} else {
    echo "\nYou are not a voter";
}


if ($age_compute >= 60){
    echo "\nYou are a senior citizen";
} else {
    echo "\nYou are not a senior citizen";
}
?>
