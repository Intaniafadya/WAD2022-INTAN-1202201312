<?php
function edit($data, $file, $id){
    global $showroom;


    $nama = $data["car"];
    $pemilik = $data["owner"];
    $merk = $data["brand"];
    $tanggal = $data["date"];
    $deskripsi = $data["deskripsi"];
    $status = $data["status"];
    if($file["foto"]["name"] == ""){
        $query ="UPDATE showroom_intan_table SET nama_mobil = '$nama', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggal', deskripsi = '$deskripsi', status_pembayaran = '$status[0]' WHERE id_mobil = $id";
        $data = mysqli_query($showroom, $query);
    } else{
        $foto = $file["foto"]["name"];
        $tmp = $file["foto"]["tmp_name"];
        move_uploaded_file($tmp, "../assets/images/$foto");
        $query ="UPDATE showroom_intan_table SET nama_mobil = '$nama', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggal', deskripsi = '$deskripsi', foto_mobil = '$foto', status_pembayaran = '$status[0]' WHERE id_mobil = '$id'";
        $data = mysqli_query($showroom, $query);
    }

    Header("Location: ../pages/ListCar-Intan.php");
}

?>