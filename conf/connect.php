<?php
include ('config.php');
$path=$_REQUEST['path'];
$dd=$_REQUEST['dd'];

if($dd=='lOut'){
    $user=new User();
    $user->Logout();
}

if($path=='reg'){
    $userName=$_POST['userName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    $user=new User();
    $user->Register($userName, $email, $phone, $password, $confirmPassword);
}elseif($path=="lIn"){
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $user=new User();
    $user->Login($userName, $password);
}

