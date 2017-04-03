<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        <h1>Sign In</h1>
        <div class="regForm">
            <form method="post" action="conf/connect.php">
                <input type="hidden" name="path" value="lIn">

                <div class="formBlock">
                    <label for="userName">Username</label>
                    <br>
                    <input type="text" name="userName" id="userName">
                </div>

                <div class="formBlock">
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="password">
                </div>

                <div class="formBlock">
                    <button type="submit" id="btnSignup">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>