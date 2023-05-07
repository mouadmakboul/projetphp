<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">

        <form class="shadow w-450" action="php/login.php" method="post">
            <h4 class="text-center">Login</h4><br>

            <div class="mb-3">
                <label class="form-label" name="uname">User name</label>
                <input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname'])) ? $_GET['uname'] : "" ?>">
            </div>



            <div class="mb-3">
                <label class="form-label" name="pass">Password</label>
                <input type="text" class="form-control" name="pass" value="<?php echo (isset($_GET['pass'])) ? $_GET['pass'] : "" ?>">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="index.php" class="link-secondary">Sign up</a>


        </form>
    </div>
</body>

</html>