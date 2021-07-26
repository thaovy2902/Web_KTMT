<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Member</title>
  <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css">
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

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
      <li><a href="#">Vehicle Management</a></li>

    </ul>
    
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Change Password</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>    
    <div class="container_add">
    <center><h2 style="padding-top: 2%;">Add New Member</h2></center>
      <form class="form_add" action="../Controller/Add.php" method="POST">
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Member Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" required id="name" name="name" placeholder="Memeber Name">
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="plate" class="col-sm-2 col-form-label">Car Plate</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" required id="Plate" name="plate" placeholder="Car Plate (Ex: 43A1234)">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="id" class="col-sm-2 col-form-label">Card ID</label>
                      <div class="col-sm-10">
                          <input type="number" class="form-control" required id="id" name="id" placeholder="Card ID">
                      </div>
                  </div>
                  <input type="hidden" name="paking" value="true">
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" name="add" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-danger" onclick="javascript:history.go(-1)">Back</button>
                    </div>
                </div>
      </form>
  </div>
</body>
</html>