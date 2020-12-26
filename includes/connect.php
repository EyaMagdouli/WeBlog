<?php
    $host='localhost';
    $user='root';
    $pass='';
    $db='blog';
$connect=mysqli_connect($host,$user,$pass,$db);
if(!$connect){
    die("connection failed".mysqli_connect_error());
}
