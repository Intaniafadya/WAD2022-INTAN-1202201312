<?php
function edit($data){
    global $showroom;

    $email = $data["email"];
    $nama = $data["nama"];
    $no = $data["no"];
    $password = $data["password"];

    if($data['navbar'] != ''){
        if($data['navbar'] == '1'){
            setcookie('navbar', 'bg-danger', time()+3600);
        }else if($data['navbar'] == '2'){
            setcookie('navbar', 'bg-success', time()+3600);
        }else if($data['navbar'] == '3'){
            setcookie('navbar', 'bg-primary', time()+3600);
        }
    }
    $_SESSION['nama'] = $nama;

    $query = "UPDATE users SET email='$email', nama='$nama', no_hp='$no', password='$password' WHERE email='$email'";
    mysqli_query($showroom, $query);   
}
?>