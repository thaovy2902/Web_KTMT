<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member List</title>
  <style>
    .header{
    height: 30px;
    padding: 5px;
    text-align: center;
    background: white;
    text-decoration: none;
    color: #000;
    font-size: 50px;
    font-weight: bold;
    margin-bottom: 30px;
    }
  </style>
  <link rel="stylesheet" href="../assets/css/Listcss.css">
  <!-- <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script language="JavaScript" type="text/javascript">
  function checkDelete(){
      return confirm('Are you sure want to delete this member?');
  }
  </script>

</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../Controller/HomeController.php">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown activity">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Management</a>
            <ul class="dropdown-menu">
              <li><a href="../Controller/MemberController.php">Member List</a></li>
              <li><a href="../Controller/Add.php">Add New Member</a></li>
        </li> 
      </ul>
      <li><a href="../Controller/VehicleList.php">Vehicle Management</a></li>

    </ul>
    
    <form class="navbar-form navbar-left" method="POST" action="../Controller/SearchMemberController.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="info">
      </div>
      <button type="submit" name="search" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../Controller/ChangePassword.php"><span class="glyphicon glyphicon-user"></span> Change Password</a></li>
      <li><a href="../Controller/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>  
            
      <div class="container">
        <center><h2>Member List</h2></center>
        <button name="add" >
        <a style="text-decoration:none;" href="../Controller/Add.php">Add</a>
       </button>  
      <?php
        echo"<table class='table table-striped''>";
        
          echo "<thead>";
          echo " <tr>";
          echo " <th></th>";
          echo "  <th>Member Name</th>";
          echo "  <th>Car Plate</th>";
          echo " <th>CardID</th>";
          echo "  <th>Option</th>";
          echo " </tr>";
          echo "</thead>";
          echo "<tbody>";
            $count=1;
            foreach($memberList as $member){
              
              echo "<TR'>";
                echo "<TD>";
                    echo $count;
                echo "</TD>";
                echo "<TD>";
                    echo $member['Member_name'];
                echo "</TD>";
                echo "<TD>";
                    echo $member['Car_plate'];
                echo "</TD>";
                echo "<TD>";
                    echo $member['CardID'];
                echo "</TD>";
                echo "<TD style='display:flex;'>";
                    echo "<form action='../Controller/DeleteMemberController.php' method='POST'>";
                    echo "<input type=hidden name='plate' value='".$member['Car_plate']."'>";
                    echo "</input>";
                    echo "<input type='submit' name='delete' class='btn btn-danger' value='Delete' onclick='return checkDelete()'></input>";
                    echo "</form>";
                    echo "<form action='../Controller/Update.php' method='POST'>";
                    echo "<input type=hidden name='plate_old' value='".$member['Car_plate']."'>";
                    echo "<input type=hidden name='name' value='".$member['Member_name']."'>";
                    echo "<input type=hidden name='id' value='".$member['CardID']."'>";
                    echo "<input type=hidden name='time_in' value='".$member['Time_In']."'>";
                    echo "<input type=hidden name='paking' value='".$member['Paking']."'>";
                    echo "<input type=hidden name='time_out' value='".$member['Time_Out']."'>";
                    echo "<input type='submit' name='update' class='btn btn-primary' value='Update' style='margin-left:10px'></input>";
                    echo "</form>";
                echo "</TD>";
            echo "</TR>";
              $count=$count+1;
            }       
            echo"</tbody>";
        echo"</table>";

            
        ?>
      </div>
    </div>
  </div>

</body>

</html>