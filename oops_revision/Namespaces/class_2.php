<?php
use Namespaces\Person;

class Student extends Person{
    public function __construct($name,$age,$gender,$country)
    {
        parent::__construct($name,$age,$gender,$country);
    }
    
    public function get_name(){
        return $this->name;
    }
    public function get_age(){
        return $this->age;
    }
    public function get_gender(){
        return $this->gender;
    }
    public function get_country(){
        return $this->country;
    }
}


$person1 = new Person('Arpit',25,'Male','India');
echo $person1;