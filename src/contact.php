<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Contact Page</title>
</head>

<body>

    <?php include('include/header.php');?>
    <div class="banner-page-2">
    <h1 id="header-contact-page">Join Us!</h1>
        <div id="contact-page-text">
            If you would like to join us in our community, <br>please send us an e-mail.<br><br>
            By joining this community, you can get <br>many discounts on games for all platforms.<br><br>
            You can even get a chance to win<br> if you're a subscriber for a long time<br>
        </div>
        <div id="contact-form-container">
            <form class="contact-form" action="contact.php?catname=Contact Us" method="POST">
                <label>Send us an E-mail!</label>
                <input type="text" name="name" placeholder="Full name"><br />
                <input type="text" name="mail" placeholder="Your e-mail"><br />
                <input type="text" name="subject" placeholder="Subject"><br>
                <textarea name="message" placeholder="Message"></textarea><br>
                <button type="submit" name="submit">SEND</button> <br />
            </form>
        </div>

    </div>

    <?php include('include/footer.php'); ?>

</body>

</html>