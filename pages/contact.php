<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saint Vincent ACM - Contact</title>
    <meta charset="utf-8"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/contact.css"/>
</head>
<body>
    <?php include("../includes/header_include.php");?>
    <div class="wrapper">
        <div class="container">
            <div class="content" style="margin-bottom: 15px;"><h1>Contact Us</h1></div>
            <div class="content">
                <?php 
                    if ($_GET['status'] == 'true') {
                        echo '<div style="margin-top: 8px; padding: 8px; color: rgb(108, 110, 166); border: 1px solid rgb(108, 110, 166); border-radius: 15px;">Your message has been sent!</div>';
                    }
                ?>
                <form method="POST" action="../scripts/form_handling.php">
                    <div class="element">
                        <label for="name">Name: </label>
                        <div class="input"><input type="text" name="name" placeholder="Enter your name..." required></div>
                    </div>
                    <div class="element">
                        <label for="email">Email: </label>
                        <div class="input"><input type="email" name="email" placeholder="Enter your email..." required></div>
                    </div>
                    <div class="element">
                        <label for="message">Message: </label>
                        <div class="input"><textarea name="message" id="msg" cols="30" rows="10" placeholder="Type your message..." required></textarea></div>
                    </div>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <?php include("../includes/footer_include.php");?>
</body>
</html>