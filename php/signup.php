<?php
if (isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['pass']))
    include "../db_conn.php";
$fname = $_POST['fname'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$data = "fname " . $fname . "uname " . $uname;
if (empty($fname)) {
    $em = "full name is required";
    header("Location:../index.php?error=$em&$data");
    exit;
} elseif (empty($uname)) {
    $em = "user name is required";
    header("Location:../index.php?error=$em&$data");
    exit;
} elseif (empty($pass)) {
    $em = "password is required";
    header("Location:../index.php?error=$em&$data");
    exit;
} else {
    //hashing the password
    // on declare un variable on le passe au parametre notre password recuperer au debut et password default
    $pass=password_hash($pass,PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (fname,username,password) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$fname, $uname, $pass]);
    header("location:../index.php?success=Your account has succesfully created");
    exit;
    
    
}
