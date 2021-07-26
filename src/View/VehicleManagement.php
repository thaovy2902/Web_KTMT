<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vehicle Management</title>
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
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../Controller/HomeController.php">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Management</a>
            <ul class="dropdown-menu">
              <li><a href="../Controller/MemberController.php">Member List</a></li>
              <li><a href="../Controller/Add.php">Add New Member</a></li>
        </li> 
        </ul>
      <li class="active"><a href="../Controller/VehicleList.php">Vehicle Management</a></li>

    </ul>
    
    <form class="navbar-form navbar-left" method="POST" action="../Controller/SearchVehicle.php">
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



    <!-- <div id="content">
      <h2> MEMBER LIST </h2>
-->
            
      <div class="container">
        <center><h2>Vehicle List</h2></center>
       <form action="../Controller/ChooseDate.php" method="POST">
        <label for="date">Date:</label>
        <input type="date" name="date">
        <input type="submit" name="choose" value="Submit">
      </form>  
      <?php
        echo"<table class='table table-striped'>";
        
          echo "<thead>";
          echo " <tr>";
          echo " <th></th>";
          echo "  <th>Car Plate</th>";
          echo " <th>CardID</th>";
          echo " <th>Status</th>";
          echo " <th>Time In</th>";
          echo " <th>Time Out</th>";
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
                    echo $member['Car_plate'];
                echo "</TD>";
                echo "<TD>";
                    echo $member['CardID'];
                echo "</TD>";
                echo "<TD>";
                if ($member['Paking']){
                  echo "Parking";
                }
                else {
                  echo "Out";
                }
                echo "</TD>";
                echo "<TD>";
                $timezone  = 6;
                echo date('H:i:s d-m-y',strtotime($member['Time_In']) - 3600*($timezone+date("H")));
                echo "</TD>";
                echo "<TD>";
                if (isset($member['Time_Out'])) {
                  echo date('H:i:s d-m-y',strtotime($member['Time_Out']) - 3600*($timezone+date("H")));
                }
                else {
                  echo " ";
                }
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

<!-- <center>

<form action="" method="">
  <table>
    <tr>
      <td style="border-style: hidden;"><input type="radio" value="ID" name="check"> Car ID </td>
      <td style="border-style: hidden;"><input type="radio" value="Plate" name="check"> Car Plate </td>
      <td style="border-style: hidden;"><input type="radio" value="Timein" name="check"> Time In </td>
      <td style="border-style: hidden;"><input type="radio" value="Timeout" name="check"> Time Out </td>
      <td style="border-style: hidden;"><input type="text" name="info"></td>
      <td style="border-style: hidden;"><input type="submit" name="search" value=" Search "></td>
    </tr>
  </table>


</form>
</center> -->