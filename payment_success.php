<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Flame - Payment Successful</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Styles/Home.css">
    <link rel="stylesheet" type="text/css" href="Styles/payment.css">
    <script src="JavaScripts/Home.js"></script>
</head>
<body>
    <?php include 'homeheader.php'; ?>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="card-title text-success">Payment Successful!</h2>
                        <p class="card-text">Thank you for your purchase. Your course access will be activated shortly.</p>
                        <a href="my_Curses.php" class="btn btn-primary">My courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'homefooter.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
