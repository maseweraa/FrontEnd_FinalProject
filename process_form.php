<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Razer - confirmation</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <header>
		<div class="logo">
			<img src="img/image5.jpg" alt="Logo">
		</div>
        <nav>
            <ul>
                <li><a href="index.html" id="homeLink">HOME</a></li>
                <li><a href="shop.html" id="shopLink">SHOP</a></li>
            </ul>
        </nav>
    </header>

	<h2>Razer shop - Order Confirmation</h2>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST["email"];
		$street = $_POST["street"];
		$postalCode = $_POST["postalCode"];
		$city = $_POST["city"];
		$item = $_POST["item"];

		echo "<p>Order was placed!</p>";
		echo "<p>E-mail: " . $email . "</p>";
		echo "<p>Adress: " . $street . " " . $postalCode . " " . $city . "</p>";
		echo "<p>Selected item: " . $item . "</p>";
		}

	?>

</body>
</html>
