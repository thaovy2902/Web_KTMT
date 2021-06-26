<?php
include_once("../Model/FirebaseConnect.php");

class  Ctrl_Member
{
	public function invoke(){
			$modelMember =  new FirestoreDB();
			$memberList = $modelMember->getAllMember();
			include_once("../View/MemberList.php");
	}
};
$C_Student = new Ctrl_Member();
$C_Student->invoke();
