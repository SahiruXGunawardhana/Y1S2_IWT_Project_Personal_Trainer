<?php
session_start();
require_once 'config.php';

// Check if user is logged in and payment_id is set
if (!isset($_SESSION['Member_ID']) || !isset($_SESSION['payment_id'])) {
    header("Location: login.html");
    exit();
}

$payment_id = $_SESSION['payment_id'];

// Fetch payment details
$payment_query = "SELECT p.*, c.name AS course_name, c.price AS course_price 
                  FROM payments p 
                  JOIN courses c ON p.course_id = c.id 
                  WHERE p.id = ?";
$stmt = $con->prepare($payment_query);
$stmt->bind_param("i", $payment_id);
$stmt->execute();
$result = $stmt->get_result();
$payment = $result->fetch_assoc();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST['card_number'];
    $card_holder = $_POST['card_holder'];
    $expiry_date = $_POST['expiry_date'];
    $cvc = $_POST['cvc'];
    
    // Update payment details
    $update_payment = "UPDATE payments SET card_number = ?, card_holder = ?, expiry_date = ?, status = 'Completed' WHERE id = ?";
    $stmt = $con->prepare($update_payment);
    $stmt->bind_param("sssi", $card_number, $card_holder, $expiry_date, $payment_id);
    $stmt->execute();
    
    // Redirect to success page
    header("Location: payment_success.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Flame - Payment Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Styles/Home.css">
    <link rel="stylesheet" type="text/css" href="Styles/payment.css">
    <script src="JavaScripts/Home.js"></script>
</head>
<body>
    <?php include 'homeheader.php'; ?>
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Confirm Your Payment</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $payment['course_name']; ?></h5>
                        <p class="card-text">Amount: $<?php echo number_format($payment['amount'], 2); ?></p>
                        <p class="card-text">Payment Method: <?php echo ucfirst($payment['payment_method']); ?></p>
                    </div>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="card_holder">Cardholder Name:</label>
                        <input type="text" class="form-control" id="card_holder" name="card_holder" required>
                    </div>
                    <div class="form-group">
                        <label for="card_number">Card Number:</label>
                        <input type="text" class="form-control" id="card_number" name="card_number" required pattern="\d{16}" title="Please enter a valid 16-digit card number">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="expiry_date">Expiry Date (MM/YY):</label>
                            <input type="text" class="form-control" id="expiry_date" name="expiry_date" required pattern="(0[1-9]|1[0-2])\/\d{2}" title="Please enter a valid expiry date (MM/YY)">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cvc">CVC:</label>
                            <input type="text" class="form-control" id="cvc" name="cvc" required pattern="\d{3}" title="Please enter a valid 3-digit CVC">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Confirm Payment</button>
                </form>
            </div>
        </div>
    </div>

    <?php include 'homefooter.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
