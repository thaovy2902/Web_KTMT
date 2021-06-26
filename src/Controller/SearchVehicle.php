<?php
include_once("../Model/FirebaseConnect.php");

class  Ctrl_Search
{
	public function invoke(){
            
            $modelMember =  new FirestoreDB();
			$memberList = $modelMember->search($_POST['info']);
			include_once("../View/VehicleManagement.php");
	}
};
$C_Student = new Ctrl_Search();
$C_Student->invoke();
