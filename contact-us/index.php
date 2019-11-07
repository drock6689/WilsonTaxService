<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Best place to get your taxes done at a competitive rate in the Ashland, Lincoln, and Omaha area.">
    <title>Contact Us | Wilson Tax Service</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/contact-us/index.css">
</head>
<body>
    <?php
        include "../shared/nav-bar/nav-bar.php";
    ?>

    <div class="container">
        <h1>Contact Us</h1>
        <h4>* Required fields</h5>
        <form action="" method="post">
            <div class="form-group">
                <label for="firstName">First Name *</label><br>
                <input id="firstName" name="firstName" placeholder="Enter first name" type="text" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name *</label><br>
                <input id="lastName" name="lastName" placeholder="Enter last name" type="text" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label><br>
                <input id="email" name="email" placeholder="Enter email" type="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label><br>
                <input id="phone" name="phone" placeholder="Enter phone number" type="text">
            </div>
            <div class="form-group">
                <label for="company">Company</label><br>
                <input id="company" name="company" placeholder="Enter company" type="text">
            </div>
            <div class="form-group">
                <label for="discovery">How did you discover us? *</label><br>
                <input id="discovery" name="discovery" placeholder="Method of discovery" type="text" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label><br>
                <textarea id="message" name="message" placeholder="Your message here" type="text"></textarea>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>

        <?php
            include "../shared/tax-forms-and-links/tax-forms-and-links.php";
            include "../shared/footer/footer.php";
        ?>
    </div>
</body>
</html>