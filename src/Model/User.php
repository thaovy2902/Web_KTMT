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
    public function check_password($username, $password){
        $Ref = $this->db->collection($this->dbname);
        $query = $Ref->where('Username', '=', "$username","AND",'Password', '=', "$password"," LIMIT",1);
        $documents = $query->documents();
        $count=0;
        foreach($documents as $doc){    
            $count++;
        }
        return $count;
    }

}
