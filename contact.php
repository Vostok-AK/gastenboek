<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
    <div class="form">
    <form  action="https://formsubmit.co/Scrumpies453@gmail.com" method="POST" >
                    <label for="fname">Name</label>
                    <input type="text" class="form__field" name="firstname" placeholder="Your name.." required="">
              
                    <label for="lname">Email</label>
                    <input type="text" class="form__field" name="email" placeholder="Your email please.." required="">
              
                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="Nederland">Nederland</option>
                        <option value="Duitsland">Duitsland</option>
                        <option value="België">België</option>
                    </select>
              
                    <label for="subject">Subject</label>
                    <textarea class="form__field" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    
                    <button class="button" type="submit" value="submit">Submit</button>
     </form>
    </div>
</body>
</html>
