<?php


namespace App\classes;


class Person
{
    public $distict ='savar';
    protected $division ='Dhaka';
    private $country ='Bangladesh';

    public function dist()
    {
        echo 'Dhaka';
    }
    protected function div()
    {
        echo 'Dhaka';

    }
    private function cntry()
    {
        echo 'Bangladesh';
    }
}