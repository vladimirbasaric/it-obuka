<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action='' method='GET'>
        <input type='radio' name='color' value='orange'> orange
        <input type='radio' name='color' value='blue'> blue
        <input type='radio' name='color' value='green'> green

        <br>

        <input type='submit' name='submit' value='sacuvaj preferencije'>

    </form>

    <?php
        if(isset($_GET['submit'])){
            echo "Strana se prikazuje 2. put";
            $_SESSION['color'] = $_GET['color'];
        } 
    ?>



    <?php
        if(isset($_GET['submit'])){
            //2. put
            $style = 'color: '. $_SESSION['color'].';';
        } else {
            // 1. put
            $style = '';
        }
    ?>

    <p style="<?php echo $style;?>">
        Test tekst.
    </p>


    

    <br>
    <a href='2.php'> 2.php </a>
    <a href='3.php'> 3.php </a>

</body>

</html>