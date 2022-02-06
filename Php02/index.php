<?php
require_once "vendor/autoload.php";

use App\classes\Example01;
use App\classes\operator;

$example = new Example01();
$example ->info();
echo '<br/>';
$example-> methodOne();
echo '<br/>';
$example-> methodTwo();
echo '<br/>';
$example->methodThree();
$operator= new Operator();
$operator->index();


//$courses = ["course_name" => "PHP with Laravel",
//    "trainer_name1" => "Habibur Rahman",
//    "trainer_name2" => "Mohammad Ali",
//    "course_day" => "60",
//    "day01" => "Sunady",
//    "day02" => "Monday",
//    "day03" => "Tuesday",
//    "day04" => "Wednesday",
//    "day05" => "Thursday",
//    "training_room" => "Lab-401",
//];
//print_r($courses);
//echo '<br/>';
//
//foreach ($courses as $key => $value) {
//    echo " $key : $value <br/> ";
//}