<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
<div class="container">
    <div class="pageBody">
        <h1>Sign Up</h1>
        <div class="regForm">
            <form method="post" action="conf/connect.php">
                <input type="hidden" name="path" value="reg">

                <div class="formBlock">
                    <label for="userName">Username</label>
                    <br>
                    <input type="text" name="userName" id="userName">
                </div>
                <div class="formBlock">
                    <label for="email">Email Address</label>
                    <br>
                    <input type="email" name="email" id="email">
                </div>
                <div class="formBlock">
                    <label for="phone">Phone Number</label>
                    <br>
                    <input type="tel" name="phone" id="phone">
                </div>
                <div class="formBlock">
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="password">
                </div>
                <div class="formBlock">
                    <label for="confirmPassword">Confirm Your Password</label>
                    <br>
                    <input type="password" name="confirmPassword" id="confirmPassword">
                </div>
                <div class="formBlock">
                    <button type="submit" id="btnSignup">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>