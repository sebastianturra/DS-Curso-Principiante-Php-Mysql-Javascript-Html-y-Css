<?php
$object = new Tiger();

echo "Tiger have...<br>";
echo "Fur: " . $object->fur . "<br>";
echo "stripes: " . $object->stripes;

class wildcat
{
    public $fur; //animales salvajes tiene fur.

    function __construct()
    {
        $this->fur = "TRUE";
    }
}

class Tiger extends wildcat
{
    public $tripes; //tigres tiene rallas

    function __construct()
    {
        parent::__construct(); // llama al constructor de la superclase.
        $this->stripes = "TRUE";
    }
}
?>