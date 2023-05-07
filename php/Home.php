<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {


?>
    <!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    </head>

    <body>

        <div class="d-flex justify-content-center align-items-center vh-100">


            <h4 class="text-center display-4">Welcome mouad to ur application <?= $_SESSION['fname'] ?></h4>
            <a href="logout.php" class="btn btn-warning vh-300 justify-content-center align-items-center">Logout here</a>
            
        </div>
        
    </body>

    </html>
<?php } else {
    header("location:login.php");
}
