<?php
session_start();
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['Member_ID'])) {
    header("Location: login.html");
    exit();
}

// Fetch available courses
$courses_query = "SELECT * FROM courses";
$courses_result = $con->query($courses_query);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['Member_ID'];
    $course_id = $_POST['course_id'];
    $payment_method = $_POST['payment_method'];
    
    // Fetch course price
    $course_query = "SELECT price FROM courses WHERE id = ?";
    $stmt = $con->prepare($course_query);
    $stmt->bind_param("i", $course_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $course = $result->fetch_assoc();
    $amount = $course['price'];
    
    // Insert payment details into database
    $insert_payment = "INSERT INTO payments (user_id, course_id, amount, payment_method, status) VALUES (?, ?, ?, ?, 'Pending')";
    $stmt = $con->prepare($insert_payment);
    $stmt->bind_param("iids", $user_id, $course_id, $amount, $payment_method);
    $stmt->execute();
    
    $payment_id = $stmt->insert_id;
    $_SESSION['payment_id'] = $payment_id;
    
    header("Location: payment2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Flame - Course Selection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Styles/Home.css">
    <link rel="stylesheet" type="text/css" href="Styles/payment.css">
    <script src="JavaScripts/Home.js"></script>
</head>
<body>
    <?php include 'homeheader.php'; ?>
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Select Your Course</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="course">Choose a Course:</label>
                        <select class="form-control" id="course" name="course_id" required>
                            <?php while($course = $courses_result->fetch_assoc()): ?>
                                <option value="<?php echo $course['id']; ?>"><?php echo $course['name']; ?> - $<?php echo number_format($course['price'], 2); ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Payment Method:</label>
                        <div class="d-flex justify-content-around">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="visa" value="visa" required>
                                <label class="form-check-label" for="visa">
                                    <img src="Images/visa.png" alt="Visa" style="width:60px;height:auto;">
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="mastercard" value="mastercard" required>
                                <label class="form-check-label" for="mastercard">
                                    <img src="Images/mastercard.png" alt="Mastercard" style="width:60px;height:auto;">
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Proceed to Payment</button>
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