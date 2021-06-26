<?php
require '../../vendor/autoload.php';
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Factory;
use Google\Cloud\Firestore\FirestoreClient;
class FirestoreDB{
    protected $db;
    protected $dbname='Data';
    public function __construct()
    {   
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/detectpl-d03e5d4f4363.json');

        $firebase = (new Factory)->withServiceAccount($serviceAccount);
        $this->db=new FirestoreClient([
            'projectId' => 'detectpl',
        ]);
    }

    public function getDocument(string $id){
        return $this->db->collection($this->dbname)->document($id)->snapshot()->data();
    }
    public function getAllMember(){
        $Ref = $this->db->collection($this->dbname);
        $documents = $Ref->documents();
        return $documents;
    }
    public function getAllVehicle(){
        $Ref = $this->db->collection($this->dbname);
        $query = $Ref->orderBy('Time_In', 'ASC');
        $documents = $query->documents();
        return $documents;
    }

    public function search($info){
        $Ref = $this->db->collection($this->dbname);
        $query = $Ref->where('Car_plate', '=', "$info");
        $documents = $query->documents();
        return $documents;
    }
    public function delete($plate){
        $Ref = $this->db->collection($this->dbname);
        $query = $Ref->where('Car_plate', '=', "$plate");
        $document = $query->documents();
        
        foreach($document as $d){
            $docID= $d->id();
        }
        $a= $this->db->collection($this->dbname)->document("$docID")->delete();
        return $a;
    }
}



// $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/detectpl-d03e5d4f4363.json');

// $firebase = (new Factory)
//         ->withServiceAccount($serviceAccount);
// $firestore = new FirestoreClient([
//     'projectId' => 'detectpl',
// ]);
// $collectionReference = $firestore->collection('Data');

// $documentReference = $collectionReference->document('1cHOgPtoSZkrwlVCbSPA');
// $snapshot = $documentReference->snapshot();

// var_dump($collectionReference);