<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login - 2 </title>
</head>

<body>
    <?php
    if (
        $_GET['username'] == 'pera' &&
        $_GET['password'] == 'pera1234'
    ) {

        echo "Hello " . $_GET['username'];
        $_SESSION['username'] = $_GET['username'];
        $_SESSION['mode'] = 'admin';
        echo "<br>";
        echo "<a href='3.php'> Click here to go to 3.php. </a>";

    } else {
        echo "Wrong username and/or password!";
    }

    ?>

</body>

</html>