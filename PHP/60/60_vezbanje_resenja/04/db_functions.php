<?php
    function connect(){
        global $connection; 

        $connection = mysqli_connect('localhost', 'root', '', 'dataMonitoring');
        if(mysqli_connect_errno()){
            $connection=null;
            die('Error with connection: '.mysqli_connect_error());
        }
    }

    function disconnect(){
        global $connection;

        mysqli_close($connection);
    }

    function insert_values($value, $error_type){
        global $connection;

        $query = "insert into dataErrors values ($value, $error_type)";
        mysqli_query($connection, $query) or die('Error with insertion: '.mysqli_error($connection));
    }
?>