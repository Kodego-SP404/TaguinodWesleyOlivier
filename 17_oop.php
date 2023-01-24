<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    //Properties are just variables that belong to a class
    //Access modifiers: public, private, protected
    //public - everywhere
    //private - only inside the class
    //protected - only inside the class and by inheriting class

    public $name;
    public $email;
    public $password;

    public function __construct($name,$email,)
    {
        echo 'constructor ran';
    }

    function set_name($name){
        $this->name =  $name;
    }
    function get_name() {
        return $this->name;
    }
    }

$user1 = new User('John','email1','123454');
$user2 = new User('Mary','email2','123454');

// $user1-> set_name('John');
// $user2-> set_name('Mary');
// // var_dump($user1);

// echo $user1 -> get_name();
// echo $user2 -> get_name();

$employee1 = new Employee ('Juan','juan@email.com', '12345','Manager')
