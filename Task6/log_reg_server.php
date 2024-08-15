<?php
session_start();

$username = "";
$email = "";
$errors = array();


$db = mysqli_connect('localhost', 'root', '', 'task6');


if (isset($_POST['register'])) {

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password1']);



    if (empty($name)) {
        array_push($errors, "Name is required");
    }
    if (empty($mobilenumber)) {
        array_push($errors, "Mobile No is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_1) {
        array_push($errors, "The two passwords do not match");
    }


    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$mobilenumber' OR mobilenumber='$mobilenumber' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
        if ($user['mobilenumber'] === $mobilenumber) {
            array_push($errors, "mobile number already exists");
        }
    }


    if (count($errors) == 0) {
        $password = ($password_1);

        $query = "INSERT INTO users (name,mobilenumber, email,username, password) 
  			  VALUES('$name','$mobilenumber', '$email','$username', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "";
        header('location: Home.php');
    }
}

// LOGIN USER
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password1']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "";
            header('location: Home.php');
        } else {
            array_push($errors, "Wrong username/password");
        }
        $_SESSION['username'] = $username;
    }
}
