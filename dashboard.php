<?php
define("DATE_FORMAT", "F d, Y - h:i A");

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}

if (isset($_COOKIE['last_visit'])) {
    $last = $_COOKIE['last_visit'];
} else {
    $last = date(DATE_FORMAT);
}

setcookie('last_visit', date(DATE_FORMAT), time() + (60 * 60 * 24), "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <title>Dashboard</title>
</head>

<body>
    <?php
    echo "<h1>" . "Welcome, " . $_SESSION['username'] . "!" . "</h1>";

    echo "Today is: " . date(DATE_FORMAT) . "<br><br>";

    echo "Your last visit was: " . $last . "<br><br>";
    ?>

    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>

</body>

</html>
