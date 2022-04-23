<?php
$object = new Subscriber;

$object -> name = "Carlos";
$object -> password = "aaaabbbb";
$object -> email = "Carlos@gmail.com";
$object -> phone = "0123456789";

$object -> display();

class Usuario
{
public $name, $password;

 function save_user()
 {
    //Codigo va aquí.
 }
}

class Subscriber extends Usuario
{
    public $email, $phone;

    function display(){
        echo "<br>"."name: " . $this->name;
        echo "<br>"."password: " . $this->password;
        echo "<br>"."email: " . $this->email;
        echo "<br>"."phone: " . $this->phone;
    }
}
?>