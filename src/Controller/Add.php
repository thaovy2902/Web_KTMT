<?php
include_once("../Model/FirebaseConnect.php");
use Google\Cloud\Core\Timestamp;
class  Ctrl_Member
{
	public function invoke(){
        if (isset($_POST['add'])){
            $modelMember =  new FirestoreDB();
            $check = $modelMember->check_add($_POST['plate']);
            if (!$check){
                $member = $modelMember->add($_POST['name'],$_POST['id'],$_POST['plate'],$_POST['paking']);
                $memberList = $modelMember->getAllMember();
			    include_once("../View/MemberList.php");
                echo '<script type="text/javascript">';
                echo ' alert("Successfully")';
                echo '</script>';
            }
            else {
                include_once("../View/Add.php");
                echo '<script type="text/javascript">';
                echo ' alert("Failed! License Plate Already Exists")';
                echo '</script>';
                include_once("../View/Add.php");
            }
        }
        else include_once("../View/Add.php");
			
	}
};
$C_Student = new Ctrl_Member();
$C_Student->invoke();
