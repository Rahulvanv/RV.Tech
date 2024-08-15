<?php include('log_reg_server.php') ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>

    <div class="container">
    
        <h2> Create an account </h2>
        <div class="inputs">
            <form action="register.php" method="post">

                <label>NAME</label>
                <input type="text" required name="name" /><br>


                <label>MOBILE NUMBER</label>
                <input type="text" required name="mobilenumber"/>


                <label>EMAIL</label>
                <input type="email" required name="email"/>

                <label>USERNAME</label>
                <input type="text" required name="username"/>

                <label>PASSWORD</label>
                <input type="password" required name="password1"/>

                <button type="submit" name="register">CONTINUE</button><br><br>
            </form>
            <div class="end">

                Already have an acount? <a href="login.php">Login</a>
            </div>
        </div>

</body>

</html>