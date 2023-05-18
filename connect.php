<?php
    include_once("connect.php");

    $hostName= "localhost";
    $userName = "root";
    $password="";
    $dbName="db_order";
    $conn= new mysqli($hostName,$userName,$password,$dbName);



    if($conn){
        echo "";
    }else{
        echo "not connected";
    }
?>