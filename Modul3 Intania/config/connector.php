<?php
$showroom=mysqli_connect("localhost", "root", "", "showroom_intan_table", 3306);

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
?>