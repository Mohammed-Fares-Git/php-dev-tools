<?php

require_once "../vendor/autoload.php";

use App\models\Person;


$persons = [
    new Person("Mohammed Fares",21),
    new Person("Souyane Felate",21),
    new Person("Amine Ouanda",21),
    null, // pour fair un exepcion
    new Person("Youness Kinani",21)
];
try{
    foreach($persons as $p){
        dump($p);
        dump($p->getName());
    }
} catch(Error | Exception $e) {
    dump($e);
}

