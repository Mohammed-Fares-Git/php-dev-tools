<?php

require_once "../vendor/autoload.php";


use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use App\models\Person;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('../logs/persons.log', Level::Warning));

// $log->warning('Warning');
// $log->error('Error');



$persons = [
    new Person("Mohammed Fares",21),
    new Person("Souyane Felate",21),
    new Person("Amine Ouanda",21),
    null, // pour fair un exepcion
    new Person("Youness Kinani",21)
];
try{

    foreach($persons as $p){
        echo " - " . $p->getName() . " : " . $p->getAge() . "<br>";
    }
} catch(Error | Exception $e) {
    $log->error($e->getMessage());
}

