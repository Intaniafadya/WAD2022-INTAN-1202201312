<?php
require "connector.php";

function register($data){
    global $showroom;
    $email = $data["email"];
    $nama = $data["nama"];
    $no = $data["no"];
    $password = $data["password"];

    $query  = "INSERT INTO users VALUES ('', '$nama', '$email', '$password', '$no')";
    mysqli_query($showroom, $query);
    header("Location: Login-Intan.php");
}
?>