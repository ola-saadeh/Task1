<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
</head>
<body>
    <h1>Reservation Details</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $tourPackage = $_POST["tour-package"];
        $arrivalDate = $_POST["arrival-date"];
        $numberOfPersons = $_POST["person"];
        $coupon = $_POST["coupon"];
        $boarding = isset($_POST["boarding"]) ? "Yes" : "No";
        $fooding = isset($_POST["fooding"]) ? "Yes" : "No";
        $sightseeing = isset($_POST["sightseeing"]) ? "Yes" : "No";
        $service = $_POST["service"];

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Tour Package:</strong> $tourPackage</p>";
        echo "<p><strong>Arrival Date:</strong> $arrivalDate</p>";
        echo "<p><strong>Number of Persons:</strong> $numberOfPersons</p>";
        echo "<p><strong>Coupon:</strong> $coupon</p>";
        echo "<p><strong>Boarding:</strong> $boarding</p>";
        echo "<p><strong>Fooding:</strong> $fooding</p>";
        echo "<p><strong>Sightseeing:</strong> $sightseeing</p>";
        echo "<p><strong>Service Agreement:</strong> $service</p>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
</body>
</html>
