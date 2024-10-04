<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $size = $_POST["size"];

    // Process the data (e.g., save to a database, send emails, etc.)

    // For demonstration purposes, let's just print the received data:
    echo "Thank you, $name! Your order has been received.";
}
?>
