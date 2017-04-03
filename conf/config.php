<?php
session_start();
class User{
    public function __construct()
    {
        try{
            $this->db=new PDO('mysql:host=localhost;dbname=loginLesson','root','password');
        }catch (PDOException $e){
            die("Connection failed to database.");
        }
    }


    public function Register($userName, $email, $phone, $password, $confirmPassword){
        if($password==$confirmPassword){
                $h_password=md5($password);
                $sql="insert into users(userName, email ,phone, password, created_at) values 
                    ('$userName', '$email', '$phone', '$h_password', now())";
                $this->db->query($sql);
                header("location: ../");
        }else{
            echo "Passoword and confirm password is not mathch.";
        }
    }



    public function Login($username, $password){
        $result=$this->db->query("select * from users where userName='$username'");
        $row=$result->fetch(PDO::FETCH_ASSOC);
        $dbName=$row['userName'];
        if($dbName){
                $dbPass=$row['password'];
                $h_password=md5($password);
                if($dbPass== $h_password){
                    $_SESSION['login']=true;
                    header("location: ../user/home");
                }else{
                    echo "Your password is invalid.";
                }
        }else{
            echo "The select username is not found.";
        }
    }
    public function Logout(){
        unset($_SESSION['login']);
        header("location: ../");
    }
}