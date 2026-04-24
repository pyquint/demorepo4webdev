<?php
session_start();

if ($_POST) {
    $username = $_POST['username'];
    $_SESSION['username'] =  $username;

    header("Location: dashboard.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <title>Login Page</title>
</head>

<body>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <input type="submit" value="Login">
    </form>

</body>

</html>
