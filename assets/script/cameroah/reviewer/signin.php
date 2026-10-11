<?php
	if(!isset($_POST['cameroah-reviewer-submit'])) {
		http_response_code(401);
		header("Location: ../../../../cameroah/");
		exit();
	}

	$username = $_POST['username'];
	$password = $_POST['password'];
	// CameroahReviewerSecret!
	$hashed = '$2a$12$gymtZZy0TNAPJ6Ys1wFZHeomDO1JINS8NceqH0iNMDfRio.W59H/y';

	if(strcmp($username, "cameroah-reviewer") != 0 || !password_verify($password, $hashed)) {
                http_response_code(401);
                header("Location: ../../../../cameroah/");
                exit();
	}

	session_start();
	$_SESSION['username'] = $username;
	header("Location: ../../../../cameroah/reviewers/dashboard");
