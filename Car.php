<?php
require_once './vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Car{
    protected $database;
    protected $dbname='Data';

    public function __construct()
    {
        $acc=ServiceAccount::fromJsonFile(__DIR__.'/secret/detectpl-d03e5d4f4363.json');
        $firebase = (new Factory)
        ->withServiceAccount($acc)
        ->withDatabaseUri('https://detectpl-default-rtdb.firebaseio.com')
        ->create();

        $this->database = $firebase->getDatabase();
    }

    public function get(){
        return $this->database->getReference($this->dbname)->getSnapshot();;
    }

    public function insert(){

    }
    
    public function delete(){

    }
}

$car = new Car();
var_dump($car->get()->getValue());