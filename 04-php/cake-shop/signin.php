<?php

session_start();
include 'connect.php';


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username= '$username' and password = '$password' ";
    $result = mysqli_query($con,$sql);

    $userDetails = mysqli_fetch_assoc($result);

    $username = $userDetails['username'];

    if($userDetails) {
        $_SESSION['user'] = $username;
        header("Location:products.php");
    } else {
        echo "Invalid username and password";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <div class="reg-container">
            <h2>Sign in</h2>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <button type="submit" name="login">Sign in </button>

            <p>Don't have an account? <a class="reg-link" href="signup.php"> Register Here </a></p>
        </div>
    </form>
</body>

</html>