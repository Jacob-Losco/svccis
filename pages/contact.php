<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saint Vincent ACM - Contact</title>
    <meta charset="utf-8"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./svccis/static/css/contact.css"/>
</head>
<body>
    <?php include("./svccis/includes/header_include.php");?>
    <div class="wrapper">
        <div class="container">
            <div class="content"><h1>Contact Us!</h1></div>
            <div class="content">
                <form method="POST" action="">
                    <div class="element"><input type="text" name="name" placeholder="Enter your name..." required></div>
                    <div class="element"><input type="email" name="email" placeholder="Enter your email..." required></div>
                    <div class="element"><textarea name="message" id="msg" cols="30" rows="10" placeholder="Type your message..." required></textarea></div>
                    <input type="submit" name="submit" value="Submit Form">
                </form>
            </div>
        </div>
    </div>
    <?php include("./svccis/includes/footer_include.php");?>
</body>
</html>