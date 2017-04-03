<!DOCTYPE html>
<html>
<head>
    <title>My Login Lesson</title>
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
    <div class="navBar">
        <ul class="nav">
            <li><a href="/" id="appTitle">My Login App</a></li>
            <li><a href="register">Register</a></li>
            <li><a href="login">Login</a></li>
			<li><a href="<?php session_start(); if($_SESSION['login']) { echo '/user/home ';} else { echo 'login';} ?>">Home</a></li>
        </ul>
    </div>
<div class="video">
	<iframe width="640" height="360" src="https://www.youtube.com/embed/YTR-3WYURuQ" frameborder="0" allowfullscreen></iframe>
</div>
</body>
</html>