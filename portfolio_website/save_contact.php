<?php

$conn = mysqli_connect("localhost","root","","portfolio_db");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

mysqli_query($conn, "INSERT INTO contacts (name,email,message) VALUES ('$name','$email','$message')");

echo "<!doctype html><html><head><meta charset='utf-8'><title>Saved</title><link rel='stylesheet' href='style.css'></head><body>"; 
echo "<div class='container'><h2>Thank you, your message is saved.</h2>"; 
echo "<p><a href='index.html'>Return to home</a> | <a href='view_contacts.php'>View messages</a></p></div></body></html>";
?>