<?php
//declaring variables
    $host='localhost';
    $user='root';
    $pass='';
    $db='blog';
//connect to the database
$connect=mysqli_connect($host,$user,$pass,$db) or die("connection failed".mysqli_connect_error());

