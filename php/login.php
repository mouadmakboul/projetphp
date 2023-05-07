<?php
session_start();
if (isset($_POST['uname']) && isset($_POST['pass']))
    include "../db_conn.php";

$uname = $_POST['uname'];
$pass = $_POST['pass'];
$data =  "uname " . $uname;

 if (empty($uname)) {
    $em = "user name is required";
    header("Location:../login.php?error=$em&$data");
    exit;
} elseif (empty($pass)) {
    $em = "password is required";
    header("Location:../login.php?error=$em&$data");
    exit;
} else {
    //we don't need hashing here
    
    
    $sql = "SELECT * FROM user WHERE username =? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$uname]);
    if($stmt->rowCount()==1){
        $user=$stmt->fetch();
        $username=$user['username'];
        $password=$user['password'];
        $fname=$user['fname'];
        $id=$user['id'];
        if($username===$uname){
            if(password_verify($pass,$password)){
             $_SESSION['id']=$id;
             $_SESSION['fname']=$fname;
             header("Location:Home.php");

            }
        }

    }else {
        $em="Incorrect user name or pasword";
        header("Location:../login.php?error=$em&$data");
        
        exit;

    }}

    
    
    

