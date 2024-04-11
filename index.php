
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gastenboek</title>
</head>
<body>
<header class="header-outer">
	<div class="header-inner responsive-wrapper">
		<div class="header-logo">
			<img src="images/Screenshot 2024-03-18 143858.png" />
		</div>
		<nav class="header-navigation">
            <a href="index.php">chat</a>
			<a href="message.php">message</a>
			<a href="contact.php">help?</a>
			<button>Menu</button>
		</nav>
	</div>
</header>
<div class="container2">
        <?php include ('get_message.php'); ?>
    </div>
</body>
</html>