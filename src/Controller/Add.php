<?php
include_once("../Model/FirebaseConnect.php");

class  Ctrl_Member
{
	public function invoke(){
        if (isset($_POST['add'])){
            $modelMember =  new FirestoreDB();
            $check = $modelMember->check_add($_POST['plate']);
            if (!$check){
                $member = $modelMember->add($_POST['name'],$_POST['id'],$_POST['plate'],$_POST['paking'],$_POST['time_in'],$_POST['time_out']);
                include_once("../View/Add.php");
                echo '<script type="text/javascript">';
                echo ' alert("Successfully")';
                echo '</script>';
            }
            else {
                include_once("../View/Add.php");
                echo '<script type="text/javascript">';
                echo ' alert("Failed! License Plate Already Exists")';
                echo '</script>';
            }
        }
        else include_once("../View/Add.php");
			
	}
};
$C_Student = new Ctrl_Member();
$C_Student->invoke();
