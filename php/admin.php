<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ameri Foam Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="wrapper">
        <div class="admin">
            <div class="admin_header">
                <span class="admin_header-title">Ameri Foam</span>
                <span class="admin_header-txt">Admin Page For Add Products</span>
            </div>
            <div class="admin_login">
                <div class="admin_login-title">
                    <span>Admin Login</span>
                </div>
                <form action="./login.php" method="POST">
                    <div class="admin_form-input">
                        <label for="username">Username</label>
                        <input type="text" name="user" id="" placeholder="Enter Username" />
                    </div>
                    <div class="admin_form-input">
                        <label for="password">Password</label>
                        <input type="password" name="pass" id="" placeholder="Enter Password" />
                    </div>
                    <div class="admin_form-btn">
                        <button type="submit" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>