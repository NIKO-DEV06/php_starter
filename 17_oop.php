<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // Properties are attriutes that belong to a class

  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  // The constructor is called whenever an object is created from the class.
  // We pass in properties to the constructor from the outside.
  public function __construct($name, $email, $password) {
    // We assign the properties passed in from the outside to the properties we created inside the class.
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Method is a function that belongs to a class
  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }
}

// Instantiate a user object
$user1 = new User('Emmanuel', 'emma@gmail.com', '2rt434');
$user2 = new User('Daniel', 'dan@gmail.com', 'ef3443');

$user1->set_name('Emma');
$user2->set_name('Dan');

// echo $user1->email;
// echo $user2->name;

/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class Employee extends User {
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title() {
    return $this->title;
  }
}

$employee1 = new Employee('John','johndoe@gmail.com','123456','Manager');
echo $employee1->get_title();