<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/Logincss.css">
    <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css">
    <title>Login</title>
</head>

<body style="background-image: url('../assets/img/Background.jpg');">
    
    <div id="id01" class="modal"></div>
    <form class="modal-content animate" action="../Controller/Login.php" method="post">
        <h2>LOGIN FORM</h2>
        <div class="imgcontainer">
            <img src="../assets/img/Avatar.jpg.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="username">
                <b>Username</b>
            </label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password">
                <b>Password</b>
            </label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit" name="login">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'"
                class="cancelbtn">Cancel</button>
        </div>
    </form>
    </div>
    </div>
</body>

</html>