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
  <link rel="stylesheet" href="../assets/css/Changecss.css">
  <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css">
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
                <li><a href="../Controller/MemberController.php">Member List</a></li>
            <li><a href="../Controller/VehicleList.php">Vehicle Management</a></li>

            </ul>
            
            <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="activity"><span class="glyphicon glyphicon-user"></span> Change Password</a></li>
            <li><a href="../Controller/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
          </div>
        </nav>

        <div class="container">
        <form class="modal-content animate" id="id01" action="../Controller/ChangePassword.php" method="post">
            <h2>CHANGE PASSWORD FORM</h2>
            <div class="imgcontainer">
                <img src="../assets/img/Avatar.jpg.png" alt="Avatar" class="avatar">
            </div>
            <div class="changeform">

            
                <table>
                    <tr>
                        <td> <label for="current">
                    <b>Current Password</b>
                </label></td>
                    </tr>
                    <tr>
                        <td><input type="password" size="100" placeholder="Enter Current Password" name="current" required>
</td>
                    </tr>
                    <tr>
                        <td><label for="newpass">
                    <b>New Password</b>
                </label></td>
                    </tr>
                    <tr>
                        <td><input type="password" placeholder="Enter New Password" name="newpass" required></td>
                    </tr>
                    <tr>
                        <td><label for="confirmpass">
                    <b>Confirm New Password</b>
                </label></td>
                    </tr>
                    <tr>
                        <td><input type="password" placeholder="Enter Confirm New Password" name="confirmpass" required></td>

                    </tr>
                    <tr>
                    <td> <button type="submit" name="change">Change Password</button></td>
                    </tr>
                </table>
            
            


            <div style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').reset()"
                    class="cancelbtn">Cancel</button>
            </div>
            </div>
        </form>
        </div>

</body>

</html>