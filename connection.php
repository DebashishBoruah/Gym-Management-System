<?php


    $host = 'localhost:3306';
    $user = 'root';
    $pass = 'root';
    $dbname = 'rimi_gym';



    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if(! $conn)
    {
        die ("Couldnot Connect :".mysqli_error());
    }
   
?>