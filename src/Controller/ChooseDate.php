
<?php
require_once ("../model/FirebaseConnect.php");
class  Ctrl_Date
{
	public function invoke(){
            $time = strtotime($_POST['date']);
            if ($time) {
            $date_choose = date('d-m-y', $time);
            }
            $modelMember =  new FirestoreDB();
			$memberList = $modelMember->getAllVehicle();
            $list=[];
            foreach($memberList as $member){
                if(date('d-m-y',strtotime($member['Time_In']))==$date_choose){
                    $list[]=$member;
                }
            }
            $memberList = $list;
			include_once("../View/VehicleManagement.php");
	}
};
$C_Student = new Ctrl_Date();
$C_Student->invoke();
