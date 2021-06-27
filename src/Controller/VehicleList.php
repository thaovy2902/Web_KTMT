<?php
include_once("../Model/FirebaseConnect.php");

class  Ctrl_Member
{
	public function invoke(){
			$time = date("d-m-y");

			$modelMember =  new FirestoreDB();
			$memberList = $modelMember->getAllVehicle();
			$list=[];
            foreach($memberList as $member){
                if(date('d-m-y',strtotime($member['Time_In']))==$time){
                    $list[]=$member;
                }
            }
            $memberList = $list;
			include_once("../View/VehicleManagement.php");
	}
};
$C_Student = new Ctrl_Member();
$C_Student->invoke();
