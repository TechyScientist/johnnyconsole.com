<?php
session_start();
if(isset($_SESSION['username']) && strcmp($_SESSION['username'], 'cameroah-reviewer') == 0) {
    http_response_code(301);
    header('Location: dashboard.php');
    exit();
}
$page = "projects";
include("../../assets/include/header.php"); ?>

<link rel="stylesheet" href="../../assets/style/pages/contact.css">

<h3>Reviewer Access</h3>
<p>Designated reviewers may access draft chapters through the website. Use this form to sign in to the reviewer dashboard.</p><br>

<form action="../../assets/script/cameroah/reviewer/signin.php" method="post">
    <div class="form-field">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="form-field">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
    </div>
    <button type="submit" id="cameroah-reviewer-submit" name="cameroah-reviewer-submit">Sign In</button>
</form>

<?php include("../../assets/include/footer.php"); ?>
