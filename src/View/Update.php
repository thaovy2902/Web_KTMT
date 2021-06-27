<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../assets/css/Updatecss.css">
    <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css">
</head>

<body>
    <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="container"></div>
    <div id="main">
        
        <div id="content">
            <center>
                <h2>
                    UPDATE INFORMATION
                </h2>
                <form action="../Controller/Chen.php" method="POST">
                    <table>
                        <tr>
                            <td>Car ID:</td>
                            <td><input type="text" name="id"></td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Car Plate:</td>
                            <td><input type="text" name="plate"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="update" value="Update">
                                <button name="cancel"> Back</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </center>

        </div>
    </div>
    
    </div>
</form>
</body>

</html>