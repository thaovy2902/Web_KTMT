<?php
require './vendor/autoload.php';
use \Kreait\Firebase\Database;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Factory;
use Google\Cloud\Firestore\FirestoreClient;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/secret/detectpl-d03e5d4f4363.json');

$firebase = (new Factory)
        ->withServiceAccount($serviceAccount);
$firestore = new FirestoreClient([
    'projectId' => 'detectpl',
]);
$collectionReference = $firestore->collection('Data');

$documentReference = $collectionReference->document('1cHOgPtoSZkrwlVCbSPA');
$snapshot = $documentReference->snapshot();

var_dump($snapshot['CardID']);