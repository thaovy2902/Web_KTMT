<?php
include_once("../Model/FirebaseConnect.php");

class  Ctrl_Member
{
	public function invoke(){
        if (isset($_POST['delete'])){

            $modelMember =  new FirestoreDB();
			$membe = $modelMember->delete($_POST['plate']);
            $memberList = $modelMember->getAllMember();
			include_once("../View/MemberList.php");
            
        }
			
	}
};
$C_Student = new Ctrl_Member();
$C_Student->invoke();
