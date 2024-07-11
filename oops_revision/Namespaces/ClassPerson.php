<?php

namespace Namespaces;

class Person{
    public $name;
    public $age;
    public $gender;
    public $country;


    public function __construct($name,$age,$gender,$country)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->country = $country;
  }

}