<?php

    // Object Oriented Programming

    class Company{
        // class properties
        public $name;
        public $department;
        public $age;
        public $salary;
        protected $user_id;

        // class Methods

        // Getters and Setters
        // public function set_name($name){
        //     $this->name = $name;
        // }
        // public function get_name(){
        //     return $this->name;
        // }

        // Constructor function

        public function __construct($name,$department,$age,$salary,$user_id)
        {
            $this->name = $name;
            $this->department = $department;
            $this->age = $age;
            $this->salary = $salary;
            $this->user_id = $user_id;
        }

        function get_company_details(){
            echo "This is a very establised company!";
        }

        // function __destruct()
        // {
        //     echo "this function is called at the end of script!, it helps in saving resources and memory managment.";
        // }

    }

    class StartUpCompany extends Company{
        function __construct($name,$department,$age,$salary,$user_id)
        {
            parent::__construct($name,$department,$age,$salary,$user_id);
        }
        function get_company_message(){
            $this->get_company_details();
        }
    }


    // $employee1 = new Company();
    // $employee1->set_name('Ramesh Sharma');
    // echo $employee1->get_name();


    $employee1 = new Company('Ramesh','Managment',25,35000,'EMPID-0001');
    $employee2 = new Company('Mohit','IT',27,78000,'EMPID-0002');
    $employee3 = new Company('Arpit','Sales',25,95000,'EMPID-0003');
    $employee3 = new Company('Arpit','Sales',35,120000,'EMPID-00014');


    $new_startup_1 = new StartUpCompany('ABC','SALES',45,400000,789);
    $new_startup_1->get_company_message();

    // the final keyword can be used to prevent class inheritance or to prevent the method overriding.
    // class constants are used to define some constant variables within the class.
    // to acess const variable outside -> className::const_variable and to acess inside the class -> self::const_variable_name



    // Abstract classes are classed where must be one method which is abstract which is only declared but it's implementation is done in the child class

    abstract class ParentClass{
        abstract protected function prefix($name) : string;
    }

    class ChildClass extends ParentClass{
        public function prefix($name) : string{
            if($name === 'John Doe'){
                $prefix = 'MR. ';
            }
            else if($name === 'John Doe'){
                $prefix = 'MRs. ';
            }
            else{
                $prefix =
            }
        }
    }