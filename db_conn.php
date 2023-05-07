<?php
$server="localhost";
$user="root";
$pass="";
$dbname="auth_db";
try{
    $conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "connection failed :". $e->getMessage();
}
