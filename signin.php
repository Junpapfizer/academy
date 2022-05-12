<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login System PDO</title>
    <style>
        body {
            background-image: url('4.jpg');
        }
    </style>
    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container" id="grad1">
        <form action="signin_db.php" method="post">
            <?php if (isset($_SESSION['error'])) { ?>
                <script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'dalksdm',
                        text: 'Something went wrong!',
                        footer: '<a href="index.php">Why do I have this issue?</a>'
                    })
                </script>
                
            <?php } ?>
        </form>
        <div class="form-container sign-in-container">
            <form action="signin_db.php" method="post">
                <h1>เข้าสู่ระบบ</h1>
                <input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Email">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <a href="#">Forgot your password?</a>
                <div class="button-from">
                    <button type="submit" name="signin" class="btn btn-primary">Sign In</button>
                    <a type="button" href="index.php"> Register</a>
                </div>
            </form>
        </div>
        <div class="decoration">
            <div class="decoration-inside">
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <h1>ข่าวสาร</h1>
            </div>
        </div>
    </div>


  

</body>

</html>