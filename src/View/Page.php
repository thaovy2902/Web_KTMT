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
  <link rel="stylesheet" href="../assets/css/Pagecss.css">
  <!--<link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css"> -->
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
      <li><a href="../Controller/VehicleList.php">Vehicle Management</a></li>

    </ul>
    
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../Controller/ChangePassword.php"><span class="glyphicon glyphicon-user"></span> Change Password</a></li>
      <li><a href="../Controller/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>  


<div class="content">


<div class="perspective-text">
      <div class="perspective-line">
        <p></p>
        <p>Welcome</p>
      </div>
      <div class="perspective-line">
        <p>Welcome</p>
        <p>To</p>
      </div>
      <div class="perspective-line">
        <p>To</p>
        <p>Management System</p>
      </div>
      <div class="perspective-line">
        <p>Management System</p>
        <p>Admin</p>
      </div>
      <div class="perspective-line">
        <p>Admin</p>
        <p></p>
      </div>
    </div>
    </div>
</body>

</html>