
<?php include('log_reg_server.php') ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="log_reg.css">
</head>

<body>


    <div class="container">
                
        <h2> Welcome back </h2>
        <div class="inputs">
            <form action="login.php" method="post">

                <label>USERNAME</label>
                <input type="text" required name="username"/>

                <label>PASSWORD</label>
                <input type="password" required name="password1" />

                <button type="submit" name="login">Continue</button><br><br>
            </form>
            <div class="end">

                Don't have an account? <a href="register.php">Sign-up</a>

            </div>
        </div>

</body>

</html>