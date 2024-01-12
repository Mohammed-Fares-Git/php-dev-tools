<?php


require_once "../vendor/autoload.php";

use App\models\Person;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();



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
