<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="ecommerce";
    $conn="";

    try{
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    }
    catch(mysqli_sql_exception){
        //This catch function fetches the mysqli exceptions
    }
    if($conn){
        //This if statement verifies the state of the database if it is connected or not
    }
?>