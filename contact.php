<?php
    $page = "contact";
    require_once "assets/include/header.php";
    require_once "assets/script/vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
?>
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
<?php if(isset($_GET['message'])) {
echo '<p id="success"><strong>Success:</strong> Message Sent</p></center>';
}
else if(isset($_GET['error'])) {
	if($_GET['error'] == "empty-fields") {
		echo '<p id="error"><strong>Error:</strong> Please fill in all fields.</p>';
	}
	else if($_GET['error'] == "bad-email") {
		echo '<p id="error"><strong>Error:</strong> Invalid Email Address</p>';
	}
	else if($_GET['error'] == "captcha") {
		echo '<p id="error"><strong>Error:</strong> You must solve the captcha correctly to send the message.</p>';
	}
	else {
		echo '<p id="error"><strong>Error:</strong> Undefined Error code: ' . $_GET['error'] . '.</p>';
	}
} ?>
<form action="assets/script/contact.php" method="post">
    <div class="form-field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-field">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-field">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required>
    </div>
    <div class="form-field">
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="<?php echo $_ENV['RECAPTCHA_SITE_KEY'] ?>" data-action="CONTACT"></div>
    <button type="submit" id="contact-submit" name="contact-submit">Send Message</button>
</form>	
<?php include("assets/include/footer.php"); ?>
