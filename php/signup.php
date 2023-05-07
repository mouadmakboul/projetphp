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
    $sql = "INSERT INTO user (fname,username,password) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$fname, $uname, $pass]);
    echo "vous etes enregistrées avec succés";
}
