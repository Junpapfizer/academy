<?php

session_start();
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration System PDO</title>
    <style>
        body {
            background-image: url('4.jpg');
        }
    </style>
</head>

<body>
    <div class="containers" id="grad1">
        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['warning'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php
                echo $_SESSION['warning'];
                unset($_SESSION['warning']);
                ?>
            </div>
        <?php } ?>
        <div class="form-containers">
            <form action="signin.php" method="post">
                <h2>สมัครสมาชิก</h2>
                <div class="decorations">
                    <div class="decorations-inside">
                    </div>
                </div>
                <input type="text" class="form-control" name="firstname" aria-describedby="firstname" placeholder="Firstname">
                <input type="text" class="form-control" name="lastname" aria-describedby="lastname" placeholder="lastname">
                <input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Email">
                <input type="password" class="form-control" name="password" placeholder="password">
                <input type="password" class="form-control" name="c_password" placeholder="Repeact-Password">
                <button type="submit" name="signup" class="btn btn-primary " style="align-items: center;" >Register</button>
            </form>
        </div>
    </div>
</body>
</html>