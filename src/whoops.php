<?php


require_once "../vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

class Person {
    private $name;
    private $age;


    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
}


$persons = [
    new Person("Mohammed Fares",21),
    new Person("Souyane Felate",21),
    new Person("Amine Ouanda",21),
    null, // pour fair un exepcion
    new Person("Youness Kinani",21)
];

foreach($persons as $p){
    echo " - " . $p->getName() . " : " . $p->getAge() . "<br>";
}
