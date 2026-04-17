<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "<h2>Thank you $name, your enquiry has been received.</h2>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>

<body>

<header><h1>Contact</h1></header>

<nav>
<a href="index.html">Home</a>
<a href="services.html">Services</a>
<a href="about.html">About</a>
<a href="portfolio.html">Portfolio</a>
<a href="contact.php">Contact</a>
</nav>

<div class="container">

<div class="card">

<form method="post" onsubmit="return validateForm()">
Name:<br>
<input type="text" name="name" id="name"><br><br>

Email:<br>
<input type="text" name="email" id="email"><br><br>

<button type="submit">Send</button>
</form>

</div>

</div>

</body>
</html>
