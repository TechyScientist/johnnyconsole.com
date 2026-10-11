<?php
session_start();
if(isset($_SESSION['username']) && strcmp($_SESSION['username'], 'cameroah-reviewer') == 0) {
    http_response_code(301);
    header('Location: dashboard.php');
    exit();
}
$page = "projects";
include("../../assets/include/header.php"); ?>

<style>
	form label, form input {
            display: inline-block;
    }

    form input {
        width: 15em;
        background-color: rgba(0,0,0,0);
        color: var(--blue);
        border: 0.0625em solid var(--blue);
        padding: 0.313em;
        border-radius: 0.5em;
    }

    form input[type="submit"] {
        width: 25em;
        height: 3em;
        color: white;
        background-color: var(--blue);
        border-radius: 0.5em;
    }

    form {
        margin-bottom: 10px;
    }
</style>

<h3>Reviewer Access</h3>
<p>Designated reviewers may access draft chapters through the website. Use this form to sign in to the reviewer dashboard.</p><br/>

<div style="display: -webkit-box; -webkit-box-pack: center;">
	<form action="../../assets/script/cameroah/reviewer/signin.php" method="post">
		<label for="username">Username:</label>
		<input type="text" name="username" required/><br/><br/>
		<label for="password">Password:</label>
		<input type="password" name="password" required/><br/><br/>
		<input type="submit" name="cameroah-reviewer-submit"/>
	</form>
<div>

<?php include("../../assets/include/footer.php"); ?>
