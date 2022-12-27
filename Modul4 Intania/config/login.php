<?php
require "connector.php";

function login($data){
    global $showroom;
    $email = $data["email"];
    $password = $data["password"];
    $remember = $data["remember"];

    if($remember){
        setcokie("email", $email, time()+3600);
        setcookie("password", $password, time()+3600);
    }

    $query  = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $data = mysqli_query($showroom, $query);
    $datas = mysqli_fetch_assoc($data);
    return $datas;
}
?>