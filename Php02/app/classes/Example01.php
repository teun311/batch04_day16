<?php


namespace App\classes;
use App\classes\Person;

class Example01 extends Person
{
    public $firstName;
    protected $middleName;
    public $lastName;
    public $firstNumber =10;
    protected $secoundNumber =28;
    private $lastNumber;
    public $courses = ["course_name" => "PHP with Laravel",
                        "trainer_name1" => "Habibur Rahman",
                        "trainer_name2" => "Mohammad Ali",
                        "course_day" => "60",
                        "day01" => "Sunady",
                        "day02" => "Monday",
                        "day03" => "Tuesday",
                        "day04" => "Wednesday",
                        "day05" => "Thursday",
                        "training_room" => "Lab-401",
                        ];

    public function info(){
        echo "Hello World" ;
        echo '<br/>';
        $this->firstName ='Md';
        echo ($this->firstName);
        echo '<br/>';

        foreach ($this->courses as $key => $value) {
            echo " $key : $value <br/> ";
        }
    }
    public function methodOne(){
        $this->middleName ='Habibur';
        echo $this->middleName;
    }
    public function methodTwo(){
        $this->lastName ='Rahman';
        echo $this->lastName;
    }

    public function methodThree ()
    {
//      echo $this->distict;
//      echo '<br/>';
//        echo $this->div();
//        echo $this->cntry();
    }
}