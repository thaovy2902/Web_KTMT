<?php
// require_once './vendor/autoload.php';
// use Kreait\Firebase\Factory;
// use Kreait\Firebase\ServiceAccount;

// $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/detectpl-d03e5d4f4363.json');
// $firebase = (new Factory)
//         ->withServiceAccount($serviceAccount)
//         ->withDatabaseUri('https://detectpl-default-rtdb.firebaseio.com')
//         ->create();

// $database = $firebase->getDatabase();
// die(print_r($database));
header('location: src/Controller/Login.php');