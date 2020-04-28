<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - 3</title>
</head>
<body>
    <?php
        if($_SESSION['mode'] == 'admin'){
            echo "Hello admin ".$_SESSION['username'];
        }
        else {
            echo "Hello user ".$_SESSION['username'];
        }

        
    ?>

    <form action='4.php' method='GET'>
        <input type='submit' value = 'Logout'>
    </form>

</body>
</html>