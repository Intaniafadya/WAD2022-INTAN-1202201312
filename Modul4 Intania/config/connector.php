<?php
$showroom=mysqli_connect("localhost", "root", "", "showroom_intan_table", 3308);

function showAll(){
    global $showroom;
    $wadah=[];
    $query="SELECT * FROM showroom_intan_table";
    $data=mysqli_query($showroom, $query);
    while ($datas= mysqli_fetch_assoc($data)) {
        $wadah[] = $datas;
    };

    return $wadah;
}
function detail($id){
    global $showroom;
    $wadah=[];
    $query="SELECT * FROM showroom_intan_table WHERE id_mobil=$id";
    $data=mysqli_query($showroom, $query);
    while ($datas= mysqli_fetch_assoc($data)) {
        $wadah[] = $datas;
    };

    return $wadah;
}

function getuser($nama){
    global $showroom;
    $query = "SELECT * FROM users WHERE nama='$nama'";
    $data = mysqli_query($showroom, $query);

    return mysqli_fetch_assoc($data);
}
?>