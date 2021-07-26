<?php
include_once("../Model/User.php");

class  Ctrl_Member
{
	public function invoke(){
		$modelUser =  new Model_User();
		$check = $modelUser->check_password($_POST['username'],$_POST['current']);
        if (isset($_POST['change'])){

            $modelMember =  new FirestoreDB();
			$membe = $modelMember->delete($_POST['plate']);
            $memberList = $modelMember->getAllMember();
			include_once("../View/MemberList.php");
            
        }
		include_once("../View/ChangePassword.php");
	}
};
$C_Student = new Ctrl_Member();
$C_Student->invoke();
