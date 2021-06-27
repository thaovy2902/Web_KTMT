<?php
include_once("../Model/FirebaseConnect.php");

class  Ctrl_Member
{
	public function invoke(){
        if (isset($_POST['submit'])){
            $modelMember =  new FirestoreDB();
            $check = $modelMember->check_add($_POST['plate']);
            if (!$check){
                $member = $modelMember->update($_POST['name'],$_POST['id'],$_POST['old_plate'],$_POST['plate'],$_POST['paking'],$_POST['time_in'],$_POST['time_out']);
                echo '<script type="text/javascript">';
                echo ' alert("Successfully")';
                echo '</script>';
                $memberList = $modelMember->getAllMember();
			    include_once("../View/MemberList.php");

            }
            else {
                include_once("../View/UpdateForm.php");
                echo '<script type="text/javascript">';
                echo ' alert("Failed! License Plate Already Exists")';
                echo '</script>';
            }
        }
        else{
            $name= $_POST['name'];
            $id= $_POST['id'];
            $plate= $_POST['plate_old'];
            $timein= $_POST['time_in'];
            $timeout= $_POST['time_out'];
            $paking= $_POST['paking'];
            include_once("../View/UpdateForm.php");
        } 
        
			
	}
};
$C_Student = new Ctrl_Member();
$C_Student->invoke();
