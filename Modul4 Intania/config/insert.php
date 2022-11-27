<?php
require "connector.php";

function insert($data, $file){
    global $showroom;

    $nama = $data["car"];
    $pemiliki = $data["owner"];
    $merk = $data["brand"];
    $tanggal = $data["date"];
    $deskripsi = $data["deskripsi"];
    $status = $data["status"];
    $foto = $file["foto"]["name"];
    $tmp = $file["foto"]["tmp_name"];
    move_uploaded_file($tmp, "../assets/images/$foto");

    $query="INSERT INTO showroom_intan_table VALUES('', '$nama', '$pemiliki', '$merk', '$tanggal', '$deskripsi', '$foto', '$status[0]')";
    mysqli_query($showroom, $query);
    return mysqli_affected_rows($showroom);
}
?>