<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Here you can perform further actions like sending the email, storing data in a database, etc.
    // For demonstration purposes, let's just display the received data.
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
}
?>
