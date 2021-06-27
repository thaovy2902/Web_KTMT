
<?php
require_once ("../model/User.php");
// session_start();
class Ctrl_User{

    public function invoke(){
            

            $username = isset($_POST['username'])?$_POST['username']:'';
            $password = isset($_POST['password'])?$_POST['password']:'';
            if (isset($_POST['login']))
            {
                $modelUser = new Model_User();
                $result = $modelUser->get_login($username,$password);
                if ($result>0){
                    
                    // $_SESSION["id_admin"] = $result['id_admin'];
                    $_SESSION["username"] = $result['username'];
                    header('Location:../Controller/HomeController.php');
                }
                else {
                    require("../View/Login.php");
                    echo '<script type="text/javascript">';
                    echo ' alert("Invalid username and password")';
                    echo '</script>';
                }
            }
            elseif (isset($_SESSION["id"])) {
                header('Location:../Controller/HomeController.php');
            }
            else require("../View/Login.php");
    }
}
$C_User = new Ctrl_User();
$C_User->invoke();
?>
