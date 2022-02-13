<?php

namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;
class Student extends Teacher implements ExampleOne,ExampleTwo
{
    use Category;


    protected $county = 'Bangladesh';
    public static $area ='farmgate';


    public function __construct()
    {
      // $this->name='fahim';
       //$this->city='dhaka';
    }

    public function manage()
    {
        echo self::$area;
       // echo 'Institute name is' .$this->name.'and the city name is '.$this->city;
    }


    public function one()
    {
        echo 'Hello One';
    }

    public function two()
    {
        echo 'Hello Two';
    }

    public function three()
    {
        echo 'Hello Three';
    }

    public function ten()
    {
        echo 'ten';
    }

    public function ten1()
    {
       echo 'ten1';
    }

    public function test()
    {
        echo 'Hello Test';
    }
    public static function demo()
    {
        echo 'hello demo';
    }
}