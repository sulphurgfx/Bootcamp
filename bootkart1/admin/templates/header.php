<?php
session_start();
include 'backend/onlyadmin.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Day 5</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">Bootkart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addproducts.php">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vieworders.php">View Orders</a>
                </li>
               

            </ul>

<?php if(isset($_SESSION['username'])){ ?>
            <a href="../logout.php"><button class="btn btn-outline-success my-2 my-sm-0">Logout</button></a>
<?php }else { ?>
            <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0">Login</button></a>
<?php  } ?>

        </div>
    </nav>


   