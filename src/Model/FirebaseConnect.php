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
        $Ref = $this->db->collection($this->dbname);
        $document = $Ref->document($id)->snapshot()->data();
        return $document;
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
    public function check_add($info){
        $Ref = $this->db->collection($this->dbname);
        $query = $Ref->where('Car_plate', '=', "$info");
        $documents = $query->documents();
        $count=0;
        foreach($documents as $d){
            $count=$count +1 ;
        }
        return $count;
    }
    public function find($info){
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
    public function update($name,$cardid,$plate_old,$plate_new,$paking){
        $Ref = $this->db->collection($this->dbname);
        $query = $Ref->where('Car_plate', '=', "$plate_old");
        $document = $query->documents();
        
        foreach($document as $d){
            $docID= $d->id();
        }
        $data = [
            'Car_plate' => $plate_new,
            'CardID' => $cardid,
            'Member_name' => $name,
            'Paking' => $paking,
        ];
        $this->db->collection($this->dbname)->document("$docID")->set($data);
    }
    public function add($name,$cardid,$plate,$paking){
        $data = [
            'Car_plate' => $plate,
            'CardID' => $cardid,
            'Member_name' => $name,
            'Paking' => $paking
        ];
        $this->db->collection($this->dbname)->add($data);
    }
}
