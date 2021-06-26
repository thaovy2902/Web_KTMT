<?php
require '../../vendor/autoload.php';
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Factory;
use Google\Cloud\Firestore\FirestoreClient;
class Model_User{
    protected $db;
    protected $dbname='User';
    public function __construct()
    {   
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/detectpl-d03e5d4f4363.json');

        $firebase = (new Factory)->withServiceAccount($serviceAccount);
        $this->db=new FirestoreClient([
            'projectId' => 'detectpl',
        ]);
    }

    public function get_login($username, $password){
        $Ref = $this->db->collection($this->dbname);
        $query = $Ref->where('Username', '=', "$username","AND",'Password', '=', "$password"," LIMIT",1);
        $documents = $query->documents();
        $count=0;
        foreach($documents as $doc){    
            $count++;
        }
        return $count;
    }
    // public function check_user($username){
    //     $link = $this->connect();
    //     $sql = "Select * from admin where username='$username'";
    //     $result = mysqli_query($link, $sql);
    //     return $result;
    // }
    // public function register($username,$password){
    //     $link = $this->connect();
    //     $sql = "Insert INTO admin(username,password) Values('$username','$password')";
    //     $result = mysqli_query($link, $sql);
    //     return $result;
    // }
    // public function getAllMember(){
    //     $Ref = $this->db->collection($this->dbname);
    //     $documents = $Ref->documents();
    //     return $documents;
    // }

    // public function search($info){
    //     $Ref = $this->db->collection($this->dbname);
    //     $query = $Ref->where('Car_plate', '=', "$info");
    //     $documents = $query->documents();
    //     return $documents;
    // }
    // public function delete($plate){
    //     $Ref = $this->db->collection($this->dbname);
    //     $query = $Ref->where('Car_plate', '=', "$plate");
    //     $document = $query->documents();
        
    //     foreach($document as $d){
    //         $docID= $d->id();
    //     }
    //     $a= $this->db->collection($this->dbname)->document("$docID")->delete();
    //     return $a;
    // }
}
