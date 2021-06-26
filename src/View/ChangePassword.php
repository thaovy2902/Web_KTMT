<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../assets/css/Changecss.css">
    <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css">
</head>

<body>
    <div id="main">
        <div class="header1">
          <a href="./Page.html">CDTV</a>
          <p>Vehicle Monitoring System</p>
        </div>
        <div id="header">
    
          <ul id="nav">
            <li>
              <a href="">
                Menu
                <i class="nav-arrow-down ti-angle-down"></i>
              </a>
              <ul class="subnav">
                <li><a href="./MemberList.html">Member List</a></li>
                <li><a href="./VehicleManagement.html">Vehicle Management</a></li>
              </ul>
            </li>
          </ul>
    
          <div class="user-option">
            <ul id="nav">
              <li>
                <a href="./ChangePassword.html">
                  Change Password
                </a>
              </li>
              <li>
                <a href="../Login.html">
                  Logout
                </a>
              </li>
            </ul>
            <i class="user-icon ti-user"></i>
          </div>
    
        </div>


        <div id="id01" class="modal"></div>
        <form class="modal-content animate" action="/action_page.php" method="post">
            <h2>CHANGE PASSWORD FORM</h2>
            <div class="imgcontainer">
                <img src="../assets/img/Avatar.jpg.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="current">
                    <b>Current Password</b>
                </label>
                <input type="password" placeholder="Enter Current Password" name="current" required>

                <label for="newpass">
                    <b>New Password</b>
                </label>
                <input type="password" placeholder="Enter New Password" name="newpass" required>
                <label for="confirmpass">
                    <b>Confirm New Password</b>
                </label>
                <input type="password" placeholder="Enter Confirm New Password" name="confirmpass" required>
                <button type="submit">Change Password</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
            </div>
        </form>
    </div>

    </div>
    </div>
</body>

</html>